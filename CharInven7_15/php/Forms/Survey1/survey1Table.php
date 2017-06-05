<?php
    class survey1Table {
        function survey1_update1($survey, $pageTo, $userId) {
            if ($pageTo == 2) $columns = explode(", ", 'G11, G12, G14, G2, G20, G3, G8, Lo19, Lo2, Lo20, Lo3, AoB10, AoB12, AoB13, AoB14, AoB18, AoB19, AoB3, AoB5, AoB8');
            else if ($pageTo == 3) $columns = explode(", ", 'AoB9, Cr13, Cr14, Cr3, Cr7, Cu1, Cu14, Cu16, Cu22, Cu3, LoL10, LoL14, LoL16, LoL19, LoL20, LoL4, LoL5, LoL7, LoL8, LoL9');
            else if ($pageTo == 4) $columns = explode(", ", 'Hop1, Hop14, Hop19, Hop5, Hop6, Hop8, Hop9, Perse11, Perse12, Perse14, Perse16, Perse17, Perse19, Perse20, Perse3, Perse5, Perse8, Perse9, SR10, SR11');
            else if ($pageTo == 5) $columns = explode(", ", 'SR18, SR20, SR21, SR22, SR27, T10, T12, T13, T14, T15, T17, T18, Z1, Z11, Z13, Z14, Z16, Z17, Z18, Z2');
            else if ($pageTo == 6) $columns = explode(", ", 'Z20, Z21, Z3, Z7, Humo10, Humo11, Humo19, Humo4, Le13, Le14, Le15, Le16, Le5, Le7, Le8, Persp12, Persp20 , Persp21 , Persp23, Persp24');
            else if ($pageTo == 7) $columns = explode(", ", 'Persp25, Persp7, Persp8, SI15, SI20, SI23, SI6, SI14, SI19, SI2, SI5, SI8, Hon10, Hon11, Hon27, Hon4, Hon6, Hon8, B1, B11');
            else if ($pageTo == 8) $columns = explode(", ", 'B14, B3, B6, Humi10, Humi13, Humi14, Humi17, Humi18, Humi19, Humi3, Humi4, Hon2, Hon21, Hon22, Hon25, Hon26, Hon28, Pr17, Pr18, Pr19');
            else if ($pageTo == 9) $columns = explode(", ", 'Pr9, SI27, SI30, SI30_A, SI9, SR1, SR2, SR5, SR6, SR8, Pr14, Pr22, Pr23, Pr3, S22, S23, S24, S26, S27, S31');
            else if ($pageTo == 10) $columns = explode(", ", 'S4, S5, S7, S8, S10, S12, S16, S18, S19, S20, S28, S29, S30, Fa11, Fa16, Fa19, Fa2, Fa20, Fa6, Fa7');
            else if ($pageTo == 11) $columns = explode(", ", 'Fa8, Fa9, Fo1, Fo14, Fo15, Fo16, Fo18, Fo19, Fo2, Fo3, Fo4, K1, K15, K16, K17, K2, K20, K6, J15, J17');
            else if ($pageTo == 12) $columns = explode(", ", 'J18, J21, J5, J6, J1, J23, J24, J26, J27, J28, J30');

            $query = "SELECT timeFinish FROM survey1_answers WHERE id=(SELECT MAX(id) FROM survey1_answers WHERE userID=$userId)";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);

            if ($row == 0 || $row["timeFinish"] != NULL) {
                $cols = implode(", ", $columns);
                $timeStart = date('D. m/d/Y H:i:s');
                $query = "INSERT INTO survey1_answers (userID, timeStart, $cols) VALUES ($userId, '$timeStart', $survey)";
            } else {
                $updateAns = "";
                $answers = explode(", ", $survey);
                for ($x = 0; $x < count($answers); $x++)
                    $updateAns .= $columns[$x]."=".$answers[$x].", ";
                $updateAns = substr($updateAns, 0, strlen($updateAns) - 2);
                $results2 = mysql_query("SELECT MAX(id) FROM survey1_answers WHERE userID=$userId");
                $row2 = mysql_fetch_assoc($results2);
                $id = $row2["MAX(id)"];
                if ($pageTo == 12) {
                    $timeFinish = "timeFinish='".date('D. m/d/Y H:i:s')."'";
                    $query = "UPDATE survey1_answers SET $timeFinish WHERE id=$id";
                    mysql_query($query);
                }
                $query = "UPDATE survey1_answers SET $updateAns WHERE id=$id";
            }
            mysql_query($query);
            mysql_close($db_server);
        }
        function survey1_update2($survey, $pageBack, $userId) {
            if ($pageBack == 1) $columns = explode(", ", 'AoB9, Cr13, Cr14, Cr3, Cr7, Cu1, Cu14, Cu16, Cu22, Cu3, LoL10, LoL14, LoL16, LoL19, LoL20, LoL4, LoL5, LoL7, LoL8, LoL9');
            else if ($pageBack == 2) $columns = explode(", ", 'Hop1, Hop14, Hop19, Hop5, Hop6, Hop8, Hop9, Perse11, Perse12, Perse14, Perse16, Perse17, Perse19, Perse20, Perse3, Perse5, Perse8, Perse9, SR10, SR11');
            else if ($pageBack == 3) $columns = explode(", ", 'SR18, SR20, SR21, SR22, SR27, T10, T12, T13, T14, T15, T17, T18, Z1, Z11, Z13, Z14, Z16, Z17, Z18, Z2');
            else if ($pageBack == 4) $columns = explode(", ", 'Z20, Z21, Z3, Z7, Humo10, Humo11, Humo19, Humo4, Le13, Le14, Le15, Le16, Le5, Le7, Le8, Persp12, Persp20 , Persp21 , Persp23, Persp24');
            else if ($pageBack == 5) $columns = explode(", ", 'Persp25, Persp7, Persp8, SI15, SI20, SI23, SI6, SI14, SI19, SI2, SI5, SI8, Hon10, Hon11, Hon27, Hon4, Hon6, Hon8, B1, B11');
            else if ($pageBack == 6) $columns = explode(", ", 'B14, B3, B6, Humi10, Humi13, Humi14, Humi17, Humi18, Humi19, Humi3, Humi4, Hon2, Hon21, Hon22, Hon25, Hon26, Hon28, Pr17, Pr18, Pr19');
            else if ($pageBack == 7) $columns = explode(", ", 'Pr9, SI27, SI30, SI30_A, SI9, SR1, SR2, SR5, SR6, SR8, Pr14, Pr22, Pr23, Pr3, S22, S23, S24, S26, S27, S31');
            else if ($pageBack == 8) $columns = explode(", ", 'S4, S5, S7, S8, S10, S12, S16, S18, S19, S20, S28, S29, S30, Fa11, Fa16, Fa19, Fa2, Fa20, Fa6, Fa7');
            else if ($pageBack == 9) $columns = explode(", ", 'Fa8, Fa9, Fo1, Fo14, Fo15, Fo16, Fo18, Fo19, Fo2, Fo3, Fo4, K1, K15, K16, K17, K2, K20, K6, J15, J17');
            else if ($pageBack == 10) $columns = explode(", ", 'J18, J21, J5, J6, J1, J23, J24, J26, J27, J28, J30');

            $query = "SELECT * FROM survey1_answers WHERE id=(SELECT MAX(id) FROM survey1_answers WHERE userID=$userId)";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);

            $updateAns = "";
            $answers = explode(", ", $survey);
            for ($x = 0; $x < count($answers); $x++)
                $updateAns .= $columns[$x]."=".$answers[$x].", ";
            $updateAns = substr($updateAns, 0, strlen($updateAns) - 2);
            $results2 = mysql_query("SELECT MAX(id) FROM survey1_answers WHERE userID=$userId");
            $row2 = mysql_fetch_assoc($results2);
            $id = $row2["MAX(id)"];
            $query = "UPDATE survey1_answers SET $updateAns WHERE id=$id";
            mysql_query($query);
            mysql_close($db_server);
        }
        function checkSurvey1($userId) {
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);

            $query = "SELECT timeFinish FROM survey1_answers WHERE id=(SELECT MAX(id) FROM survey1_answers WHERE userID=$userId AND timeFinish IS NOT NULL)";
            $results = mysql_query($query);
            $row = mysql_fetch_assoc($results);
            if ($row == 0) return false;
            else return true;
            mysql_close($db_server);
        }
        function survey1_call($s1, $userId) {
            $columns = "";
            if ($s1 == 1) $columns = "G11, G12, G14, G2, G20, G3, G8, Lo19, Lo2, Lo20, Lo3, AoB10, AoB12, AoB13, AoB14, AoB18, AoB19, AoB3, AoB5, AoB8";
            else if ($s1 == 2) $columns = "AoB9, Cr13, Cr14, Cr3, Cr7, Cu1, Cu14, Cu16, Cu22, Cu3, LoL10, LoL14, LoL16, LoL19, LoL20, LoL4, LoL5, LoL7, LoL8, LoL9";
            else if ($s1 == 3) $columns = "Hop1, Hop14, Hop19, Hop5, Hop6, Hop8, Hop9, Perse11, Perse12, Perse14, Perse16, Perse17, Perse19, Perse20, Perse3, Perse5, Perse8, Perse9, SR10, SR11";
            else if ($s1 == 4) $columns = "SR18, SR20, SR21, SR22, SR27, T10, T12, T13, T14, T15, T17, T18, Z1, Z11, Z13, Z14, Z16, Z17, Z18, Z2";
            else if ($s1 == 5) $columns = "Z20, Z21, Z3, Z7, Humo10, Humo11, Humo19, Humo4, Le13, Le14, Le15, Le16, Le5, Le7, Le8, Persp12, Persp20, Persp21, Persp23, Persp24";
            else if ($s1 == 6) $columns = "Persp25, Persp7, Persp8, SI15, SI20, SI23, SI6, SI14, SI19, SI2, SI5, SI8, Hon10, Hon11, Hon27, Hon4, Hon6, Hon8, B1, B11";
            else if ($s1 == 7) $columns = "B14, B3, B6, Humi10, Humi13, Humi14, Humi17, Humi18, Humi19, Humi3, Humi4, Hon2, Hon21, Hon22, Hon25, Hon26, Hon28, Pr17, Pr18, Pr19";
            else if ($s1 == 8) $columns = "Pr9, SI27, SI30, SI30_A, SI9, SR1, SR2, SR5, SR6, SR8, Pr14, Pr22, Pr23, Pr3, S22, S23, S24, S26, S27, S31";
            else if ($s1 == 9) $columns = "S4, S5, S7, S8, S10, S12, S16, S18, S19, S20, S28, S29, S30, Fa11, Fa16, Fa19, Fa2, Fa20, Fa6, Fa7";
            else if ($s1 == 10) $columns = "Fa8, Fa9, Fo1, Fo14, Fo15, Fo16, Fo18, Fo19, Fo2, Fo3, Fo4, K1, K15, K16, K17, K2, K20, K6, J15, J17";
            else if ($s1 == 11) $columns = "J18, J21, J5, J6, J1, J23, J24, J26, J27, J28, J30";
            $db_server = mysql_connect('localhost', 'louistay_aayush', 'CharInventory47!');
            mysql_select_db('louistay_surveys', $db_server);
            $query = "SELECT $columns FROM survey1_answers WHERE id=(SELECT MAX(id) FROM survey1_answers WHERE userID=$userId AND timeFinish IS NULL)";
            $results = mysql_query($query);
            if (!$results) {
                mysql_close($db_server);
                return "";
            } else {
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
    }
?>