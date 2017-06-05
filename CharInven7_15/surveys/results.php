<?php
session_start();
require_once('../php/User/membership.php');
$membership = new membership();
$membership->confirm_user();
require_once('../php/Forms/takeSurvey.php');
$takeSurvey = new takeSurvey();
if (!(isset($_SESSION['results']) && $_SESSION['results'] == 'display'))
    print '<p>You did not fill out all survey answers. Please go back <a href="http://www.characterinventory.org/surveys/survey1.php">here</a>.</p>';
else {
    if (isset($_GET['status']) && $_GET['status'] == 'loggedout') {
        $_SESSION['status'] = $_GET['status'];
        $membership->log_out();
    } else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout') {
        $_SESSION['adStat'] = $_GET['adStat'];
        $membership->log_out_admin();
    }
    $means = explode(", ", $_SESSION['means']);
    $results = implode(", ", array_slice($means, 0, 30));
    $virtues = implode(", ", array_slice($means, 30, 8));
    if ($_SESSION['percentiles'] != "") {
        $percentiles = explode(", ", $_SESSION['percentiles']);
        $perStr = implode(", ", array_slice($percentiles, 0, 30));
        $perVir = implode(", ", array_slice($percentiles, 30, 8));
    }
    $checkEmpty = $takeSurvey->check_empty_survey1($_SESSION['userID']);

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
        <link rel="stylesheet" href="../css/chartist.min.css">
        <script src="../js/chartist.js"></script>
        <title>Results | CI</title>
        <link rel="stylesheet" type="text/css" href="../css/style3.css">
        <link rel="stylesheet" type="text/css" href="../css/style4.css">
    </head>
    <body>
        <style type="text/css">
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
                <div class="row resultInstructions">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text4" id="instructions">
                        <p>Here are your most recent results.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </nav>
            <main class="cd-main-content" id="resultsContainer">
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-12" align="center" style="padding-bottom: 10px; padding-top: 10px;">
                    <?php
                    if ($_SESSION['percentiles'] == "") print '
                        <div class="col-sm-6">
                            <button class="modalBtn" onclick="str();" style="width: 100%; background-color: #494949; color: #FFFFFF;">Scores: Strengths</button>
                        </div>
                        <div class="col-sm-6 rightSide">
                            <button class="modalBtn" onclick="vir();" style="width: 100%; background-color: #494949; color: #FFFFFF;">Scores: Virtues</button>
                        </div>
                    ';
                    else print '
                        <div class="col-sm-3">
                            <button class="modalBtn" onclick="str();" style="width: 100%; background-color: #494949; color: #FFFFFF;">Scores: Strengths</button>
                        </div>
                        <div class="col-sm-3">
                            <button class="modalBtn" onclick="vir();" style="width: 100%; background-color: #494949; color: #FFFFFF;">Scores: Virtues</button>
                        </div>
                        <div class="col-sm-3">
                            <button class="modalBtn" onclick="perStr();" style="width: 100%; background-color: #494949; color: #FFFFFF;">Percentiles: Strengths</button>
                        </div>
                        <div class="col-sm-3 rightSide">
                            <button class="modalBtn" onclick="perVir();" style="width: 100%; background-color: #494949; color: #FFFFFF;">Percentiles: Virtues</button>
                        </div>
                    ';
                    ?></div>
                    <div class="col-sm-12" align="center">
                        <h2 id="selection" style="padding-bottom: 0px; margin-bottom: 0px;"></h2>
                        <div class="ct-chart"></div>
                    </div>
                    <div class="col-sm-12" align="center">
                        <hr />
                        <?php
                            if ($checkEmpty) print '<p align="center">If you would like to take this survey again, <a href="http://www.characterinventory.org/surveys/survey1.php">click here</a>.</p>';
                            else print '<p align="center">If you would like to take this survey again, <a class="buttonLink" href="#" data-toggle="modal" data-target="#myModal">click here</a>.</p>';
                        ?>
                        <br />
                    </div>
                </div>
                <div class="preFooter cd-scrolling-bg row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div id="prefContainer">
                            <p style="font-size: 26pt;">Find your character strengths.</p>
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
                        <img id="jtf" src="../images/jtfLogo.jpg" />
                        <p>Character Inventory is maintained by Purdue University and is supported by a generous grant from the John Templeton Foundation.</p>
                    </div>
                    <div class="col-sm 2"></div>
                </div>
            </main>
        </div>



        
        <?php
            if (!$checkEmpty) print '
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid">
                            <p>Would you like to continue with your most recent survey?</p>
                            <a href="http://www.characterinventory.org/surveys/survey1.php"><div class="button">Continue recent</div></a>
                            <a href="http://www.characterinventory.org/surveys/survey1.php?retake=true"><div class="button">Retake</div></a>
                        </div><!-- /.container-fluid -->
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->';
        ?>
        <script src="../js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="http://fsasso.com/labs/blur/js/StackBlur.js" type="text/javascript"></script>
        <script src="http://fsasso.com/labs/blur/js/html2canvas.js" type="text/javascript"></script>
        <script type="text/javascript">
            function str() {
                <?php print scoresStr($results) ?>
            }
            function vir() {
                <?php print scoresVir($virtues) ?>
            }<?php
            if ($_SESSION['percentiles'] != "") print '
            function perStr() {
                '.percentStr($perStr).'
            }
            function perVir() {
                '.percentVir($perVir).'
            }';
        ?></script>
        <script src="../dist/slideout.min.js"></script>
        <script type="text/javascript">
            var slideout = new Slideout({
                'panel': document.getElementById('panel'),
                'menu': document.getElementById('menu'),
                'padding': 256,
                'tolerance': 70
            });
        </script>
        <script type="text/javascript">
        </script>
    </body>
