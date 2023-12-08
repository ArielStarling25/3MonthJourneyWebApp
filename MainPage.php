<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/MainPage.css" />
    <link rel="stylesheet" href="CSS/MainPage2.css" />
    <title>3MonthJourney</title>
</head>
<body>
    <?php
        include 'DB/dbUser.php';
    ?>
    <div class="headDiv">
        <div class="rippler">
            <span class="rippleAnimContainer">
                <span class="ripple greyBg"></span>
                <span class="ripple greyBg"></span>
                <span class="ripple greyBg"></span>
            </span>
        </div>
        <div class="titleBox">
            <button class="titleBtn" value="begin">Witness my Journey</button>
        </div>
    </div>
    <div class="bodyDiv">
        <div class="leftScrollerTitle">
            <h1>Journey of 3 Months</h1>
        </div>
        <div class="leftScroller">
            <ol>
                <!-- This is a single li element -->
                <li>
                    <button class="Node1" value="nd1">
                        <p>Week 1</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 1, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <!-- =========================== -->
                <li>
                    <button class="Node2" value="nd2">
                        <p>Week 2</p>
                        <p>
                        <?php
                            $err = 0;
                            displayData(getDataByWeek($journeyDB, 2, $err));
                            if($err == 1){
                                echo "No Data";
                            }
                        ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node3" value="nd3">
                        <p>Week 3</p>
                        <p>
                        <?php
                            $err = 0;
                            displayData(getDataByWeek($journeyDB, 3, $err));
                            if($err == 1){
                                echo "No Data";
                            }
                        ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
            </ol>
        </div>
    </div>
    <div class="tailDiv">
        <button class = "dataInsBtn">
            <a href="DataInsert.php">Data Insert Page</a>
        </button>
    </div>
    <script src="JS/MainPage.js"></script>
</body>
</html>