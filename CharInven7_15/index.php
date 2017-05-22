<?php
    session_start();
    require_once('php/User/membership.php');
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
    require_once('php/VisitsCounter/visitsCounter.php');
    $visitsCounter = new visitsCounter();
    $visits = $visitsCounter->getVisitNum();
    $visitsCounter->updateVisitNum();



    // if (!($file = fopen("visits/visits.txt", "r"))) {
    //     echo "could not open the file";
    // } else {
    //     $visits = (int) fread($file, 20);
    //     fclose($file);
    //     $visits++;
    //     $file = fopen("visits/visits.txt", "w");
    //     fwrite($file, $visits);
    //     fclose($file);
    // }
?><!DOCTYPE html>

<script>
    var url = window.location.host;
    if (url[1] != 'w') {
        redirectionLocation = "http://www.characterinventory.org" + window.location.pathname;
        location.href = redirectionLocation;
    }
</script>
<!-- The redirect action above is to prevent login-bug happen, please do not delete it again. I will move it into .js file later-->

<html lang="en" id="content">
    <head>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
        <?php
            if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized'))
                print '
        <script src="https://www.google.com/recaptcha/api.js"></script>';
        ?>
        <script src="js/mobile.js"></script>
        <title>Home | CI</title>
        <link rel="stylesheet" type="text/css" href="css/style3.css">
        <link rel="stylesheet" type="text/css" href="css/style4.css">
    </head>
    <body>
        <div class="container">
            <nav id="mainNav" class ="navbar navbar-default nav see-through"  role = "navigation">
                <div class = "navbar-header">
                    <a href="http://www.characterinventory.org"><img id="navLogo"  src="images/virtueLogo.png"></a>

                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navList" id="datatoggle">
                        <span class = "sr-only">TEST navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>
                <div class = "collapse navbar-collapse" id ="navList">
                    <ul class = "navbar-nav navbar-right" id="navListContain">
                        <li><a href="nav/background.php">Background</a></li>
                        <li><a href="nav/resources.php">Resources</a></li>
                        <li><a href="nav/about_us.php">About Us</a></li>
                        <li><a href="nav/contact.php">Contact</a></li>
                        <?php
                            if (isset($_SESSION['status']) && $_SESSION['status'] == 'authorized') {
                                print '
                        <li id="profPage"><a href="profile">Profile</a></li>
                                <li id="logout"><a href="?status=loggedout">Log Out</a></li>';
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
                <div id="main" class="cd-fixed-bg cd-bg-2 row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div id="mainText">
                            <p>We all have character strengths.</p>
                            <p>Find yours.</p>
                            <a class="buttonLink" href="#" data-toggle="modal" data-target="#myModal">
                                <div class="buttonMain">TAKE FREE TEST</div>
                            </a>
                            <?php if (isset($visits)) echo "<p class='text2'>Number of visits: ".$visits."</p>"; ?>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div id="info1" class="cd-scrolling-bg row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text1">Get to know yourself.</p>
                        <p class="text2">45 Minutes. 211 Questions. 8 Core Virtues.</p>
                        <p class="text3">Character Inventory is a short test designed to capture the strongest aspects of who you are. Our research has come to show that there are 8 core virtues, or character strengths, that a person can have. Character Inventory&rsquo;s goal is to help you not just to know what your strengths are, but also how to use them in your life.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div id="octoLayer" class="cd-fixed-bg cd-bg-1 row">
                    <div class="col-sm-12">
                        <img id="homegon" src="images/virtueocto.png">
                    </div>
                </div>
                <div id="info2" class="cd-scrolling-bg row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text1">For individuals and organizations.</p>
                        <p class="text2">Character Inventory has something for everybody.</p>
                        <p class="text3">Our survey provides the opportunity to help professionals and clients discover and unleash their character strengths in the workplace, helping them reach their full potential.</p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

                <div class="preFooter cd-scrolling-bg row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div id="prefContainer">
                            <p>Find your character strengths.</p>
                            <a class="buttonLink" href="#" data-toggle="modal" data-target="#myModal">
                                <div class="buttonMain" id="preFooterBtn">TAKE FREE TEST</div>
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
                        <img id ="jtf" src="images/jtfLogo.jpg" />
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
                            <a href="surveys/survey1.php" style="padding-top: 10px;"><!--<div class="button" style="color: rgb(0,0,0);">--><p style="color: black; font-size: 24pt;">Likert-type Character Inventory</p><!--</div>--></a>
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
                                    <button type="submit" class="modalBtn">Login</button>
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
                                <button onclick="subm()" class="modalBtn">Sign Up</button>
                            </div>
                        ';?></div><!-- /.container-fluid -->
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <form method="POST" action="" name="user">
            <input type="hidden" name="send" id="sendId" />
        </form>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
                    print '<script type="text/javascript" src="js/register.js"></script>';
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
    //             // else if (grecaptcha.getResponse() == "") alerting("You must checkmark the recaptcha.");
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
            ?></body>
</html>
