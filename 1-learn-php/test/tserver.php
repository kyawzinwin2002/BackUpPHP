<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<pre>";
    print_r($_FILES);

    $folderName = "photos";
    $fileName = uniqid().$_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],$folderName."/".$fileName);
}