<?php

$areaRecords = [];
$fileName = "areaRecord.json";
if(file_exists($fileName) && filesize($fileName)){
    $areaRecords = json_decode(file_get_contents("areaRecord.json"), true);
}

array_splice($areaRecords,$_GET["id"],1);
file_put_contents($fileName,json_encode($areaRecords));

header("Location:area-calc.php");
// print_r($areaRecords);