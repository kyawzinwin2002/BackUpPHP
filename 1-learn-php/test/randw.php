<?php
system("clear");

// echo file_get_contents("data.json");

// $file = fopen("data.json","r");
// $json = fread($file,filesize("data.json"));
// $fileName = "aa.txt";
// if(!is_file($fileName)){
//     touch($fileName);
// }

// $fopen = fopen($fileName,'w');
// fwrite($fopen,"Lee Pl Ma A loe lay");
// fwrite($fopen,"Lee Pl Ma A loe lay");
// fwrite($fopen,"Lee Pl Ma A loe lay");
// fwrite($fopen, "Lee Pl Ma A loe lay");
// fclose($fopen);


// copy("data.json","info.json");

$data = ["a" => "aaa","b" => "bbb","c"=> "ccc"];
$json = json_encode($data);

$fileName = "data.json";
$stream = fopen($fileName,"w");
fwrite($stream,$json);
fclose($stream);


// echo $json;