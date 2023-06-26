<?php
system("clear");

$fruits = ["a","b","c","d","e"];
$ff = ["1","2"];

$info = [
    "name" => "kyaw",
    "age" => 21,
    "address" => "Thanatpin"
];

// echo array_search("kyaw",$info);

$arr = array_splice($fruits,3,2,["aa","bb"]);

// print_r($arr);
// print(implode(" ",$fruits))

$json = file_get_contents("https://forex.cbm.gov.mm/api/latest");

$exchangeArr = json_decode($json,true);

$exchangeRates = $exchangeArr["rates"];

// print_r($exchangeRates["USD"]);

$productText = file_get_contents("https://fakestoreapi.com/products");
// echo $productText;
$products = json_decode($productText,true);
// print_r($products);

// array_map(function($product){
//     print(substr($product["title"],0,20)."\n");
// },$products)

// $totalPrice = array_reduce($products,fn($pv,$cv)=> $pv+$cv["price"],0);

// print($totalPrice);

// $weight =(int) 280.35;
// var_dump($weight);

// $arr =(object)[
//     "a"=>"a"
// ];
// var_dump($arr);
// echo $arr->a;

function add(int $x,int $y) :int{
    return $x+$y;
};

echo add(6,5);


?>
