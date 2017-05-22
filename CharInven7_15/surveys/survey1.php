<?php
    session_start();
    require_once('../php/User/membership.php');
    $membership = new membership();
    //$membership->confirm_user();
    require_once('../php/Forms/takeSurvey.php');
    $takeSurvey = new takeSurvey();
    require_once('../php/Forms/Survey1/s1_pageContent.php');
    $s1_pageContent = new s1_pageContent();
    
    if (isset($_GET['status']) && $_GET['status'] == 'loggedout') {
        $membership->log_out();
    } else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout') {
        $membership->log_out_admin();
    }
    if (isset($_GET['retake']) && $_GET['retake'] == "true") {
        $takeSurvey->retake_survey1($_SESSION['userID']);
        unset($_GET['retake']);
    }
    if ($takeSurvey->check_empty_survey1($_SESSION['userID'])) $_SESSION['s1'] = 0;
    else if (!isset($_SESSION['s1'])) $_SESSION['s1'] = 1;
    if (isset($_SESSION['s1']) && ($_SESSION['s1'] < 0 || $_SESSION['s1'] >= 12)) $_SESSION['s1'] = 1;
    else if ($_POST && !empty($_POST['start'])) $_SESSION['s1'] = 1;
    if ($_POST && !empty($_POST['pageTo'])) {
        $_SESSION['s1'] = $_POST['pageTo'];
        $takeSurvey->s1_nextPage($_POST['surveyPage'], $_POST['pageTo'], $_SESSION['userID']);
    } else if ($_POST && !empty($_POST['pageBack'])) {
        $_SESSION['s1'] = $_POST['pageBack'];
        $takeSurvey->s1_prevPage($_POST['surveyPage'], $_POST['pageBack'], $_SESSION['userID']);
        //if ($_POST['pageBack'] == 0) header('location: http://www.characterinventory.org/surveys/results.php?survey=1');
    }
    if (isset($_SESSION['s1']) && $_SESSION['s1'] > 0) {
        $call = $takeSurvey->s1_setPage($_SESSION['s1'], $_SESSION['userID']);
        $completeWidth = round(($_SESSION['s1'] * 100 / 11.0), 2) - 9.09;
        $incompleteWidth = 100 - $completeWidth;
    }
    if (isset($_SESSION['s1']) && $_SESSION['s1'] == 0) $content = $s1_pageContent->opening();
    else $content = $s1_pageContent->headerContainer($_SESSION['s1'], $completeWidth, $incompleteWidth);

    // Handles number of visitors
    if (!($file = fopen("../visits/visits.txt", "r"))) {
        echo "could not open the file";
    } else {
        $visits = (int) fread($file, 20);
        fclose($file);
        $visits++;
        $file = fopen("../visits/visits.txt", "w");
        fwrite($file, $visits);
        fclose($file);
    }
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
        <title>Survey1 | CI</title>
        <link rel="stylesheet" type="text/css" href="../css/style3.css">
        <link rel="stylesheet" type="text/css" href="../css/style4.css">
    </head>
    <body>
        <style type="text/css">
            div.theButtons div.button {
                cursor: pointer;
            }
            .row {
                margin-left: 0px;
                margin-right: 0px;
            }

            .preFooter{
                box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            }
            .preFooter.row{
                background-color: #343c42;
                padding: 40px 0px;
            }
            #prefContainer{
                padding: 20px 0px;
                text-align: center;
            }
            #prefContainer p{
                position: relative;
                padding: 0px 40px 0px 0px;
                font-family: 'Open Sans', sans-serif;
                color: rgba(255,255,255,0.9);
                font-size: 18pt;
                font-weight: lighter;
                text-align: center;
                display: inline-block;
            }
            #preFooterBtn{
                position: relative;
                display: inline-block;
                margin: 0px 0px;
                vertical-align: 6px;
            }
            .footer{
                background-color: #343c42;
                box-shadow: none;
            }
            .footerInterior{
                border-top: 1px solid #ffffff;
                width: 100%;
                text-align: center;
                padding: 40px 0px;
                margin: 0px auto;
            }
            .footerInterior p{
                display: inline-block;
                font-family: 'Open Sans', sans-serif;
                font-size: 14pt;
                margin: 18px 20px 0px 0px;
                font-weight: bold;
                vertical-align: 11px;
            }
            .footerInterior a{
                color: #ffffff;
                text-decoration: none;
                -o-transition:.25s;
                -ms-transition:.25s;
                -moz-transition:.25s;
                -webkit-transition:.25s;
                transition:.25s;
            }
            .footerInterior a:hover{
                color: #d4d6d7;
            }
            i{
                display: inline-block;
                font-size: 30px;
            }
            .fa-facebook{
                margin: 0px 20px 0px 0px;
            }
            .footer2{
                text-align: center;
                box-shadow: none;
            }
            #pu{
                width: 100px;
            }
            #jtf{
                width: 140px;
            }
            .footer2 p{
                display: inline-block;
                font-family: 'Open Sans', sans-serif;
                font-size: 10pt;
                margin: 18px 24px 0px 24px;
                font-weight: normal;
                color: #343c42;
            }
            .footer2Interior{
                margin: 0px auto;
                padding: 20px 0px;
            }
            .modalBtn{
                border: none;
                border-radius: 0px;
                color: #ffffff;
                font-size: 18px;
                background-color: #717b83;
                font-family: "Open Sans", sans-serif;
                font-weight: normal;    
                margin-bottom: 20px;
            }

            .modalBtn:hover {
                border-color: #e0622b;
                background-color: transparent;
                color: #e0622b;
                font-weight: lighter;
 
                -webkit-transition: color .25s linear, background-color .25s ease-in-out, border-color .25s ease-in-out;
                -moz-transition: color .25s linear, background-color .25s ease-in-out, border-color .25s ease-in-out;
                -o-transition: color .25s linear, background-color .25s ease-in-out, border-color .25s ease-in-out;
                transition: color .25s linear, background-color .25s ease-in-out, border-color .25s ease-in-out;
            }
        </style>
        <div class="container">
            <nav id="mainNav2" class ="navbar navbar-default nav see-through"  role = "navigation">
                <div class = "navbar-header">
                    <a href="http://www.characterinventory.org"><img id="navLogo"  src="../images/virtueLogo.png"></a>

                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navList" id="datatoggle">
                        <span class = "sr-only">TEST navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>
                <div class = "collapse navbar-collapse" id ="navList">
                    <ul class = "navbar-nav navbar-right" id="navListContain">
                        <li><a href="../nav/background.php">Background</a></li>
                        <li><a href="../nav/resources.php">Resources</a></li>
                        <li><a href="../nav/about_us.php">About Us</a></li>
                        <li><a href="../nav/contact.php">Contact</a></li>
                        <li id="../profPage"><a href="../profile">Profile</a></li>
                        <li id="../logout"><a href="../?status=loggedout">Log Out</a></li>
                    </ul>
                </div>
                
            <?php print $content;
            ?>
            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0px;">
                <div class="preFooter cd-scrolling-bg row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div id="prefContainer">
                            <p>Find your character strengths.</p>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="footer cd-scrolling-bg row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 footerInterior">
                        <a href="mailto:contact@characterinventory.org"><p>contact@characterinventory.org</p></a>
                        <a href="#"><i class="fa fa-facebook fa-3x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-3x"></i></a>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="footer2 cd-scrolling-bg row" style="background-color: white;">
                    <div class="col-sm 2"></div>
                    <div class="col-sm 8 footer2Interior">
                        <img id ="jtf" src="../images/jtfLogo.jpg" />
                        <p>Character Inventory is maintained by Purdue University and is supported by a generous grant from the John Templeton Foundation.</p>
                    </div>
                    <div class="col-sm 2"></div>
                </div>
            </div>
        </div>
        <script src="../js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="http://fsasso.com/labs/blur/js/StackBlur.js" type="text/javascript"></script>
        <script src="http://fsasso.com/labs/blur/js/html2canvas.js" type="text/javascript"></script>
        <?php if (isset($_SESSION['s1']) && $_SESSION['s1'] != 0) {
            $back = $_SESSION['s1'] - 1;
            $next = $_SESSION['s1'] + 1;
            print '<form method="post" action="" name="survey">
            <input type="hidden" name="surveyPage" id="surveyPageId" />
            <input type="hidden" name="pageBack" id="pageBackId" />
            <input type="hidden" name="pageTo" id="pageToId" />
        </form>
        <script type="text/javascript">
            function alerting(textAlert) {
                bootstrap_alert = function() {}
                bootstrap_alert.warning = function(textAlert) {
                    $(\'.alert_placeholder\').html(\'<div class="alert alert-danger" role="alert"><a class="close" data-dismiss="alert">×</a><span>\'+textAlert+\'</span></div>\')
                }
                bootstrap_alert.warning(textAlert);
                window.scrollTo(0, 0);
            }
            function back() {
                document.getElementById(\'surveyPageId\').value = save();
                document.getElementById(\'pageBackId\').value = '.$back.';
                document.forms[\'survey\'].submit();
            }
            function next() {
                var e = document.getElementsByClassName(\'inline option active\');
                var d = document.getElementsByClassName(\'inline option\');
                if (e.length == d.length / 4) {
                    document.getElementById(\'pageToId\').value = '.$next.';
                    document.getElementById(\'surveyPageId\').value = save();
                    document.forms[\'survey\'].submit();
                } else alerting("You have to finish all survey answers first.");
            }
            function save() {
                var send = "";
                var e = document.getElementsByClassName(\'inline option\');
                for (i = 0; i < e.length; i += 4) {
                    var x = 0;
                    if (e[i].className == "inline option active") x = 4;
                    else if (e[i + 1].className == "inline option active") x = 3;
                    else if (e[i + 2].className == "inline option active") x = 2;
                    else if (e[i + 3].className == "inline option active") x = 1;
                    else x = 0;
                    if (i >= e.length - 4) send += x;
                    else send += x + ", ";
                } return send;
            }
        </script>';
        } else if (isset($_SESSION['s1']) && $_SESSION['s1'] == 0) {
            print '<form method="post" action="" name="survey">
            <input type="hidden" name="start" id="startId" value="1" />
        </form>
        <script type="text/javascript">
            function begin() {
                document.forms["survey"].submit();
            }
        </script>';
        }
        ?><script type="text/javascript">
            $(document).ready(function() {
                $('.option').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                });
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 1 && $(window).width() > 600) {
                        $("#instructionRow").fadeOut();
                    } /*else if(scroll == 0 && $(window).width() > 600) {
                        $("#instructionRow").fadeIn();
                    }*/
                });
            });
        </script>
        <script src="../dist/slideout.min.js"></script>
        <script type="text/javascript">
            var slideout = new Slideout({
                'panel': document.getElementById('panel'),
                'menu': document.getElementById('menu'),
                'padding': 256,
                'tolerance': 70
            });
        </script>
        <?php
            if (isset($call) && $call != "") {
                $call = explode(", ", $call);
                echo '
        <script type="text/javascript">
            $(document).ready(function(){
                var e = document.getElementsByClassName(\'inline option\');';
                for ($x = 0; $x < count($call); $x++) {
                    if ($call[$x] % 5 != 0) {
                        $i = ($x * 4) + (4 - $call[$x]);
                        echo '
                e['.$i.'].className = \'inline option active\';';
                    }
                }
                echo '
            });
        </script>
    ';
            }
        ?></body>
</html>