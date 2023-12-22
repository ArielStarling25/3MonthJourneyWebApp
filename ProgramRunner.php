<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/ProgramRunner.css" />
    <title>Program Runner</title>
</head>
<body>
    <?php 
        include 'ConsoleWriter.php';
        //Directory for python files
        $dir = 'Uploads/Python';
        $files = scandir($dir);
        $jsonData = json_encode($files);
        $decodedArray = json_decode($jsonData);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            consoleLog("Recieved post");
            $iD = $_REQUEST['idKey'];
            $buttonClicked = $_REQUEST['submit'];
            if($iD == "callScript"){
                try{
                    consoleLog($buttonClicked . " was clicked ");
                }
                catch(Exception $eX2){
                    echo $eX2->getMessage();
                }
            }
        }
    ?>
    <div class="PRHeadDiv">
        <div>
            <h1>
                Program Runner
            </h1>
        </div>
    </div>
    <div class="PRBodyDiv">
        <div class="ResHolder">
            <div class="ResultBox">
                <p>
                    <?php
                        if(!empty($buttonClicked)){
                            $python = shell_exec("python Uploads/Python/$buttonClicked");
                            $formattedOutput = str_replace("\n", "<br>", $python);
                            echo $formattedOutput;
                        }
                        else{
                            echo "Select a file to run and display...";
                        }
                    ?>
                </p>
            </div>
            <div class="PyList">
                <ol>
                    <form id='programSub' method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <input type="hidden" name="idKey" value="callScript">
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
                </ol>
            </div>
        </div>
    </div>    
    <div class="PRTailDiv">

    </div>
    <script src="JS/ProgramRunner.js"></script>
</body>
</html>