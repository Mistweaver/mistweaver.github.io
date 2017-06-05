<?php
    class survey2Table {
        function survey2_update1($survey, $pageTo, $userId) {
            if ($pageTo == 2) $columns = explode(", ", '1A, 1B, 1C');
            else if ($pageTo == 3) $columns = explode(", ", '2A, 2B, 2C');
            else if ($pageTo == 4) $columns = explode(", ", '3A, 3B, 3C');
            else if ($pageTo == 5) $columns = explode(", ", '4A, 4B, 4C');
            else if ($pageTo == 6) $columns = explode(", ", '5A, 5B, 5C');
            else if ($pageTo == 7) $columns = explode(", ", '6A, 6B, 6C');
            else if ($pageTo == 8) $columns = explode(", ", '7A, 7B, 7C');
            else if ($pageTo == 9) $columns = explode(", ", '8A, 8B, 8C');
            else if ($pageTo == 10) $columns = explode(", ", '9A, 9B, 9C');
            else if ($pageTo == 11) $columns = explode(", ", '10A, 10B, 10C');
            else if ($pageTo == 12) $columns = explode(", ", '11A, 11B, 11C');
            else if ($pageTo == 13) $columns = explode(", ", '12A, 12B, 12C');
            else if ($pageTo == 14) $columns = explode(", ", '13A, 3B, 3C');
            else if ($pageTo == 15) $columns = explode(", ", '14A, 4B, 4C');
            else if ($pageTo == 16) $columns = explode(", ", '15A, 5B, 5C');
            else if ($pageTo == 17) $columns = explode(", ", '16A, 6B, 6C');
            else if ($pageTo == 18) $columns = explode(", ", '17A, 7B, 7C');
            else if ($pageTo == 19) $columns = explode(", ", '18A, 8B, 8C');
            else if ($pageTo == 20) $columns = explode(", ", '19A, 9B, 9C');
            else if ($pageTo == 21) $columns = explode(", ", '20A, 20B, 20C');
            else if ($pageTo == 22) $columns = explode(", ", '21A, 21B, 21C');
            else if ($pageTo == 23) $columns = explode(", ", '22A, 22B, 22C');
            else if ($pageTo == 24) $columns = explode(", ", '23A, 23B, 23C');
            else if ($pageTo == 25) $columns = explode(", ", '24A, 24B, 24C');
            else if ($pageTo == 26) $columns = explode(", ", '25A, 25B, 25C');
            else if ($pageTo == 27) $columns = explode(", ", '26A, 26B, 26C');
            else if ($pageTo == 28) $columns = explode(", ", '27A, 27B, 27C');
            else if ($pageTo == 29) $columns = explode(", ", '28A, 28B, 28C');
            else if ($pageTo == 30) $columns = explode(", ", '29A, 29B, 29C');
            else if ($pageTo == 31) $columns = explode(", ", '30A, 30B, 30C');
            $query = "SELECT timeFinish FROM survey2_answers WHERE id=(SELECT MAX(id) FROM survey2_answers WHERE userID=$userId)";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            if ($row == 0 || ($row["timeFinish"] != NULL && $pageTo < 31)) {
                $cols = implode(", ", $columns);
                $timeStart = date('D. m/d/Y H:i:s');
                $query = "INSERT INTO survey2_answers (userID, timeStart, $cols) VALUES ($userId, '$timeStart', $survey)";
            } else {
                $updateAns = "";
                $answers = explode(", ", $survey);
                for ($x = 0; $x < count($answers); $x++) $updateAns .= $columns[$x]."=".$answers[$x].", ";
                $updateAns = substr($updateAns, 0, strlen($updateAns) - 2);
                $results2 = mysql_query("SELECT MAX(id) FROM survey2_answers WHERE userID=$userId");
                $row2 = mysql_fetch_assoc($results2);
                $id = $row2["MAX(id)"];
                if ($pageTo == 31) {
                    $timeFinish = "timeFinish='".date('D. m/d/Y H:i:s')."'";
                    $query = "UPDATE survey2_answers SET $timeFinish WHERE id=$id";
                    mysql_query($query);
                    $query = "SELECT * FROM survey2_answers WHERE id=$id";
                    $results3 = mysql_query($query);
                    $row3 = mysql_fetch_assoc($results3);
                    $values = "";
                    foreach ($row as $key => $value) {
                        if ($key != "id" && $key != "userID" && $key != "timeStart" && $key != "timeFinish") {
                            $values .= $value.", ";
                        }
                    }
                    $values = substr($values, 0, strlen($values) - 2);
                    mysql_query("UPDATE survey2_answers SET $updateAns WHERE id=$id");
                    mysql_close($db_server);
                    return explode(", ", $values);
                }
                $query = "UPDATE survey2_answers SET $updateAns WHERE id=$id";
            }
            mysql_query($query);
            mysql_close($db_server);
        }
        function survey2_update2($survey, $pageBack, $userId) {
            if ($pageBack == 1) $columns = explode(", ", '1A, 1B, 1C');
            else if ($pageBack == 2) $columns = explode(", ", '2A, 2B, 2C');
            else if ($pageBack == 3) $columns = explode(", ", '3A, 3B, 3C');
            else if ($pageBack == 4) $columns = explode(", ", '4A, 4B, 4C');
            else if ($pageBack == 5) $columns = explode(", ", '5A, 5B, 5C');
            else if ($pageBack == 6) $columns = explode(", ", '6A, 6B, 6C');
            else if ($pageBack == 7) $columns = explode(", ", '7A, 7B, 7C');
            else if ($pageBack == 8) $columns = explode(", ", '8A, 8B, 8C');
            else if ($pageBack == 9) $columns = explode(", ", '9A, 9B, 9C');
            else if ($pageBack == 10) $columns = explode(", ", '10A, 10B, 10C');
            else if ($pageBack == 11) $columns = explode(", ", '11A, 11B, 11C');
            else if ($pageBack == 12) $columns = explode(", ", '12A, 12B, 12C');
            else if ($pageBack == 13) $columns = explode(", ", '13A, 3B, 3C');
            else if ($pageBack == 14) $columns = explode(", ", '14A, 4B, 4C');
            else if ($pageBack == 15) $columns = explode(", ", '15A, 5B, 5C');
            else if ($pageBack == 16) $columns = explode(", ", '16A, 6B, 6C');
            else if ($pageBack == 17) $columns = explode(", ", '17A, 7B, 7C');
            else if ($pageBack == 18) $columns = explode(", ", '18A, 8B, 8C');
            else if ($pageBack == 19) $columns = explode(", ", '19A, 9B, 9C');
            else if ($pageBack == 20) $columns = explode(", ", '20A, 20B, 20C');
            else if ($pageBack == 21) $columns = explode(", ", '21A, 21B, 21C');
            else if ($pageBack == 22) $columns = explode(", ", '22A, 22B, 22C');
            else if ($pageBack == 23) $columns = explode(", ", '23A, 23B, 23C');
            else if ($pageBack == 24) $columns = explode(", ", '24A, 24B, 24C');
            else if ($pageBack == 25) $columns = explode(", ", '25A, 25B, 25C');
            else if ($pageBack == 26) $columns = explode(", ", '26A, 26B, 26C');
            else if ($pageBack == 27) $columns = explode(", ", '27A, 27B, 27C');
            else if ($pageBack == 28) $columns = explode(", ", '28A, 28B, 28C');
            else if ($pageBack == 29) $columns = explode(", ", '29A, 29B, 29C');
            else if ($pageBack == 30) $columns = explode(", ", '30A, 30B, 30C');
            $query = "SELECT * FROM survey2_answers WHERE id=(SELECT MAX(id) FROM survey2_answers WHERE userID=$userId)";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            $updateAns = "";
            $answers = explode(", ", $survey);
            for ($x = 0; $x < count($answers); $x++) $updateAns .= $columns[$x]."=".$answers[$x].", ";
            $updateAns = substr($updateAns, 0, strlen($updateAns) - 2);
            $results2 = mysql_query("SELECT MAX(id) FROM survey2_answers WHERE userID=$userId");
            $row2 = mysql_fetch_assoc($results2);
            $id = $row2["MAX(id)"];
            $query = "UPDATE survey2_answers SET $updateAns WHERE id=$id";
            mysql_query($query);
            mysql_close($db_server);
        }
        function checkSurvey2($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT timeFinish FROM survey2_answers WHERE id=(SELECT MAX(id) FROM survey2_answers WHERE userID=$userId AND timeFinish IS NOT NULL)";
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            if ($row == 0) return false;
            else return true;
            mysql_close($db_server);
        }
        function survey2_call($s2, $userId) {
            $columns = "";
            if ($s2 == 1) $columns = "1A, 1B, 1C";
            else if ($s2 == 2) $columns = "2A, 2B, 2C";
            else if ($s2 == 3) $columns = "3A, 3B, 3C";
            else if ($s2 == 4) $columns = "4A, 4B, 4C";
            else if ($s2 == 5) $columns = "5A, 5B, 5C";
            else if ($s2 == 6) $columns = "6A, 6B, 6C";
            else if ($s2 == 7) $columns = "7A, 7B, 7C";
            else if ($s2 == 8) $columns = "8A, 8B, 8C";
            else if ($s2 == 9) $columns = "9A, 9B, 9C";
            else if ($s2 == 10) $columns = "10A, 10B, 10C";
            else if ($s2 == 11) $columns = "11A, 11B, 11C";
            else if ($s2 == 12) $columns = "12A, 12B, 12C";
            else if ($s2 == 13) $columns = "13A, 3B, 3C";
            else if ($s2 == 14) $columns = "14A, 4B, 4C";
            else if ($s2 == 15) $columns = "15A, 5B, 5C";
            else if ($s2 == 16) $columns = "16A, 6B, 6C";
            else if ($s2 == 17) $columns = "17A, 7B, 7C";
            else if ($s2 == 18) $columns = "18A, 8B, 8C";
            else if ($s2 == 19) $columns = "19A, 9B, 9C";
            else if ($s2 == 20) $columns = "20A, 20B, 20C";
            else if ($s2 == 21) $columns = "21A, 21B, 21C";
            else if ($s2 == 22) $columns = "22A, 22B, 22C";
            else if ($s2 == 23) $columns = "23A, 23B, 23C";
            else if ($s2 == 24) $columns = "24A, 24B, 24C";
            else if ($s2 == 25) $columns = "25A, 25B, 25C";
            else if ($s2 == 26) $columns = "26A, 26B, 26C";
            else if ($s2 == 27) $columns = "27A, 27B, 27C";
            else if ($s2 == 28) $columns = "28A, 28B, 28C";
            else if ($s2 == 29) $columns = "29A, 29B, 29C";
            else if ($s2 == 30) $columns = "30A, 30B, 30C";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT $columns FROM survey2_answers WHERE id=(SELECT MAX(id) FROM survey2_answers WHERE userID=$userId AND timeFinish IS NULL)";
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            $call = "";
            if ($row != 0) {
                foreach ($row as $key => $value) $call .= $value.", ";
                $call = substr($call, 0, strlen($call) - 2);
            }
            mysql_close($db_server);
            return $call;
        }
    }
?>