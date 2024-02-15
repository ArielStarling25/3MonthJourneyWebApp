<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MAIN PAGE OF 3MonthJourney -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/MainPage.css" />
    <link rel="stylesheet" href="CSS/MainPage2.css" />
    <link rel="stylesheet" href="CSS/MainPage3.css" />
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
            <h4><?php include 'Library/quoteGen.php' ?></h4>
            <p>By: Ariel Starling</p>
        </div>
        <div class="leftScroller">
            <ol>
                <!-- This is a single li element / a single node(representing a single week) -->
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
                <li>
                    <button class="Node4" value="nd4">
                        <p>Week 4</p>
                        <p>
                        <?php
                            $err = 0;
                            displayData(getDataByWeek($journeyDB, 4, $err));
                            if($err == 1){
                                echo "No Data";
                            }
                        ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node5" value="nd5">
                        <p>Week 5</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 5, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node6" value="nd6">
                        <p>Week 6</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 6, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node7" value="nd7">
                        <p>Week 7</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 7, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node8" value="nd8">
                        <p>Week 8</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 8, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node9" value="nd9">
                        <p>Week 9</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 9, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node10" value="nd10">
                        <p>Week 10</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 10, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node11" value="nd11">
                        <p>Week 11</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 11, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node12" value="nd12">
                        <p>Week 12</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 12, $err));
                                if($err == 1){
                                    echo "No Data";
                                }
                            ?>
                        </p>
                        <p>Click again to close...</p>
                    </button>
                </li>
                <li>
                    <button class="Node13" value="nd13">
                        <p>Week 13</p>
                        <p>
                            <?php
                                $err = 0;
                                displayData(getDataByWeek($journeyDB, 13, $err));
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
        <div class="dataInsDiv">
            <!-- This is an OL to accomodate additional buttons -->
            <ol>
                <li>
                    <a href="DataInsert.php">
                        <button class="dataInsBtn">
                            Data Insertion
                        </button>
                    </a>
                </li>
                <li>
                    <a href="Library/Check.php" target="_blank">
                        <button class="phpCheckBtn">
                            PHP Check
                        </button>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ArielStarling25/3MonthJourneyWebApp" target="_blank">
                        <button class="gitHubRepoBtn">
                            GitHub Repo
                        </button>
                    </a>
                </li>
                <li> 
                    <a href="ProgramRunner.php" target="_blank">
                        <button class="programRunnerBtn">
                            ProgramRunner
                        </button>
                    </a>
                </li>
                <li>
                    <a href="MediaBrowser.php" target="_blank">
                        <button class="mediaBrowserBtn">
                            MediaBrowser
                        </button>
                    </a>
                </li>
                <li>
                    <a href="MiniApps" target="_blank">
                        <button class="miniGameBtn">
                            MiniApps
                        </button>
                    </a>
                </li>
            </ol>
        </div>
        <div class="filler">

        </div>
    </div>
    <script src="JS/MainPage.js"></script>
</body>
</html>