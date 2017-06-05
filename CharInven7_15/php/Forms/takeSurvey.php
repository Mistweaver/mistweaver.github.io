<?php
    class takeSurvey {
        // Survey 1 functions
        function s1_nextPage($survey, $pageTo, $userId) {
            require_once('Survey1/survey1Table.php');
            $survey1Table = new survey1Table();
            $survey1Table->survey1_update1($survey, $pageTo, $userId);
            if ($pageTo == 12) {
                require_once('displayResults.php');
                $displayResults = new displayResults();
                $means = $displayResults->survey1_results($userId);
                if ($means != false) {
                    header("location: http://www.characterinventory.org/surveys/results.php?survey=1");
                    $means = implode(", ", $means);
                    $_SESSION['means'] = $means;
                    $_SESSION['results'] = 'display';
                }
            }
            header("location: http://www.characterinventory.org/surveys/survey1.php");
        }
        function s1_prevPage($survey, $pageBack, $userId) {
            require_once('Survey1/survey1Table.php');
            $survey1Table = new survey1Table();
            $survey1Table->survey1_update2($survey, $pageBack, $userId);
            header("location: http://www.characterinventory.org/surveys/survey1.php");
        }
        function s1_setPage($s1, $userId) {
            require_once('Survey1/survey1Table.php');
            $survey1Table = new survey1Table();
            return $survey1Table->survey1_call($s1, $userId);
        }
        function check_empty_survey1($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT * FROM survey1_answers WHERE userID=$userId AND timeFinish IS NULL";
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            if ($row == 0) return true;
            else {
                foreach (array_slice($row, 4) as $key => $value) if ($value != 0) return false;
                return true;
            }
            mysql_close($db_server);
        }
        function retake_survey1($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT * FROM survey1_answers WHERE id=(SELECT MAX(id) FROM survey1_answers WHERE userID=$userId)";
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            $updateAns = "";
            $id = $row["id"];
            foreach (array_slice($row, 4) as $key => $value) $updateAns .= $key."=0, ";
            $updateAns = substr($updateAns, 0, strlen($updateAns) - 2);
            $query = "UPDATE survey1_answers SET $updateAns WHERE id=$id";
            mysql_query($query);
            mysql_close($db_server);
        }
        // Survey 2 functions
        function s2_nextPage($survey, $pageTo, $userId) {
            require_once('Survey2/survey2Table.php');
            $survey2Table = new survey2Table();
            $a_aResponse = $survey2Table->survey2_update1($survey, $pageTo, $userId);
            if ($pageTo == 31) {
                require_once('displayResults.php');
                $displayResults = new displayResults();
                $means = $displayResults->survey2_results($userId, $a_aResponse);
                header("http://www.characterinventory.org/surveys/results.php?survey=2");
                if (!isset($means)) print "hell";
                else if ($means == "") print "ekw";
                $_SESSION['results'] = 'display';
            }
            header("location: http://www.characterinventory.org/surveys/survey2.php");
        }
        function s2_prevPage($survey, $pageBack, $userId) {
            require_once('Survey2/survey2Table.php');
            $survey2Table = new survey2Table();
            $survey2Table->survey2_update2($survey, $pageBack, $userId);
            header("location: http://www.characterinventory.org/surveys/survey2.php");
        }
        function s2_setPage($s2, $userId) {
            require_once('Survey2/survey2Table.php');
            $survey2Table = new survey2Table();
            return $survey2Table->survey2_call($s2, $userId);
        }
        function check_empty_survey2($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT * FROM survey2_answers WHERE userID=$userId AND timeFinish IS NULL";
            $results = mysql_query($query);
            if ($results == false) return true;
            $row = mysql_fetch_assoc($results);
            if ($row == 0) return true;
            else {
                foreach (array_slice($row, 4) as $key => $value) if ($value != 0) return false;
                return true;
            }
            mysql_close($db_server);
        }
        function retake_survey2($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT * FROM survey2_answers WHERE id=(SELECT MAX(id) FROM survey2_answers WHERE userID=$userId)";
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            $updateAns = "";
            $id = $row["id"];
            foreach (array_slice($row, 4) as $key => $value) $updateAns .= $key."=0, ";
            $updateAns = substr($updateAns, 0, strlen($updateAns) - 2);
            $query = "UPDATE survey2_answers SET $updateAns WHERE id=$id";
            mysql_query($query);
            mysql_close($db_server);
        }
    }
?>