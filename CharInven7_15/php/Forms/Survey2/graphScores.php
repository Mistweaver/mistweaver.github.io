<?php
    class graphScores {
        function scoring($a_aResponse) {
            //////// do not edit
            function fun_fast_cdf_log($x) {
                $x2 = $x*$x;
                $x3 = $x2*$x;
                $x4 = $x2*$x2;
                $x5 = $x2*$x3;
                if($x < 0) {
                    return -0.693183344784723  + 0.797429564958567 * $x + -0.319587977454469 * $x2 + 0.0351250832763034 * $x3 + 0.00457180036092443 * $x4 + 0.000279330680305292 * $x5;
                } else {
                    return -0.693553841665213  + 0.802804419955098 * $x + -0.331462585018132 * $x2 + 0.0482759824369105 * $x3 + 0.00175635836861958 * $x4 + -0.000734424938134386 * $x5;
                }
            }
            $htmlReturn = "";

            $fp = fopen("../php/Forms/Survey2/kcirt/PHP_server/hatMu.csv", "r");
            $contents = fread($fp, filesize("../php/Forms/Survey2/kcirt/PHP_server/hatMu.csv"));
            fclose($fp);
            $p_hatMu = explode("\n", $contents);
            $htmlReturn .= $p_hatMu[1];
            $htmlReturn .= "<br>";
            
            $fp = fopen("../php/Forms/Survey2/kcirt/PHP_server/hatSlot.csv", "r");
            $contents = fread($fp, filesize("../php/Forms/Survey2/kcirt/PHP_server/hatSlot.csv"));
            fclose($fp);
            $p_hatSlot = explode("\n", $contents);
            $htmlReturn .= $p_hatSlot[1];
            $htmlReturn .= "<br>";
            
            $fp = fopen("../php/Forms/Survey2/kcirt/PHP_server/modelconstants.csv", "r");
            $contents = fread($fp, filesize("../php/Forms/Survey2/kcirt/PHP_server/modelconstants.csv"));
            fclose($fp);
            $p_modelconst = explode("\n", $contents);
            $p_nuc = $p_modelconst[0];
            $p_du = $p_modelconst[1];
            $p_dy = $p_modelconst[2];
            $htmlReturn .= $p_modelconst[1];
            $htmlReturn .= "<br>";
            
            /////// delta ndxs
            $fp = fopen("../php/Forms/Survey2/kcirt/PHP_server/xndxDpos.csv", "r");
            $contents = fread($fp, filesize("../php/Forms/Survey2/kcirt/PHP_server/xndxDpos.csv"));
            fclose($fp);
            $p_xndxDpos = explode("\n", $contents);
            $htmlReturn .= $p_xndxDpos[1];
            $htmlReturn .= "<br>";
            
            $fp = fopen("../php/Forms/Survey2/kcirt/PHP_server/xndxDneg.csv", "r");
            $contents = fread($fp, filesize("../php/Forms/Survey2/kcirt/PHP_server/xndxDneg.csv"));
            fclose($fp);
            $p_xndxDneg = explode("\n", $contents);
            $htmlReturn .= $p_xndxDneg[1];
            $htmlReturn .= "<br>";
            
            $fp = fopen("../php/Forms/Survey2/kcirt/PHP_server/invSqrtDiagCovStochastic.csv", "r");
            $contents = fread($fp, filesize("../php/Forms/Survey2/kcirt/PHP_server/invSqrtDiagCovStochastic.csv"));
            fclose($fp);
            $p_invSqrtDiagCovStochastic = explode("\n", $contents);
            $htmlReturn .= $p_invSqrtDiagCovStochastic[1];
            $htmlReturn .= "<br>";
            

            $p_etaShrink = 0.004;
            $p_paramPow = 2;
            $p_nSearches = 20;
            $p_searchScale = 0.7;
            //// mxSearchEta <- matrix(0, nSearches, nuc)
            $p_searchTriesAdd = [-3, -1, -0.5, 0, 0.5, 1, 3];
            //$p_searchTriesAdd = [-3, -0.5, 0, 0.5, 3];
            $p_nTries = count($p_searchTriesAdd);
            $htmlReturn .= $p_nTries;
            $htmlReturn .= "<br>";
            
            $x_hatEta = array_fill(0, $p_nuc, 0);
            $htmlReturn .= implode(", ", $x_hatEta);
            $htmlReturn .= "<br>";
            
            $x_outCost = array_fill(0, $p_nTries, 0);
            
            ///////////////////// calculation
            ///// create y
            $a_delta = array_fill(0, $p_dy, 0);
            $htmlReturn .= "<br>";
            for($i = 0; $i < $p_dy; $i++) {
                $a_delta[$i] = $a_aResponse[$p_xndxDpos[$i] - 1] - $a_aResponse[$p_xndxDneg[$i] - 1];
            }
            $htmlReturn .= implode(", ", $a_delta);
            $htmlReturn .= "<br>";
            
            $a_y = array_fill(0, $p_dy, 0);
            $htmlReturn .= "<br>";
            ///////// NOTE!  this version cannot handle ties
            ///////// NOTE!  this version cannot handle ties
            ///////// NOTE!  this version cannot handle ties
            for($i = 0; $i < $p_dy; $i++) {
                if($a_delta[$i] < 0) $a_y[$i] = 0;
                if($a_delta[$i] > 0) $a_y[$i] = 1;
            }
            $htmlReturn .= implode(", ", $a_y);
            $htmlReturn .= "<br>";

            $p_hatSE = array_fill(0, $p_du, 0);    
            $jN = 0;
            for($isearch=0; $isearch < $p_nSearches; $isearch++) {
                $htmlReturn .= $isearch;
                /////////////////////////////////////// this recursively refines search values
                for($itry=0; $itry < $p_nTries; $itry++) {
                    $p_searchTriesAdd[$itry] = $p_searchTriesAdd[$itry] * $p_searchScale;
                }
                for($inuc=0; $inuc < $p_nuc; $inuc++) {
                    $jN_X_nuc_P_inuc = $jN * $p_nuc + $inuc;
                    $orig_eta_value = $x_hatEta[$jN_X_nuc_P_inuc];
                    for($itry=0; $itry < $p_nTries; $itry++) {
                        $x_hatEta[$jN_X_nuc_P_inuc] = $orig_eta_value + $p_searchTriesAdd[$itry]; // DZ HERE
                        $shrink_out = pow(abs($x_hatEta[$jN_X_nuc_P_inuc]), $p_paramPow);
                        $xshrinkterm = $p_etaShrink * $shrink_out;
                        for($iu=0; $iu < $p_du; $iu++) {
                            $BIG_SUM = 0;
                            for($jjnuc=0; $jjnuc < $p_nuc; $jjnuc++) {
                                $BIG_SUM = $BIG_SUM + ($p_hatSlot[$jjnuc * $p_du + $iu]) * $x_hatEta[$jN * $p_nuc + $jjnuc];
                            }
                            $p_hatSE[$iu] = $BIG_SUM;
                        }
                        $BIG_SUM = 0;
                        $kk = 0;
                        for($iy=0; $iy < $p_dy; $iy++) {
                            $thisDposNdx = $p_xndxDpos[$iy] - 1;
                            $thisDnegNdx = $p_xndxDneg[$iy] - 1;
                            $kk = $kk + 1;
                            $thisW = (($p_hatMu[$thisDposNdx] + $p_hatSE[$thisDposNdx])   -   ($p_hatMu[$thisDnegNdx] + $p_hatSE[$thisDnegNdx])) * $p_invSqrtDiagCovStochastic[$iy];
                            $BIG_SUM = $BIG_SUM + ($a_y[$p_dy * $jN + $iy] * fun_fast_cdf_log($thisW) +  (1 - $a_y[$p_dy * $jN + $iy]) * fun_fast_cdf_log(-$thisW));
                        }
                        $x_outCost[$itry] =  - $BIG_SUM * pow($kk, -1) + $xshrinkterm;   
                    }
                    $xminimum = $x_outCost[0];
                    $xndx_min = 0;
                    for($c = 1; $c < $p_nTries; $c++) {
                        if($x_outCost[$c] < $xminimum) {
                            $xminimum = $x_outCost[$c];
                            $xndx_min = $c;
                        }
                    }
                    $x_hatEta[$jN_X_nuc_P_inuc] =  $orig_eta_value + $p_searchTriesAdd[$xndx_min];   
                }
            }
            $htmlReturn .= "<br>";
            $htmlReturn .= "<br>";
            $htmlReturn .= "<br>";
            $htmlReturn .= implode(", ", $x_hatEta);
            $htmlReturn .= "<br>";

            return $htmlReturn;
        }
    }
?>