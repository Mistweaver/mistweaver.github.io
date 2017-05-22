<?php
    class displayResults {
        function survey1_results($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);

            $id = "SELECT MAX(id) FROM survey1_answers WHERE userID=$userId AND timeFinish IS NOT NULL";
            $query = "SELECT * FROM survey1_answers WHERE id=($id) LIMIT 1";
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);

            $GMean = ($row["G2"] + $row["G3"] + $row["G8"] + $row["G11"] + $row["G12"] + $row["G14"] + $row["G20"]) / 7.0;
            $LoMean = ($row["Lo2"] + $row["Lo3"] + $row["Lo19"] + $row["Lo20"]) / 4.0;
            $CurMean = ($row["Cu1"] + $row["Cu3"] + $row["Cu14"] + $row["Cu22"] + $row["Cu16"]) / 5.0;
            $LoLMean = ($row["LoL4"] + $row["LoL5"] + $row["LoL19"] + $row["LoL8"] + $row["LoL9"] + $row["LoL10"] + $row["LoL14"] + $row["LoL20"] + $row["LoL7"] + $row["LoL16"]) / 10.0;
            $CreaMean = ($row["Cr3"] + $row["Cr7"] + $row["Cr13"] + $row["Cr14"]) / 4.0;
            $AoBMean = ($row["AoB3"] + $row["AoB5"] + $row["AoB8"] + $row["AoB9"] + $row["AoB10"] + $row["AoB12"] + $row["AoB13"] + $row["AoB14"] + $row["AoB19"] + $row["AoB18"]) / 10.0;
            $ZMean = ($row["Z1"] + $row["Z2"] + $row["Z3"] + $row["Z7"] + $row["Z11"] + $row["Z13"] + $row["Z14"] + $row["Z18"] + $row["Z16"] + $row["Z17"] + $row["Z20"] + $row["Z21"]) / 12.0;
            $HopMean = ($row["Hop1"] + $row["Hop5"] + $row["Hop6"] + $row["Hop8"] + $row["Hop9"] + $row["Hop14"] + $row["Hop19"]) / 7.0;
            $PersistMean = ($row["Perse3"] + $row["Perse5"] + $row["Perse8"] + $row["Perse9"] + $row["Perse11"] + $row["Perse12"] + $row["Perse14"] + $row["Perse16"] + $row["Perse17"] + $row["Perse19"] + $row["Perse20"]) / 11.0;
            $LeMean = ($row["Le5"] + $row["Le7"] + $row["Le8"] + $row["Le13"] + $row["Le14"] + $row["Le15"] + $row["Le16"]) / 7.0;
            $PerspMean = ($row["Persp7"] + $row["Persp8"] + $row["Persp12"] + $row["Persp25"] + $row["Persp23"] + $row["Persp20"] + $row["Persp21"] + $row["Persp24"]) / 8.0;
            $PropMean = ($row["SI15"] + $row["SI20"] + $row["SI23"] + $row["SI6"]) / 4.0;
            $SocPMean = ($row["SI8"] + $row["SI2"] + $row["SI5"] + $row["SI19"] + $row["SI14"]) / 5.0;
            $HumoMean = ($row["Humo4"] + $row["Humo10"] + $row["Humo11"] + $row["Humo19"]) / 4.0;
            $TMean = ($row["T10"] + $row["T12"] + $row["T13"] + $row["T14"] + $row["T15"] + $row["T17"] + $row["T18"]) / 7.0;
            $TrustWMean = ($row["Hon2"] + $row["Hon22"] + $row["Hon26"] + $row["Hon25"] + $row["Hon21"] + $row["Hon28"]) / 6.0;
            $AuthenMean = ($row["Hon4"] + $row["Hon6"] + $row["Hon8"] + $row["Hon10"] + $row["Hon11"] + $row["Hon27"]) / 6.0;
            $BMean = ($row["B1"] + $row["B3"] + $row["B6"] + $row["B11"] + $row["B14"]) / 5.0;
            $HumiMean = ($row["Humi3"] + $row["Humi4"] + $row["Humi10"] + $row["Humi13"] + $row["Humi14"] + $row["Humi17"] + $row["Humi18"] + $row["Humi19"]) / 8.0;
            $CareFMean = ($row["Pr9"] + $row["Pr18"] + $row["Pr17"] + $row["Pr19"]) / 4.0;
            $StratMean = ($row["Pr14"] + $row["Pr22"] + $row["Pr23"] + $row["Pr3"]) / 4.0;
            $SContMean = ($row["SR1"] + $row["SR2"] + $row["SR5"] + $row["SR6"] + $row["SR8"]) / 5.0;
            $EmoAwMean = ($row["SI27"] + $row["SI30"] + $row["SI30_A"] + $row["SI9"]) / 4.0;
            $WPMean = ($row["SR10"] + $row["SR11"] + $row["SR27"] + $row["SR18"] + $row["SR21"] + $row["SR20"] + $row["SR22"]) / 7.0;
            $SpirMean = ($row["S10"] + $row["S12"] + $row["S16"] + $row["S29"] + $row["S19"] + $row["S20"] + $row["S18"] + $row["S30"] + $row["S28"]) / 9.0;
            $MPurpMean = ($row["S4"] + $row["S5"] + $row["S7"] + $row["S8"] + $row["S22"] + $row["S23"] + $row["S27"] + $row["S24"] + $row["S26"] + $row["S31"]) / 10.0;
            $PTakeMean = ($row["J1"] + $row["J23"] + $row["J24"] + $row["J26"] + $row["J28"] + $row["J30"] + $row["J27"]) / 7.0;
            $FoMean = ($row["Fo1"] + $row["Fo2"] + $row["Fo3"] + $row["Fo4"] + $row["Fo14"] + $row["Fo15"] + $row["Fo19"] + $row["Fo18"] + $row["Fo16"]) / 9.0;
            $FaMean = ($row["Fa2"] + $row["Fa6"] + $row["Fa7"] + $row["Fa8"] + $row["Fa9"] + $row["Fa11"] + $row["Fa20"] + $row["Fa16"] + $row["Fa19"]) / 9.0;
            $OptoEvMean = ($row["J5"] + $row["J6"] + $row["J15"] + $row["J17"] + $row["J18"] + $row["J21"]) / 6.0;
            $KMean = ($row["K1"] + $row["K2"] + $row["K6"] + $row["K15"] + $row["K16"] + $row["K20"] + $row["K17"]) / 7.0;
            // COMPUTING CHARACTER DIMENSIONS (8 VIRTUES)
            $ApprecMean = ($GMean + $LoMean) / 2.0;
            $IntelEngMean = ($CurMean + $LoLMean + $CreaMean + $AoBMean) / 4.0;
            $FortitudeMean = ($ZMean + $HopMean + $PersistMean + $WPMean) / 4.0;
            $InterConsMean = ($LeMean + $PerspMean + $SocPMean + $HumoMean + $TMean + $PropMean) / 6.0;
            $SincerityMean = ($TrustWMean + $AuthenMean + $BMean + $HumiMean) / 4.0;
            $TemperanceMean = ($CareFMean + $StratMean + $SContMean + $EmoAwMean) / 4.0;
            $TranscendenceMean = ($SpirMean + $MPurpMean) / 2.0;
            $EmpathyMean = ($PTakeMean + $FoMean + $FaMean + $OptoEvMean + $KMean) / 5.0;

            return array($GMean, $LoMean, $CurMean, $LoLMean, $CreaMean, $AoBMean, $ZMean, $HopMean, $PersistMean, $LeMean, $PerspMean, $SocPMean, $HumoMean, $TMean, $TrustWMean, $AuthenMean, $BMean, $HumiMean, $CareFMean, $StratMean, $SContMean, $EmoAwMean, $WPMean, $SpirMean, $MPurpMean, $PTakeMean, $FoMean, $FaMean, $OptoEvMean, $KMean, $ApprecMean, $IntelEngMean, $FortitudeMean, $InterConsMean, $SincerityMean, $TemperanceMean, $TranscendenceMean, $EmpathyMean);
            mysql_close($db_server);
        }
        function quick_results($row) {
            $GMean = ($row["G2"] + $row["G3"] + $row["G8"] + $row["G11"] + $row["G12"] + $row["G14"] + $row["G20"]) / 7.0;
            $LoMean = ($row["Lo2"] + $row["Lo3"] + $row["Lo19"] + $row["Lo20"]) / 4.0;
            $CurMean = ($row["Cu1"] + $row["Cu3"] + $row["Cu14"] + $row["Cu22"] + $row["Cu16"]) / 5.0;
            $LoLMean = ($row["LoL4"] + $row["LoL5"] + $row["LoL19"] + $row["LoL8"] + $row["LoL9"] + $row["LoL10"] + $row["LoL14"] + $row["LoL20"] + $row["LoL7"] + $row["LoL16"]) / 10.0;
            $CreaMean = ($row["Cr3"] + $row["Cr7"] + $row["Cr13"] + $row["Cr14"]) / 4.0;
            $AoBMean = ($row["AoB3"] + $row["AoB5"] + $row["AoB8"] + $row["AoB9"] + $row["AoB10"] + $row["AoB12"] + $row["AoB13"] + $row["AoB14"] + $row["AoB19"] + $row["AoB18"]) / 10.0;
            $ZMean = ($row["Z1"] + $row["Z2"] + $row["Z3"] + $row["Z7"] + $row["Z11"] + $row["Z13"] + $row["Z14"] + $row["Z18"] + $row["Z16"] + $row["Z17"] + $row["Z20"] + $row["Z21"]) / 12.0;
            $HopMean = ($row["Hop1"] + $row["Hop5"] + $row["Hop6"] + $row["Hop8"] + $row["Hop9"] + $row["Hop14"] + $row["Hop19"]) / 7.0;
            $PersistMean = ($row["Perse3"] + $row["Perse5"] + $row["Perse8"] + $row["Perse9"] + $row["Perse11"] + $row["Perse12"] + $row["Perse14"] + $row["Perse16"] + $row["Perse17"] + $row["Perse19"] + $row["Perse20"]) / 11.0;
            $LeMean = ($row["Le5"] + $row["Le7"] + $row["Le8"] + $row["Le13"] + $row["Le14"] + $row["Le15"] + $row["Le16"]) / 7.0;
            $PerspMean = ($row["Persp7"] + $row["Persp8"] + $row["Persp12"] + $row["Persp25"] + $row["Persp23"] + $row["Persp20"] + $row["Persp21"] + $row["Persp24"]) / 8.0;
            $PropMean = ($row["SI15"] + $row["SI20"] + $row["SI23"] + $row["SI6"]) / 4.0;
            $SocPMean = ($row["SI8"] + $row["SI2"] + $row["SI5"] + $row["SI19"] + $row["SI14"]) / 5.0;
            $HumoMean = ($row["Humo4"] + $row["Humo10"] + $row["Humo11"] + $row["Humo19"]) / 4.0;
            $TMean = ($row["T10"] + $row["T12"] + $row["T13"] + $row["T14"] + $row["T15"] + $row["T17"] + $row["T18"]) / 7.0;
            $TrustWMean = ($row["Hon2"] + $row["Hon22"] + $row["Hon26"] + $row["Hon25"] + $row["Hon21"] + $row["Hon28"]) / 6.0;
            $AuthenMean = ($row["Hon4"] + $row["Hon6"] + $row["Hon8"] + $row["Hon10"] + $row["Hon11"] + $row["Hon27"]) / 6.0;
            $BMean = ($row["B1"] + $row["B3"] + $row["B6"] + $row["B11"] + $row["B14"]) / 5.0;
            $HumiMean = ($row["Humi3"] + $row["Humi4"] + $row["Humi10"] + $row["Humi13"] + $row["Humi14"] + $row["Humi17"] + $row["Humi18"] + $row["Humi19"]) / 8.0;
            $CareFMean = ($row["Pr9"] + $row["Pr18"] + $row["Pr17"] + $row["Pr19"]) / 4.0;
            $StratMean = ($row["Pr14"] + $row["Pr22"] + $row["Pr23"] + $row["Pr3"]) / 4.0;
            $SContMean = ($row["SR1"] + $row["SR2"] + $row["SR5"] + $row["SR6"] + $row["SR8"]) / 5.0;
            $EmoAwMean = ($row["SI27"] + $row["SI30"] + $row["SI30_A"] + $row["SI9"]) / 4.0;
            $WPMean = ($row["SR10"] + $row["SR11"] + $row["SR27"] + $row["SR18"] + $row["SR21"] + $row["SR20"] + $row["SR22"]) / 7.0;
            $SpirMean = ($row["S10"] + $row["S12"] + $row["S16"] + $row["S29"] + $row["S19"] + $row["S20"] + $row["S18"] + $row["S30"] + $row["S28"]) / 9.0;
            $MPurpMean = ($row["S4"] + $row["S5"] + $row["S7"] + $row["S8"] + $row["S22"] + $row["S23"] + $row["S27"] + $row["S24"] + $row["S26"] + $row["S31"]) / 10.0;
            $PTakeMean = ($row["J1"] + $row["J23"] + $row["J24"] + $row["J26"] + $row["J28"] + $row["J30"] + $row["J27"]) / 7.0;
            $FoMean = ($row["Fo1"] + $row["Fo2"] + $row["Fo3"] + $row["Fo4"] + $row["Fo14"] + $row["Fo15"] + $row["Fo19"] + $row["Fo18"] + $row["Fo16"]) / 9.0;
            $FaMean = ($row["Fa2"] + $row["Fa6"] + $row["Fa7"] + $row["Fa8"] + $row["Fa9"] + $row["Fa11"] + $row["Fa20"] + $row["Fa16"] + $row["Fa19"]) / 9.0;
            $OptoEvMean = ($row["J5"] + $row["J6"] + $row["J15"] + $row["J17"] + $row["J18"] + $row["J21"]) / 6.0;
            $KMean = ($row["K1"] + $row["K2"] + $row["K6"] + $row["K15"] + $row["K16"] + $row["K20"] + $row["K17"]) / 7.0;
            // COMPUTING CHARACTER DIMENSIONS (8 VIRTUES)
            $ApprecMean = ($GMean + $LoMean) / 2.0;
            $IntelEngMean = ($CurMean + $LoLMean + $CreaMean + $AoBMean) / 4.0;
            $FortitudeMean = ($ZMean + $HopMean + $PersistMean + $WPMean) / 4.0;
            $InterConsMean = ($LeMean + $PerspMean + $SocPMean + $HumoMean + $TMean + $PropMean) / 6.0;
            $SincerityMean = ($TrustWMean + $AuthenMean + $BMean + $HumiMean) / 4.0;
            $TemperanceMean = ($CareFMean + $StratMean + $SContMean + $EmoAwMean) / 4.0;
            $TranscendenceMean = ($SpirMean + $MPurpMean) / 2.0;
            $EmpathyMean = ($PTakeMean + $FoMean + $FaMean + $OptoEvMean + $KMean) / 5.0;

            return array($GMean, $LoMean, $CurMean, $LoLMean, $CreaMean, $AoBMean, $ZMean, $HopMean, $PersistMean, $LeMean, $PerspMean, $SocPMean, $HumoMean, $TMean, $TrustWMean, $AuthenMean, $BMean, $HumiMean, $CareFMean, $StratMean, $SContMean, $EmoAwMean, $WPMean, $SpirMean, $MPurpMean, $PTakeMean, $FoMean, $FaMean, $OptoEvMean, $KMean, $ApprecMean, $IntelEngMean, $FortitudeMean, $InterConsMean, $SincerityMean, $TemperanceMean, $TranscendenceMean, $EmpathyMean);
            mysql_close($db_server);
        }
        function survey1_percentiles($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT DISTINCT userID FROM survey1_answers";
            $result = mysql_query($query);
            $x = "";
            $y = "";
            $countPeople = 0;
            while($row = mysql_fetch_assoc($result)) {
                $uid = $row["userID"];
                $id = "SELECT MAX(id) FROM survey1_answers WHERE userID=$uid AND timeFinish IS NOT NULL";
                $query = "SELECT * FROM survey1_answers WHERE id=($id) LIMIT 1";
                $result2 = mysql_query($query);
                $row2 = mysql_fetch_assoc($result2);
                if ($row2 != 0) {
                    $countPeople++;
                    if ($uid == $userId) {
                        $a = $this->quick_results($row2);
                        $y .= implode(", ", $a);
                    } else {
                        $b = $this->quick_results($row2);
                        $x .= implode(", ", $b);
                        $x .= "\n";
                    }
                }
            }
            if ($countPeople < 100) return "";
            else {
                $x = substr($x, 0, strlen($x) - 1);
                $x = explode("\n", $x);
                $z = "";
                for ($i = 0; $i < count($x); $i++) $x[$i] = explode(", ", $x[$i]);
                for ($j = 0; $j < count($x[0]); $j++) {
                    $below = 0;
                    $same = 0;
                    for ($i = 0; $i < count($x); $i++) {
                        if ($x[$i][$j] < $y[$j]) $below++;
                        else if ($x[$i][$j] == $y[$j]) $same++;
                    }
                    $calc = 100 * ($below + (0.5 * $same) / count($x));
                    $z .= $calc;
                    $z .= ", ";
                }
                return substr($z, 0, strlen($z) - 2);
            }
        }
        // Survey 2
        function survey2_results($userId, $a_aResponse) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $id = "SELECT MAX(id) FROM survey2_answers WHERE userID=$userId AND timeFinish IS NOT NULL";
            $query = "SELECT * FROM survey2_answers WHERE id=($id) LIMIT 1";
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            $contents = "";
            foreach ($row as $key => $value) {
                if ($key != "id" && $key != "userID" && $key != "timeStart" && $key != "timeFinish") $contents .= $value.", ";
            }
            $contents = substr($contents, strlen($contents) - 2);
            $a_aResponse = explode(", ", $contents);
            require_once('Survey2/graphScores.php');
            $graphScores = new graphScores();
            $toReturn = $graphScores->scoring($a_aResponse);
            mysql_close($db_server);
            return $toReturn;
        }
    }
?>