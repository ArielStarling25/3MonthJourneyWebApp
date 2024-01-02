<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Browser</title>
    <link rel="stylesheet" href="CSS/MediaBrowser.css" />
</head>
<body>
    <?php 
        include 'Library/ConsoleWriter.php';
        $buttonClicked = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            consoleLog("Recieved post");
            $iD = $_REQUEST['idKey'];
            if($iD == "callMedia"){
                try{
                    $buttonClicked = $_REQUEST['submit'];
                    consoleLog($buttonClicked . " was clicked ");
                }
                catch(Exception $eX2){
                    echo $eX2->getMessage();
                }
            }
            else if($iD == "upMedia"){
                include 'Library/UploadReader.php';
            }
        }

        $dir = 'Uploads/Media';
        $files = scandir($dir);
        $jsonData = json_encode($files);
        $decodedArray = json_decode($jsonData);
    ?>
    <div class="mbHeadDiv">
        <div class="mbTitleBox">
            <h1>Media Browser</h1>
        </div>
    </div>
    <div class="mbBodyDiv">   
        <div class="mediaBoxHolder">
            <div class="mediaPlayer">
                <?php 
                    if($buttonClicked != null){
                        $ext = pathinfo($buttonClicked, PATHINFO_EXTENSION);
                        consoleLog($ext);
                        if($ext == "mp4"){ ?>
                            <video width="640" height="480" controls>
                                <source src="Uploads/Media/<?= $buttonClicked ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                <?php 
                        }else{ ?>
                            <img src='Uploads/Media/<?= $buttonClicked ?>' width="640" height="480">
                <?php
                        }
                    }  ?>
            </div>
            <!-- Implement media scroller + uploader functionality here -->
            <div class="mediaScroll">
                <ol>
                    <form id='programSub' method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <input type="hidden" name="idKey" value="callMedia">
                        <?php 
                            foreach($decodedArray as $file){
                                if($file == "." || $file == ".."){
                                    //omit the empty strings, only include the named files
                                }
                                else{
                                    echo "<li>
                                            <input name='submit' type='submit' value='$file'>
                                    </li>";
                                }
                            }
                        ?>
                    </form>
                    <form id="uploadProg" method="post" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <li>
                            <input type="hidden" name="idKey" value="upMedia">
                            <input type="file" id="fileToUpload" name="fileToUpload">
                            <input type="submit" name="submit" value="Upload File">
                        </li>
                    </form>
                </ol>
            </div>
        </div>
    </div>
    <div class="mbTailDiv">

    </div>
</body>
</html>