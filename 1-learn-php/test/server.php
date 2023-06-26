<?php

print_r($_POST);

$folderName = "datas";
$fileName = $_POST["fileName"];
$fileExtension = $_POST["fileExt"];

if(!is_dir($folderName)){
    mkdir($folderName);
}

if(!is_file($fileName.$fileExtension)){
    touch($folderName."/".$fileName.$fileExtension);
}

header("Location:index.php");
