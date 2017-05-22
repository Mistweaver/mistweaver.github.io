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
        <title>Contact | CI</title>
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
                <div id="contactBG1" class="row cd-fixed-bg">
                    <div id="headText">
                            <p>Contact Us</p>
                    </div>
                    <div class="cd-scrolling-bg row">
                        <div class="col-sm-2"></div>
                        <div id="contactInfo" class="col-sm-8">
                            <div class="col-sm-4">
                                <p><strong>E-mail:</strong> <a href='mailto:stay@purdue.edu'>stay@purdue.edu</a></p>
                                <p><strong>Telephone:</strong> (765) 494-0715</p>
                                <p><strong>Mailing Address:</strong><br/>Department of Psychological Sciences<br/>Purdue University<br/>703 Third Street<br/>West Lafayette, IN 47906-2081 USA</p>
                                <p><strong>Campus Address:</strong><br/>Psychological Sciences, Room 2120</p>
                            </div>
                            <div class="col-sm-8"><iframe width="100%" height="350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/maps?ie=UTF8&amp;cid=18402892779204950226&amp;q=Department+of+Psychological+Sciences&amp;gl=US&amp;hl=en&amp;ll=40.426983,-86.915044&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe></div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
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
        </script><?php
                if (!(isset($_SESSION['status']) && $_SESSION['status'] == 'authorized'))
                print '<script src="https://www.google.com/recaptcha/api.js"></script>';
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
