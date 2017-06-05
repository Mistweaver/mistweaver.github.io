<?php
    session_start();
    require_once('../php/User/membership.php');
    $membership = new membership();
    if (isset($_SESSION['adStat']) && $_SESSION['adStat'] == 'authorized')
        if ($_POST && !empty($_POST['test'])) download_file();

    if ($_POST && !empty($_POST['email']) && !empty($_POST['password']))
        $_SESSION['admin'] = $membership->validate_admin($_POST['email'], $_POST['password']);

    if (isset($_GET['status']) && $_GET['status'] == 'loggedout')
        $membership->log_out();
    else if (isset($_GET['adStat']) && $_GET['adStat'] == 'loggedout')
        $membership->log_out_admin();
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
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
        <title>Admin | CI</title>
    </head>
    <body>
        <div class="container">
            <nav class="nav row">
                <div class="col-sm-2 col-md-2">
                    <a href="../../"><img id="navLogo" src="../images/virtueLogo.png"></a>
                    <i class="fa fa-bars fa-2x comNav"></i>
                </div>
                <div class="col-sm-4 col-md-5"></div><?php
    if (isset($_SESSION['adStat']) && $_SESSION['adStat'] == 'authorized') {
        print '<div class="col-sm-6 col-md-5">
                    <ul id="navList" style="float: right;">
                        <li><a href="?adStat=loggedout">Log Out</a></li>
                    </ul>
                </div>';
    } else print '<div class="col-sm-6 col-md-5"></div>';
    print '
            </nav>
            <main class="cd-main-content">
                <div id="main" class="cd-fixed-bg cd-bg-2 row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div id="mainText">
                            ';
    if (isset($_SESSION['adStat']) && $_SESSION['adStat'] == 'authorized') {
        print '<p>Look at the results for Character Inventory.</p>
                            <a class="buttonLink" href="#">
                                <div class="button" onclick="document.forms[\'getcsv\'].submit();">Download CSV file.</div>
                            </a>';
    } else print '<p>Sign in as an admin.</p>
                            <a class="buttonLink" href="../#" data-toggle="modal" data-target="#myModal">
                                <div class="button">ADMIN SIGN IN</div>
                            </a>';
    print '
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </main>
        </div>';
    if (!(isset($_SESSION['adStat']) && $_SESSION['adStat'] == 'authorized')) {
        print '
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid">
                            <div id="alert_placeholder"></div>
                            <form method="POST" action="">
                                <h3 class="modalHeader">Sign In</h3>
                                <span id="confirmAdmin" class="confirmAdmin"></span>
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
                        </div><!-- /.container-fluid -->
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->';
    }?><!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script><?php
    if (isset($_SESSION['adStat']) && $_SESSION['adStat'] == 'authorized') {
    print '
        <form name="getcsv" action="" method="POST">
            <input type="hidden" value=1 name="test" />
        </form>';
    }
    print '
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
        </script>';
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == false &&
        !(isset($_SESSION['adStat']) && $_SESSION['adStat'] == 'authorized')) {
        print '
        <script type="text/javascript">
            document.getElementById(\'confirmAdmin\').style.color = "#ff0000";
            document.getElementById(\'confirmAdmin\').innerHTML = "Invalid email and/or password.";
            $(window).load(function(){
                $(\'#myModal\').modal(\'show\');
            });
        </script>';
    }?>
    </body>
</html><?php
unset($_SESSION['admin']);

function download_file() {
    $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
    mysql_select_db('louistay_surveys', $db_server);
    $query = "SELECT * FROM survey1_answers";
    $results = mysql_query($query);

    $buffer = "";
    while ($row = mysql_fetch_assoc($results)) {
        foreach ($row as $value) {
            $buffer .= $value;
            $buffer .= ",";
        }
        $buffer = substr($buffer, 0, strlen($string) - 1);
        $buffer .= "\n";
    }
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; Filename=character_inventory.csv');
    echo $buffer;
    exit(0);
}
?>