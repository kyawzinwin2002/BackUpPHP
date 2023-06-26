<?php
header("Content-type:Application/json");

$dir = "Photos";
if(!is_dir($dir)){
    mkdir($dir);
}

$response = [];
$baseUrl = "http://".$_SERVER["HTTP_HOST"] . "/";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(!empty($_FILES)){
        foreach ($_FILES["certificates"]["tmp_name"] as $key => $info) {
            $newFileName = $dir . "/" . uniqid() . time() . "-photo." . pathinfo($_FILES["certificates"]["name"][$key])["extension"];
            if(move_uploaded_file($info, $newFileName)){
                array_push($response,$baseUrl.$newFileName);
            }
        }
    }
}

//Response
echo json_encode($response);