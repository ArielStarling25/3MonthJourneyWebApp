<?php

$target_dir = "Uploads/";
$uploadOk = 1;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$isMedia = false;

//Choose upload section depending on if it is a python file
if($fileType == "py"){
    $target_dir = $target_dir . "Python/";
}
else{
    $target_dir = $target_dir . "Media/";
    $isMedia = true;
}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) { //5MB
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($isMedia){
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
}
else{
    if($fileType != "py"){
        echo "Sorry, invalid python file.";
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    consoleLog("The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}