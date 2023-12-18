<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Runner</title>
</head>
<body>
    <div class="PRHeadDiv">

    </div>
    <div class="PRBodyDiv">
        <?php
            $python = shell_exec("python PY/HelloWorld.py");
            echo $python;
        ?>
    </div>    
    <div class="PRTailDiv">

    </div>
</body>
</html>