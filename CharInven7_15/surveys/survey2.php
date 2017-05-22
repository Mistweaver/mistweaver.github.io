<?php
    session_start();
    require_once('../php/User/membership.php');
    $membership = new membership();
    $membership->confirm_user();
    require_once('../php/Forms/takeSurvey.php');
    $takeSurvey = new takeSurvey();
    require_once('../php/Forms/Survey2/s2_pageContent.php');
    $s2_pageContent = new s2_pageContent();
    if (isset($_GET['status']) && $_GET['status'] == 'loggedout') $membership->log_out();
    else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout') $membership->log_out_admin();
    if (isset($_GET['retake']) && $_GET['retake'] == "true") {
        $takeSurvey->retake_survey2($_SESSION['userID']);
        unset($_GET['retake']);
    }
    if ($takeSurvey->check_empty_survey2($_SESSION['userID'])) $s2 = 29;
    else if (!isset($s2)) $s2 = 30;
    if (isset($s2) && ($s2 < 0 || $s2 >= 31)) $s2 = 1;
    else if ($_POST && !empty($_POST['start'])) $s2 = 1;
    if ($_POST && !empty($_POST['pageTo'])) {
        $s2 = $_POST['pageTo'];
        $takeSurvey->s2_nextPage($_POST['surveyPage'], $_POST['pageTo'], $_SESSION['userID']);
    } else if ($_POST && !empty($_POST['pageBack'])) {
        $s2 = $_POST['pageBack'];
        $takeSurvey->s2_prevPage($_POST['surveyPage'], $_POST['pageBack'], $_SESSION['userID']);
    }
    if (isset($s2) && $s2 > 0) {
        $call = $takeSurvey->s2_setPage($s2, $_SESSION['userID']);
        $completeWidth = round(($s2 * 100 / 30.0), 2) - 3.33;
        $incompleteWidth = 100 - $completeWidth;
    }
    if (isset($s2) && $s2 == 0) $content = $s2_pageContent->opening();
    else $content = $s2_pageContent->headerContainer($s2, $completeWidth, $incompleteWidth);

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
        <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
        <link rel="stylesheet" type="text/css" href="../css/style2.css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
        <title>Survey2 | CI</title>
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
                background-color: #4f71bb;
                padding: 0px;
                margin: 0px;
                width: 100%;
                height: 100%;
            }
            .modalBtn p{
                color: #ffffff;
                font-size: 18px;
                font-family: "Open Sans", sans-serif;
                font-weight: normal;
            }
            .modalBtn:hover {
                background-color: #00008b;
                cursor: pointer;
            }
            .div1 {
                border: 1px solid #000000;
                width: 100%;
                min-height: 40px;
                margin-bottom: 25px;
            }
        </style>
        <div class="container">
            <div id="fixedGroup">
                <nav class="nav row">
                    <div class="col-sm-2 col-md-2"><a href="http://www.characterinventory.org/"><img id="navLogo" src="../images/virtueLogo.png"></a></div>
                    <div class="col-sm-4 col-md-5"></div>
                    <div class="col-sm-6 col-md-5">
                        <ul id="navList">
                            <li><a href="../nav/background.php">Background</a></li>
                            <li><a href="../nav/resources.php">Resources</a></li>
                            <li><a href="../nav/about_us.php">About Us</a></li>
                            <li><a href="../nav/contact.php">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="left: auto; right: 0;">
                                    <li id="profPage"><a style="color: black;" href="../profile">Your profile</a></li>
                                    <li id="logout"><a style="color: black;" href="../?status=loggedout">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav><?php
                    print $content;
                ?>
            <div class="col-sm-12" style="padding-right: 0px; padding-left: 0px; margin-top: 25px;">
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
        <?php if (isset($s2) && $s2 != 0) {
            $back = $s2 - 1;
            $next = $s2 + 1;
            print '<form method="post" action="" name="survey">
            <input type="hidden" name="surveyPage" id="surveyPageId" />
            <input type="hidden" name="pageBack" id="pageBackId" />
            <input type="hidden" name="pageTo" id="pageToId" />
        </form>
        <script type="text/javascript">
            function alerting(textAlert) {
                bootstrap_alert = function() {}
                bootstrap_alert.warning = function(textAlert) {
                    $(\'#alert_placeholder\').html(\'<div class="alert alert-danger" role="alert"><a class="close" data-dismiss="alert">×</a><span>\'+textAlert+\'</span></div>\')
                }
                bootstrap_alert.warning(textAlert);
            }
            function back() {
                /*rank1 = document.getElementById("rank1").innerHTML;
                rank2 = document.getElementById("rank2").innerHTML;
                rank3 = document.getElementById("rank3").innerHTML;
                if (rank1 != "") rank1 = rank1.substr(73, 1);
                else if (rank2 != "") rank2 = rank2.substr(73, 1);
                else if (rank3 != "") rank3 = rank3.substr(73, 1);
                document.getElementById("surveyPageId").value = rank1 + ", " + rank2 + ", " + rank3;*/
                document.getElementById("pageBackId").value = '.$back.';
                document.forms["survey"].submit();
            }
            function next() {
                rank1 = document.getElementById("rank1").innerHTML;
                rank2 = document.getElementById("rank2").innerHTML;
                rank3 = document.getElementById("rank3").innerHTML;
                if (rank1 == "" || rank2 == "" || rank3 == "") {
                    alerting("You didn&rsquo;t sort all the statements.");
                } else {
                    sortRank(rank1.substr(73, 1), rank2.substr(73, 1), rank3.substr(73, 1));
                    document.getElementById("pageToId").value = '.$next.';
                    document.forms["survey"].submit();
                }
            }
            function sortRank(rank1, rank2, rank3) {
                if (rank1 == "1") document.getElementById("surveyPageId").value = "2, ";
                else if (rank2 == "1") document.getElementById("surveyPageId").value = "1, ";
                else if (rank3 == "1") document.getElementById("surveyPageId").value = "0, ";
                if (rank1 == "2") document.getElementById("surveyPageId").value += "2, ";
                else if (rank2 == "2") document.getElementById("surveyPageId").value += "1, ";
                else if (rank3 == "2") document.getElementById("surveyPageId").value += "0, ";
                if (rank1 == "3") document.getElementById("surveyPageId").value += "2";
                else if (rank2 == "3") document.getElementById("surveyPageId").value += "1";
                else if (rank3 == "3") document.getElementById("surveyPageId").value += "0";
            }
        </script>';
        } else if (isset($s2) && $s2 == 0) {
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
                    if (scroll >= 1 && $(window).width() > 768) {
                    //$("#instructionRow").addClass("expand");
                        $("#instructionRow").fadeOut();
                    }
                    else if($(window).width() > 768) {
                        $("#instructionRow").fadeIn();
                    }
                    //var scroll2 = ;
                    //if ( )
                });
                //$(".headerRow").sticky({topSpacing:101});
                //$('.headerRow').scroll(function() {
                //});
            });
            function allowDrop(ev) {
                ev.preventDefault();
            }
            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }
            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
                //alerting(ev.target.innerHTML);
            }
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
    </body>
</html>