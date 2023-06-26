<?php
$friends = [];
$fileName = "friList.json";
if (file_exists($fileName) && filesize($fileName)) {
    $friends = json_decode(file_get_contents($fileName), true);
}

$showDetail = $friends[$_GET["id"]];
print_r($showDetail);