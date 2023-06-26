<?php 

$folderName = "ExchangeRec";
$fileName = "exRecord.txt";

$arr = file($folderName."/".$fileName);
array_splice($arr,$_GET["id"],1);

$text = implode("",$arr);

$stream = fopen($folderName."/".$fileName,"w");
fwrite($stream,$text);
fclose($stream);



header("Location:ex-calc.php");

