<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/DataInsert.css" />
    <title>DataInserter</title>
</head>
<body>
    <?php
        include 'DB/dbUser.php';

    ?>
    <div class="formTitle">
        <div class="formTitleIn">
            <h2>Data Insert for 3MonthJourney</h2>
        </div>
    
        <div class="formBox">
            <?php
                // This is to retrieve data from database in the case user wants to edit a previous input
                $weekSumDis = "";
                $dataArr = array("","","");
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $iD = $_REQUEST['idKey'];
                    $buttonClicked = $_REQUEST['submit'];
                    if($iD == "insertData"){
                        if($buttonClicked == "Get Data"){
                            try{
                                $weekNum = $_REQUEST['weekNumInput']; 
                                $data = getDataByWeek($journeyDB, $weekNum, $err);
                                if($data != null){
                                    $dataArr = $data[0];
                                    $weekNum = $dataArr['Week'];
                                    $weekDate = $dataArr['WeekStartDate'];
                                    $weekSumm = $dataArr['WeekSummary'];
                                    $weekSumDis = str_replace("<br>", PHP_EOL, $weekSumm);
                                    consoleLog($weekSumDis);
                                }
                            }
                            catch(PDOException $sqlE){
                                consoleLog($sqlE->getMessage());
                            }
                            catch(Exception $e){
                                consoleLog($e->getMessage());
                            }
                        }
                    }
                }
            ?>
            <form id="beginPage" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label for="weekNumInput">Input Week Number: </label>
                <input id="weekNumInput" name="weekNumInput" type="number" min="1" value="<?php echo $weekNum ?>" required><br><br>
                <label for="weekDateInput">Week Start Date: </label>
                <input id="weekDateInput" name="weekdateInput" type="date" value="<?php echo $weekDate ?>"><br><br>
                <label for="weekSummary">Week Summary:</label>
                <textarea id="weekSummary" name="weekSummary" wrap="soft"><?php echo $weekSumDis?></textarea>
                <input type="hidden" name="idKey" value="insertData">
                <input name="submit" type="submit" value="Submit Data">
                <input name="submit" type="submit" value="Update Data">
                <input name="submit" type="submit" value="Get Data">
            </form>
        </div>
    </div>
    <div class="returnBtn">
        <a href="MainPage.php">
            <button>Return to Main Page</button>
        </a>
    </div>
    <div class="formResults">
        <?php
            $passCounter = 0;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $iD = $_REQUEST['idKey'];
                $buttonClicked = $_REQUEST['submit'];
                if($iD == "insertData"){
                    try{
                        $correctedWeekSumm = "";
                        $weekNum = $_REQUEST['weekNumInput']; 
                        if (empty($weekNum)) {
                            consoleLog("Week Number is empty");
                        } else {
                            $passCounter++;
                        }
                        echo "<br>";
                        $weekDate = $_REQUEST['weekdateInput'];
                        if (empty($weekDate)) {
                            consoleLog("Week start date is empty");
                        } else {
                            $passCounter++;
                        }
                        echo "<br>";
                        $weekSumm = $_REQUEST['weekSummary'];
                        if (empty($weekSumm)) {
                            consoleLog("Week summary is empty");
                        } else {
                            $correctedWeekSumm = str_replace(PHP_EOL, "<br>", $weekSumm);
                            consoleLog("$correctedWeekSumm");
                            $passCounter++;
                        }

                        if($passCounter >= 3){
                            if($buttonClicked == "Submit Data"){
                                consoleLog("Inserting: $weekNum, $weekDate, $correctedWeekSumm");
                                $msg = insertData($journeyDB, $weekNum, $weekDate, $correctedWeekSumm);
                                consoleLog($msg);
                                echo "<p>$msg</p>";
                            }
                            elseif($buttonClicked == "Update Data"){
                                consoleLog("Updating: $weekNum, $weekDate, $correctedWeekSumm");
                                $msg = updateData($journeyDB, $weekNum, $weekDate, $correctedWeekSumm);
                                consoleLog($msg);
                                echo "<p>$msg</p>";
                            }
                        }
                        else{
                            if($buttonClicked == "Submit Data" || $buttonClicked == "Update Data"){
                                consoleLog("Empty Date/Summary input");
                                echo "<p>Please fill out the date and summary to add or update an entry...</p>";
                            }
                        }
                    }
                    catch(Exception $eX2){
                        echo $eX2->getMessage();
                    }
                }
            }
        ?>
    </div>
    <script src="JS/MainPage.js"></script>
</body>
</html>