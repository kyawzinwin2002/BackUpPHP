<?php

$friends = [];
$fileName = "friList.json";
if(file_exists($fileName) && filesize($fileName)){
    $friends = json_decode(file_get_contents($fileName,true));
}

if($_SERVER["REQUEST_METHOD"] === "POST"){

    //Move Photo File
    $folderName = "fri-zone";
    $newFileName = uniqid().time()."-"."friend".".".pathinfo($_FILES["friPhoto"]["name"])["extension"];
    move_uploaded_file($_FILES["friPhoto"]["tmp_name"],$folderName."/".$newFileName);

    //Creating new file structure
    $info = $_POST;
    $info["photo"] = $folderName."/".$newFileName;
    array_push($friends,$info);
    $json = json_encode($friends);

    //Write in the file;
    $stream = fopen($fileName,'w');
    fwrite($stream,$json);
    fclose($stream);

    

}