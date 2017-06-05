<?php
    session_start();
    require_once('../php/User/membership.php');
    $membership = new membership();
    if ($_POST && !empty($_POST['email']) && !empty($_POST['password'])) {
        $badLogin = $membership->validate_user($_POST['email'], $_POST['password']);
        if ($badLogin != false) {
            print '<script>location.href = "'.$badLogin.'"</script>';
        }
    } else if ($_POST && !empty($_POST['send'])) {
        $send = explode(", ", $_POST['send']);
        $badSignup = $membership->create_user($send[0], $send[1], $send[2]);
    }
    // User already logged in and hits "log out" button, any page has a logout
    // else user is an admin and hits "log out"
    if (isset($_GET['status']) && $_GET['status'] == 'loggedout') {
        $_SESSION['status'] = $_GET['status'];
        $membership->log_out();
    } else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout') {
        $_SESSION['adStat'] = $_GET['adStat'];
        $membership->log_out_admin();
    }
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
        <?php
            if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized'))
                print '
        <script src="https://www.google.com/recaptcha/api.js"></script>';
        ?>
        <title>Resources | CI</title>
        <link rel="stylesheet" type="text/css" href="../css/style3.css">
        <link rel="stylesheet" type="text/css" href="../css/style4.css">
        <link rel="stylesheet" type="text/css" href="../css/nav.css">
    </head>
    <body>
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
                        <li><a href="background.php">Background</a></li>
                        <li><a href="resources.php">Resources</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php
                            if (isset($_SESSION['status']) && $_SESSION['status'] == 'authorized') {
                                print '
                        <li id="profPage"><a href="../profile">Profile</a></li>
                                <li id="logout"><a href="../?status=loggedout">Log Out</a></li>';
                            } else {
                                print '
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Login/Sign Up</a>
                        </li>';
                            }
                        ?>
                    </ul>
                </div>
            </nav>
            <main class="cd-main-content">
                <div id="background1" class="row cd-fixed-bg">
                        <div id="headText">
                                <p>What makes our measures distinct?</p>
                        </div>
                </div>
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text1">We have completed the most integrative and innovative development of character assessment to date.</p><br />
                        <p><leadtext>The vast majority</leadtext>of character assessment tools have relied on lexical approaches that are inherently culturally- and contextually-bound or have arguably used imprecise inclusion criteria that likely distorts the dimensions of character. In short, attempts at assessing character have either been inductive and bottom-up or purely theoretical and top-down. Our measurement development process has used an integrative methodology whereby a top-down strategy was first used to a) inform inclusion criteria and b) guard against cultural-relativism in the early stages of item generation and development. We then subsequently subjected our measure to empirical analysis to derive a reliable factor structure of character and the virtues that describe it. However, this is not what really distinguishes our measure from others. Our primary end goal was to create a character assessment tool that reliability and validly measures virtues of character. This required that we create the first ever character assessment tool that directly addresses self-presentation biases by the way we formatted the measure and this is what makes our measure truly distinct and represents a significant breakthrough in character assessment.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div id="background2" class="row cd-fixed-bg">
                    <div id="bodyText">
                                <p style="">How do formats affect the assessment of virtues and character?</p>
                    </div>
                </div>
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <p><leadtext>A key challenge faced </leadtext>when seeking to measure virtues – or any self-reported characteristic – is the problem of self-presentation biases. Self-presentation biases occur when people give inaccurate or exaggerated reports of their characteristics due to intentional efforts to promote a positive image, lack of insight, or an unconscious tendency to construct a positive image of oneself through self-deception. Due to these biases, results from virtue measures often reflect desired positive images rather than actual levels of virtues.<br /><br />Such biases are particularly pronounced when using the standard self-report format – the Likert-type rating scale:</p>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="cd-scrolling-bg row info3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text1">Likert-type rating scale</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="box">
                             <b>Please select the option that best describes you</b>
                            <p>I am strongly committed to principles of justice and equality</p>
                            <ol>
                                <li><p>Strongly disagree</p></li>
                                <li><p>Disagree</p></li>
                                <li><p>Agree</p></li>
                                <li><p>Strongly agree</p></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="formatText">
                            <p>This is the format used by most virtue inventories.  However, alternate formats do exist that are more resistant to self-presentation biases. One such format is the multidimensional forced choice format. By presenting blocks of items composed of statements that are similarly positive and asking respondents to rank the statements in each block from most to least descriptive of oneself, self-presentation biases are minimized because the person cannot agree or disagree with all of the statements in a block simultaneously. Modern psychometric procedures can be used to derive scores on each virtue that are minimally tainted by self-presentation biases compared to measures using the standard, Likert-type format.</p>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>

                <div class="cd-scrolling-bg row info3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text1">Multidimensional forced-choice format</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="cd-scrolling-bg row info">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="box">
                            <b>Please rank the following statements in order of which describes you from "Least like me" (1) to "Most like me" (4)</b>
                            <ul>
                                <li><p>A. I am strongly committed to principles of justice and equality</p></li>
                                <li><p>B. I forgive others when they make mistakes</p></li>
                                <li><p>C. I express thanks to people who care about me</p></li>
                                <li><p>D. I look on the bright side of life</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="formatText">
                                <p>This innovative approach has been used effectively to measure self-reported characteristics in high stakes settings such as employee selection and military recruiting where the use of measures that lack scientific validity has major legal ramifications.<br /><br />We incorporate this innovative approach to measure virtues and, as a result, generate results that are more reliable that other measures that employ traditional formats.</p>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="preFooter cd-scrolling-bg row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div id="prefContainer">
                            <p>Find your character strengths.</p>
                            <a class="buttonLink" href="#" data-toggle="modal" data-target="#myModal">
                                <div class="button" id="preFooterBtn">TAKE FREE TEST</div>
                            </a>
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
                <div class="footer2 cd-scrolling-bg row">
                    <div class="col-sm 2"></div>
                    <div class="col-sm 8 footer2Interior">
                        <img id ="jtf" src="../images/jtfLogo.jpg" />
                        <p>Character Inventory is maintained by Purdue University and is supported by a generous grant from the John Templeton Foundation.</p>
                    </div>
                    <div class="col-sm 2"></div>
                </div>
            </main>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid" style="min-height: 50px;"><?php
                            if (isset($_SESSION['status']) && $_SESSION['status'] == 'authorized') {
                                print '
                            <a href="../surveys/survey1.php" style="padding-top: 10px;"><!--<div class="button" style="color: rgb(0,0,0);">--><p style="color: black; font-size: 24pt;">Likert-type Character Inventory</p><!--</div>--></a>
                        ';
                            } else print '
                            <div id="alert_placeholder"></div>
                            <div class="col-md-6">
                                <form method="POST" action="">
                                    <h3 class="modalHeader">Sign In</h3>
                                    <span id="confirmMember" class="confirmMember"></span>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input name="email" type="email" class="form-control" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="Password" />
                                    </div>
                                    <button type="submit" class="modalBtn">SUBMIT</button>
                                </form>
                            </div>
                            <div class="col-md-6 rightSide">
                                <h3 class="modalHeader">Sign Up</h3>
                                <div class="form-group">
                                    <label class="sr-only" for="name">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="fname" placeholder="Full Name" />
                                </div>
                                <span id="alreadyUser" class="alreadyUser"></span>
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input name="email2" type="email" class="form-control" id="address" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input name="pwd" type="password" class="form-control" id="pass1" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="confirmpassword">Confirm Password</label>
                                    <input name="confirmpwd" type="password" class="form-control" id="pass2" placeholder="Confirm Password" onkeyup="checkPass(); return false;" />
                                    <span id="confirmPass" class="confirmPass"></span>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LcxtxMTAAAAAGU4T69ZHfDj2m0SVFmFoiHYPcKm"></div>
                                </div>
                                <button onclick="subm()" class="modalBtn">SUBMIT</button>
                            </div>
                        ';?></div><!-- /.container-fluid -->
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 1) {
                        $(".nav").addClass("dark");
                    } else {
                        $(".nav").removeClass("dark");
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 1) {
                        $(".nav").addClass("dark");
                    } else {
                        $(".nav").removeClass("dark");
                    }
                });
            });
        </script><?php
                if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized'))
                print '
        <script src="https://www.google.com/recaptcha/api.js"></script>';
    //                 print '
    //     <script type="text/javascript">
    //         function checkPass() {
    //             var pass1 = document.getElementById(\'pass1\').value;
    //             var pass2 = document.getElementById(\'pass2\').value;
    //             var message = document.getElementById(\'confirmPass\');
    //             if(pass1 == pass2 && pass1.length > 7) {
    //                 message.style.color = "#006400";
    //                 message.innerHTML = "Passwords Match!";
    //                 return true;
    //             } else if(pass1 == pass2 && pass1.length < 8) {
    //                 message.style.color = "#ff0000";
    //                 message.innerHTML = "Password must be at least 8 characters.";
    //                 return false;
    //             } else if(pass1 == "") {
    //                 message.style.color = "#ff0000";
    //                 message.innerHTML = "Please enter a valid password first.";
    //                 return false;
    //             } else {
    //                 message.style.color = "#ff0000";
    //                 message.innerHTML = "Passwords Do Not Match!";
    //                 return false;
    //             }
    //         }
    //         function alerting(textAlert) {
    //             bootstrap_alert.warning(textAlert);
    //         }
    //         function subm() {
    //             var name = document.getElementById(\'fname\').value;
    //             var address = document.getElementById(\'address\').value;
    //             var fullname = name.split(" ");
    //             var atPos = address.indexOf("@");
    //             var dotPos = address.lastIndexOf(".");
    //             bootstrap_alert = function() {}
    //             bootstrap_alert.warning = function(textAlert) {
    //                 $(\'#alert_placeholder\').html(\'<div class="alert alert-danger" role="alert"><a class="close" data-dismiss="alert">×</a><span>\'+textAlert+\'</span></div>\')
    //             }
    //             if (!checkPass()) alerting("First check if your passwords match.");
    //             else if (fullname.length < 2) alerting("You must enter both your first and last name.");
    //             else if (fullname[0] == "" || fullname[1] == "") alerting("You did not enter your first or last name.");
    //             else if (fullname[0].substring(0,1) != fullname[0].substring(0,1).toUpperCase() || fullname[0].length < 2) {
    //                 alerting("The First Name you entered is not valid.");
    //             }
    //             else if (fullname[1].substring(0,1) != fullname[1].substring(0,1).toUpperCase() || fullname[1].length < 2) {
    //                 alerting("The Last Name you entered is not valid.");
    //             }
    //             else if (atPos<1 || dotPos< atPos+2 || dotPos+2 >=address.length) alerting("Not a valid e-mail address.");
    //             else if (grecaptcha.getResponse() == "") alerting("You must checkmark the recaptcha.");
    //             else {
    //                 document.getElementById("sendId").value = name + ", " + address + ", " + document.getElementById(\'pass1\').value;
    //                 document.forms["user"].submit();
    //             }
    //         }
    //     </script>
    // ';
                if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized')) {
                    if (isset($badLogin) && $badLogin == false) {
                        print '
        <script type="text/javascript">
            document.getElementById(\'confirmMember\').style.color = "#ff0000";
            document.getElementById(\'confirmMember\').innerHTML = "Invalid email and/or password.";
            $(window).load(function(){
                $(\'#myModal\').modal(\'show\');
            });
        </script>';
                    } else if (isset($badSignup) && $badSignup == false) {
                        print '
        <script type="text/javascript">
            document.getElementById(\'alreadyUser\').style.color = "#ff0000";
            document.getElementById(\'alreadyUser\').innerHTML = "This username is already taken.";
            $(window).load(function(){
                $(\'#myModal\').modal(\'show\');
            });
        </script>
    ';
                    }
                    unset($badLogin, $badSignup);
                }
            ?>
    </body>
</html>
