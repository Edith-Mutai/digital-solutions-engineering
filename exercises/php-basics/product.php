<?php

$product = [
    "name" => "Laptop",
    "price" => 75000,
    "brand" => "HP",
    "stock" => 12
];

foreach ($product as $key => $value){
    echo $key . ": " . $value . PHP_EOL;
}

?>