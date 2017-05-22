<?php
    session_start();
    require_once('../php/User/membership.php');
    $membership = new membership();
    if (!(isset($_SESSION["userID"]))) header("location: http://www.characterinventory.org/");
    if (isset($_GET['status']) && $_GET['status'] == 'loggedout') {
        $_SESSION['status'] = $_GET['status'];
        $membership->log_out();
    } else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout') {
        $_SESSION['adStat'] = $_GET['adStat'];
        $membership->log_out_admin();
    }
    require_once('../php/User/updateProfile.php');
    $updateProfile = new updateProfile();
    if ($_POST && !empty($_POST['send'])) {
        $update = explode(", ", $_POST['send']);
        if ($update[0] == "0") {
            $updated = $updateProfile->info($update[1], $update[2], $update[3], $update[4], $update[5], $update[6], $_SESSION["userID"]);
        } else if ($update[0] == "1") {
            $updated = $updateProfile->password($update[1], $update[2], $_SESSION["userID"]);
        } else if ($update[0] == "2") {
            $updated = $updateProfile->mail($update[1], $_SESSION["userID"]);
        }/* else if ($update[0] == "3") {
            $_SESSION["deleted"] = $updateProfile->deleteAccount($update[1], $_SESSION["userID"]);
        }*/
    }
    $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
    
    mysql_select_db('louistay_surveys', $db_server);
    $uid = $_SESSION["userID"];
    $query = "SELECT fullName, username, city, state, country, zip, age, gender FROM users_information WHERE userID='$uid' LIMIT 1";
    $results = mysql_query($query);
    $row = mysql_fetch_assoc($results);
    $fullName = explode(" ", $row["fullName"]);
    $fullName = $fullName[0]." ".$fullName[count($fullName) - 1];
    $email = "\"".$row["username"]."\"";
    if ($row["city"] != NULL) $city = $row["city"]; else $city = "";
    if ($row["state"] != NULL) $state = $row["state"]; else $state = "";
    if ($row["country"] != NULL) $country = $row["country"]; else $country = "";
    if ($row["zip"] != NULL) $zip = $row["zip"]; else $zip = "";
    if ($row["age"] != NULL) $age = $row["age"]; else $age = "";
    if ($row["gender"] != NULL) $gender = $row["gender"]; else $gender = "";
    mysql_close($db_server);
    $demoContent = $updateProfile->get_profile_demoGraphics($city, $state, $country, $zip, $gender, $age);
    $demoContentCompressed = str_replace("\n", '', $demoContent);

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
    </head>
    <body>
        <style type="text/css">
            body, html, main {
                height: 100%;
                background-image: none;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
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
                <div id="profileBG1" class="row cd-fixed-bg">
                    <div id="headText">
                            <p>User Profile</p>
                    </div>
                    <div class="cd-scrolling-bg row">
                        <div class="col-sm-2"></div>
                        <div id="profileContentBox" class="col-sm-8">
                            <div id="profileHeader">
                                <div class="col-sm-3">
                                    <img src="//s3.amazonaws.com/expimetrics/ProfilePics/default.png" width="100" height="100" style="padding: 0;" />
                                </div>
                                <div id="userName" class="col-sm-6">
                                    <p><?php print $fullName; ?></p>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div id="profileOptions">
                                <div class="col-sm-12">
                                    <span class="btn btn-primary editSelect active" onclick="edit(0);">Profile</span>
                                    <span class="btn btn-primary editSelect" onclick="edit(4);">Change Profile Picture</span>
                                    <span class="btn btn-primary editSelect" onclick="edit(1);">Change Password</span>
                                    <span class="btn btn-primary editSelect" onclick="edit(2);">Email</span>
                                    <span class="btn btn-primary editSelect" onclick="edit(3);">Account</span>
                                </div>
                            </div>
                            <div class="col-sm-12" id="toEdit">
                                <?php print $demoContent; ?>
                            </div>
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
                            }?></div><!-- /.container-fluid -->
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <form action="" method="POST" name="update">
            <input type="hidden" name="send" id="sendId" />
        </form>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.editSelect').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                });
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 1) {
                        $(".nav").addClass("dark");
                    } else {
                        $(".nav").removeClass("dark");
                    }
                });
            });
            function edit(x) {
                if (x == 0) {   
                    document.getElementById("toEdit").innerHTML = <?php print '\''; print $demoContentCompressed; print '\''; ?>;   //to edit, look in UpdateProfile
                } else if (x == 1) {
                    document.getElementById("toEdit").innerHTML = '<div id="alert_placeholder"></div><div class="form-group"><label class="sr-only" for="currentPass">Current Password</label><input name="currentPass" type="password" class="form-control" id="currentPassId" placeholder="Current Password" /><span id="pass0"></span></div><div class="form-group"><label class="sr-only" for="password">New Password</label><input name="pwd" type="password" class="form-control" id="pass1" placeholder="New Password" /></div><div class="form-group"><label class="sr-only" for="confirmpassword">Confirm New Password</label><input name="confirmpwd" type="password" class="form-control" id="pass2" placeholder="Confirm New Password" onkeyup="checkPass(); return false;" /><span id="confirmPass" class="confirmPass"></span></div><center><button onclick="subm(1)" class="btn btn-primary editSelect" style="margin-top: 25px;">Update Password</button></center>';
                } else if (x == 2) {
                    var email = <?php print $email; ?>;
                    document.getElementById("toEdit").innerHTML = '<div id="alert_placeholder"></div><p>Current email: <b>' + email + '</b></p><div class="form-group"><label class="sr-only" for="changeMail">Change email</label><input name="changeMail" type="email" class="form-control" id="changeMailId" placeholder="Change email" /></div><center><button onclick="subm(2)" class="btn btn-primary editSelect" style="margin-top: 25px;">Change Email</button></center>';
                } else if (x == 3) {
                    document.getElementById("toEdit").innerHTML = '<div id="alert_placeholder"></div><p>Click below to delete account. <b>Warning: this action cannot be undone!</b></p><center><button onclick="subm(3)" class="btn btn-primary editSelect" style="margin-top: 25px;">Delete Account</button></center>';
                } else if (x == 4) {
                    
                }
            }
            function checkPass() {
                var pass1 = document.getElementById('pass1').value;
                var pass2 = document.getElementById('pass2').value;
                var message = document.getElementById('confirmPass');
                if (pass1 == pass2 && pass1.length > 7) {
                    message.style.color = "#006400";
                    message.innerHTML = "Passwords Match!";
                    return true;
                } else if (pass1 == pass2 && pass1.length < 8) {
                    message.style.color = "#ff0000";
                    message.innerHTML = "Password must be at least 8 characters.";
                    return false;
                } else if (pass1 == "") {
                    message.style.color = "#ff0000";
                    message.innerHTML = "Please enter a valid password first.";
                    return false;
                } else {
                    message.style.color = "#ff0000";
                    message.innerHTML = "Passwords Do Not Match!";
                    return false;
                }
            }
            function validPass() {
                var currentPass = document.getElementById('currentPassId').value;
                var message = document.getElementById('pass0');
                if (currentPass.length < 8) {
                    message.style.color = "#ff0000";
                    message.innerHTML = "The password you entered does not match the correct format.";
                    return false;
                }
            }
            function alerting(textAlert) {
                bootstrap_alert = function() {}
                bootstrap_alert.warning = function(textAlert) {
                    $('#alert_placeholder').html('<div class="alert alert-danger" role="alert"><a class="close" data-dismiss="alert">×</a><span>'+textAlert+'</span></div>')
                }
                bootstrap_alert.warning(textAlert);
            }
            function subm(x) {
                if (x == 0) {
                    var city = document.getElementById('cityId').value;
                    var state = document.getElementById('stateId').value;
                    var country = document.getElementById('countryId').value;
                    var zip = document.getElementById('zipId').value;
                    var gender = document.getElementById('genderId').value;
                    var age = document.getElementById('ageId').value;
                    document.getElementById("sendId").value = x + ", " + city + ", " + state + ", " + country + ", " + zip + ", " + gender + ", " + age;
                    if (age == "") alerting("hello");
                    if (age != "" && age < 0 || age > 150) {
                        alerting("Please enter a valid age in years.");
                    } else {
                        document.getElementById("sendId").value = x + ", " + city + ", " + state + ", " + country + ", " + zip + ", " + gender + ", " + age;
                        document.forms["update"].submit();
                    }
                } else if (x == 1) {
                    var currentPass = document.getElementById('currentPassId').value;
                    if (!checkPass()) alerting("First check if your new passwords match.");
                    else {
                        document.getElementById("sendId").value = x + ", " + currentPass + ", " + document.getElementById('pass1').value;
                        document.forms["update"].submit();
                    }
                } else if (x == 2) {
                    var address = document.getElementById('changeMailId').value;
                    var atPos = address.indexOf("@");
                    var dotPos = address.lastIndexOf(".");
                    if (atPos<1 || dotPos< atPos+2 || dotPos+2 >=address.length) alerting("Not a valid e-mail address.");
                    else {
                        document.getElementById("sendId").value = x + ", " + address;
                        document.forms["update"].submit();
                    }
                }/* else if (x == 3) {
                    alert("Are you sure you want to delete your account?");
                    //change above to yes or no or cancel alert button (confirm??)
                    //if yes: document.getElementById("sendId").value = x + ", yes";
                    //if no or cancel: (do nothing)
                }*/
            }<?php
                if (isset($updated) && $updated != "") {
                    print '
            document.getElementById("alert_placeholder").innerHTML = \'<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$updated.'</div>\';
            ';
                    unset($updated);
                    print 'document.getElementById("octoLayer").style.minHeight = "600px";';
                }
            ?>
        </script>
    </body>
</html>