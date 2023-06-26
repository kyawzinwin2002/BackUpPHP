<?php

$exchangeText = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$exchange = json_decode($exchangeText,true);
$exchangeRates = $exchange["rates"];
// print_r($exchangeRates);

if(isset($_POST["submit"])):
    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $mmk = $amount * str_replace(",","", $exchangeRates[$from]);
    $result = $mmk / str_replace(",","", $exchangeRates[$to]);

    //Records
    $folderName = "ExchangeRec";
    $fileName = "exRecord.txt";
    $record = "From"." ".$amount.$from." "."to"." ". round($result, 2).$to."\n";
    if(!is_dir($folderName)){
        mkdir($folderName);
    }
    $stream = fopen($folderName."/".$fileName,"a");
    fwrite($stream,$record);
    fclose($stream);

//    print_r(file($folderName."/".$fileName));
?>

<div class=" p-3 border-3">
    <p>From <?= $amount ?><?= $from ?> to <?= $to ?></p>
    <h3><?=round($result,2) ?> <?= $to ?></h3>
</div>

<?php endif; ?>