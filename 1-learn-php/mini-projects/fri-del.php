<?php

$friends = [];
$fileName = "friList.json";
if (file_exists($fileName) && filesize($fileName)) {
    $friends = json_decode(file_get_contents($fileName, true));
}

array_splice($friends,$_GET["id"],1);
$json = json_encode($friends);

file_put_contents($fileName,$json);

header("Location:fri-cards.php");