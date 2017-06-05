<?php
    class membership {
        function create_user($fullName, $username, $password) {
            $query = "SELECT username FROM users_information WHERE username = '$username' LIMIT 1";
            $db_server = mysql_connect("localhost", "louistay_aayush", "CharInventory47!");
            mysql_select_db("louistay_surveys", $db_server);
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);

            if($row["username"] == $username) return false;
            else {
                $salt = "camping";
                $password = md5($salt.$password);
                $timeStamp = date("D. m/d/Y H:i:s");

                $query = "INSERT INTO users_information (username, password, fullName, timeRegistered) VALUES ('$username', '$password', '$fullName', '$timeStamp')";
                mysql_query($query);
                $query = "SELECT userID FROM users_information WHERE username = '$username' LIMIT 1";
                $result = mysql_query($query);
                $row = mysql_fetch_assoc($result);

                $_SESSION["status"] = "authorized";
                $_SESSION["userID"] = $row["userID"];
                header("location: http://www.characterinventory.org/profile");
            }
            mysql_close($db_server);
        }
        function validate_user($username, $password) {
            $salt = "camping";
            $password = md5($salt.$password);

            $query = "SELECT username, password, userID, city, state, country, zip, age, gender FROM users_information WHERE username = '$username' AND password = '$password' LIMIT 1";
            $db_server = mysql_connect("localhost", "louistay_aayush", "CharInventory47!");

            mysql_select_db("louistay_surveys", $db_server);
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);

            if ($row["username"] != "" && $row["password"] != "") {
                $_SESSION["status"] = "authorized";
                $_SESSION["userID"] = $row["userID"];
                $toProfile = false;
                // go to profile if any of these are NULL, gives user incentive to update these first
                if ($row["city"] == NULL || $row["state"] == NULL ||
                        $row["country"] == NULL || $row["zip"] == NULL ||
                        $row["age"] == NULL || $row["gender"] == NULL)
                    $toProfile = true;
                if (!realpath("../php/Forms/Survey1/survey1Table.php")) require_once("php/Forms/Survey1/survey1Table.php");
                else require_once("../php/Forms/Survey1/survey1Table.php");
                $survey1Table = new survey1Table();
                $check = $survey1Table->checkSurvey1($_SESSION["userID"]);
                if ($check) {
                    if (!realpath("../php/Forms/displayResults.php")) require_once("php/Forms/displayResults.php");
                    else require_once("../php/Forms/displayResults.php");
                    $displayResults = new displayResults();
                    $means = $displayResults->survey1_results($_SESSION["userID"]);
                    $means = implode(", ", $means);
                    $_SESSION["means"] = $means;
                    $percentiles = $displayResults->survey1_percentiles($_SESSION["userID"]);
                    $_SESSION["percentiles"] = $percentiles;
                    $_SESSION["results"] = "display";
                    session_write_close();
                    if ($toProfile) return "http://www.characterinventory.org/profile";
                    else return "http://www.characterinventory.org/surveys/results.php?survey=1";
                } else {
                    session_write_close();
                    if ($toProfile) return "http://www.characterinventory.org/profile";
                    else return "http://www.characterinventory.org/surveys/survey1.php";
                }
            } else return false;
            mysql_close($db_server);
        }
        function validate_admin($username, $password) {
            $salt = "camping";
            $password = md5($salt.$password);

            $query = "SELECT username, password, adminID FROM admin_information WHERE username = '$username' AND password = '$password' LIMIT 1";
            $db_server = mysql_connect("localhost", "louistay_aayush", "CharInventory47!");
            mysql_select_db("louistay_surveys", $db_server);
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);

            if ($row["username"] != "" && $row["password"] != "") {
                $_SESSION["adStat"] = "authorized";
                $_SESSION["adminID"] = $row["adminID"];
                header("location: http://www.characterinventory.org/admin");
            } else return false;
            mysql_close($db_server);
        }
        function log_out() {
            if (isset($_SESSION["status"]) && $_SESSION["status"] == "loggedout") {
                foreach ($_SESSION as $key => $value)
                    if ($key != "adStat" || $key != "adminID")
                        unset($_SESSION[$key]);
                header("location: http://www.characterinventory.org/");
            }
        }
        function log_out_admin() {
            if (isset($_SESSION["adStat"]) && $_SESSION["adStat"] == "loggedout") {
                unset($_SESSION["adStat"], $_SESSION["adminID"]);
                header("location: http://www.characterinventory.org/");
            }
        }
        function confirm_user() {
            session_start();
            if ($_SESSION["status"] != "authorized") header("location: http://www.characterinventory.org/");
        }
        function confirm_admin() {
            session_start();
            if ($_SESSION["adStat"] != "authorized") header("location: http://www.characterinventory.org/");
        }
    }
?>
