<?php
    /**
     *  Script to implement visitors counter, and avoid autoincresement after page refleshing.
     */
    class visitsCounter {
        private $mysqli;    //Use mysqli to eliminate database reconnecting. All visitors will use only one process to access database.

        function __construct() {
            $this->mysqli = new mysqli("localhost", "louistay_aayush", "CharInventory47!", "louistay_surveys");
        }

        public function getVisitNum() {
            $sql = "SELECT val FROM meta_data WHERE name = 'visitsCounter'";
            $result = $this->mysqli->query($sql);
            $row = $result->fetch_array();
            return $row[0];
        }

        public function updateVisitNum() {
            session_start();
            $visitNum = $this->getVisitNum();
            if (! $_SESSION['counter']) {
                $sql = "UPDATE meta_data SET val =" . ($visitNum + 1) . " WHERE name = 'visitsCounter'";
                $queryResult = $this->mysqli->query($sql);
                if ($queryResult != false) {
                    $_SESSION['counter'] = true;
                }
            }
        }
    }

 ?>
