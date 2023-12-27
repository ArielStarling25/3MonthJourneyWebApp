<?php
    include './Library/ConsoleWriter.php';
    class DBSQLiteUser{
        private $databaseObj;
        
        public function __construct(string $dbName)
        {
            $this->databaseObj = new PDO("sqlite:" . $dbName);
            $this->databaseObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function dbRawInsertQuery(string $sql){
            $returnStr = "";
            try{
                $this->databaseObj->exec($sql);
                $returnStr = "Successfully executed sql";
            }
            catch(PDOException $sqlE){
                $returnStr = $sqlE->getMessage();
            }
            catch(Exception $e){
                $returnStr = $e->getMessage();
            }
            return $returnStr;
        }

        public function dbRawFetchQuery(string $sql){
            $query = $this->databaseObj->query($sql);
            $returnData = "";
            try{
                $returnData = $query->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(PDOException $sqlE){
                $returnData = $sqlE->getMessage();
            }
            catch(Exception $e){
                $returnData = $e->getMessage();
            }
            return $returnData;
        }

        public function dbInsertJourneyData(int $week, string $weekDate, string $summary){
            $returnMsg = "";
            $sql = " INSERT INTO Weeks VALUES ($week, '$weekDate', '$summary');";
            try{
                $this->databaseObj->exec($sql);
                $returnMsg = "successfully added data to table!";
            }
            catch(PDOException $sqlE){
                $returnMsg = $sqlE->getMessage();
            }
            catch(Exception $e){
                $returnMsg = $e->getMessage();
            }
            return $returnMsg;
        }

        public function dbUpdateJourneyData(int $week, string $weekDate, string $summary){
            $returnMsg = "";
            $sql = " UPDATE Weeks SET WeekStartDate = '$weekDate', WeekSummary = '$summary' WHERE Week = $week; ";
            try{
                $this->databaseObj->exec($sql);
                $returnMsg = "successfully updated data in table!";
            }
            catch(PDOException $sqlE){
                $returnMsg = $sqlE->getMessage();
            }
            catch(Exception $e){
                $returnMsg = $e->getMessage();
            }
            return $returnMsg;
        }
    }

    $journeyDB = new DBSQLiteUser("Data/Journey.db");

    function insertData(&$databaseUser, int $week, string $weekDate, string $summary){
        $retrievedMsg = $databaseUser->dbInsertJourneyData($week, $weekDate, $summary);
        return $retrievedMsg;
    }   

    function updateData(&$databaseUser, int $week, string $weekDate, string $summary){
        $retrievedMsg = $databaseUser->dbUpdateJourneyData($week, $weekDate, $summary);
        return $retrievedMsg;
    }

    function getDataByWeek(&$databaseUser, int $weekNum, &$msg)
    {
        try{
            $sql = " SELECT * FROM Weeks WHERE Week = $weekNum;";
            $retrievedData = $databaseUser->dbRawFetchQuery($sql);
        }
        catch(PDOException $sqlE){
            $retrievedData = null;
            consoleLog($sqlE->getMessage());
            $msg = 1;
        }
        catch(Exception $e){
            $retrievedData = null;
            consoleLog($e->getMessage());
            $msg = 1;
        }

        return $retrievedData;
    }

    function getDataByQuery(&$databaseUser, string $sqlQuery){
        $retrievedData = $databaseUser->dbRawQuery($sqlQuery);
        return $retrievedData;
    }

    function displayData($retrivedData){
        if($retrivedData != null){
            foreach($retrivedData as $dataEntry){
                echo "Week start date: " . $dataEntry['WeekStartDate'] . "<br>";
                echo "------------------------------------<br>";
                echo $dataEntry['WeekSummary'] . "<br>";
            }
        }
        else{
            echo "--No Data--";
        }
    }
?>