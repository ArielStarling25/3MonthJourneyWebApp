<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/ProgramRunner.css" />
    <title>Program Runner</title>
</head>
<body>
    <div class="PRHeadDiv">
        <div>
            <h1>
                Program Runner
            </h1>
        </div>
    </div>
    <div class="PRBodyDiv">
        <p>
            <?php
                $python = shell_exec("python PY/HelloWorld.py");
                echo $python;
            ?>
        </p>
    </div>    
    <div class="PRTailDiv">

    </div>
</body>
</html>