</html><?php
}
function scoresStr($results) {
    return 'document.getElementById(\'selection\').innerHTML = "Scores: Strengths";
                new Chartist.Bar(\'.ct-chart\', {
                    labels: [\'Gratitude\', \'Love\', \'Curiosity\', \'Love of Learning\', \'Creativity\', \'Appreciation of Beauty\', \'Zest\', \'Hope\', \'Persistence\', \'Leadership\', \'Perspective\', \'Social Perceptiveness\', \'Humor\', \'Teamwork\', \'Trustworthiness\', \'Authenticity\', \'Bravery\', \'Humility\', \'Carefulness\', \'Strategy\', \'Self-Control\', \'Emotional Awareness\', \'Will-Power\', \'Spirituality\', \'Meaning/Purpose\', \'Perspective-Taking\', \'Forgiveness\', \'Fairness\', \'Openness to Evidence\', \'Kindness\'],
                    series: [['.$results.']]
                }, {
                    horizontalBars: true,
                    height: \'550px\',
                    axisY: {
                        offset: 200
                    }
                }).on(\'draw\', function(data) {
                    if(data.type === \'bar\') {
                        data.element.attr({
                            style: \'stroke-width: 7.5px\'
                        });
                    }
                });';
}
function scoresVir($virtues) {
    return 'document.getElementById(\'selection\').innerHTML = "Scores: Virtues";
                new Chartist.Bar(\'.ct-chart\', {
                    labels: [\'Appreciation\', \'Intellectual Engagement\', \'Fortitude\', \'Interpersonal Consideration\', \'Sincerity\', \'Temperance\', \'Transcendence\', \'Empathy\'],
                    series: [['.$virtues.']]
                }, {
                    horizontalBars: true,
                    height: \'175px\',
                    axisY: {
                        offset: 200
                    }
                }).on(\'draw\', function(data) {
                    if(data.type === \'bar\') {
                        data.element.attr({
                            style: \'stroke-width: 7.5px\'
                        });
                    }
                });';
}
function percentStr($perStr) {
    return 'document.getElementById(\'selection\').innerHTML = "Percentiles: Strengths";
                new Chartist.Bar(\'.ct-chart\', {
                    labels: [\'Gratitude\', \'Love\', \'Curiosity\', \'Love of Learning\', \'Creativity\', \'Appreciation of Beauty\', \'Zest\', \'Hope\', \'Persistence\', \'Leadership\', \'Perspective\', \'Social Perceptiveness\', \'Humor\', \'Teamwork\', \'Trustworthiness\', \'Authenticity\', \'Bravery\', \'Humility\', \'Carefulness\', \'Strategy\', \'Self-Control\', \'Emotional Awareness\', \'Will-Power\', \'Spirituality\', \'Meaning/Purpose\', \'Perspective-Taking\', \'Forgiveness\', \'Fairness\', \'Openness to Evidence\', \'Kindness\'],
                    series: [['.$perStr.']]
                }, {
                    horizontalBars: true,
                    height: \'550px\',
                    axisY: {
                        offset: 200
                    }
                }).on(\'draw\', function(data) {
                    if(data.type === \'bar\') {
                        data.element.attr({
                            style: \'stroke-width: 7.5px\'
                        });
                    }
                });';
}
function percentVir($perVir) {
    return 'document.getElementById(\'selection\').innerHTML = "Percentiles: Virtues";
                new Chartist.Bar(\'.ct-chart\', {
                    labels: [\'Appreciation\', \'Intellectual Engagement\', \'Fortitude\', \'Interpersonal Consideration\', \'Sincerity\', \'Temperance\', \'Transcendence\', \'Empathy\'],
                    series: [['.$perVir.']]
                }, {
                    horizontalBars: true,
                    height: \'175px\',
                    axisY: {
                        offset: 200
                    }
                }).on(\'draw\', function(data) {
                    if(data.type === \'bar\') {
                        data.element.attr({
                            style: \'stroke-width: 7.5px\'
                        });
                    }
                });';
}
?>