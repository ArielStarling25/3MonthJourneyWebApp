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
        //Directory for python files
        $dir = 'Uploads/Python';
        $files = scandir($dir);
        $jsonData = json_encode($files);
        $decodedArray = json_decode($jsonData);
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
                        $python = shell_exec("python Uploads/Python/HelloWorld.py");
                        $formattedOutput = str_replace("\n", "<br>", $python);
                        echo $formattedOutput;
                    ?>
                </p>
            </div>
            <div class="PyList">
                <ol>
                    <form id='programSub' method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                    <?php 
                        foreach($decodedArray as $file){
                            if($file == "." || $file == ".."){
                                //omit the empty strings, only include the named files
                            }
                            else{
                                echo "<li>
                                        <button value='$file'>
                                            $file
                                        </button>
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