<?php

require_once("globals.php");

function url(string $path = null):string
{
    $url  = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url .= "/";
        $url .= $path;
    }
    return $url;
};

function response(mixed $data,int $status = 200):string
{
    header("Content-type:Application/json");
    http_response_code($status);
    if(is_array($data)){
        return json_encode($data);
    }
    return json_encode(["message" => $data]);
};

function area(float $width,float $breadth):float
{
    return $width * $breadth;
};

function logger(string $message,int $colorCode = 32):void
{
    echo "\e[{$colorCode}m".$message."\n";
};

function extension($fileName):string
{
    return pathinfo($fileName)["extension"];
};

function randomFileName($ext):string
{
    return md5(uniqid()) . "." . $ext;
};

function upload($key,$dir):string
{
    $extension = extension($_FILES[$key]["name"]);
    $newFileName = $dir . "/" . randomFileName($extension);
    move_uploaded_file($_FILES[$key]["tmp_name"],$newFileName);

    return $newFileName;
};

function saveJsonFile(string $text):void
{
    $newFileName = RECORD_DIR."/". randomFileName("json");
    $file = fopen($newFileName, "w");
    fwrite($file, $text);
    fclose($file);
};

function scannedFiles($dir):array
{
    $file = scandir($dir);
    $r = [];
    
}