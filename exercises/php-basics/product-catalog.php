<?php

$products = [
    [
        "name" => "Laptop",
        "price" => 75000
    ],
    [
        "name" => "Phone",
        "price" => 25000
    ],
    [
        "name" => "Headphones",
        "price" => 5000
    ]
];

foreach ($products as $product) {
    echo "Product: " . $product["name"] . PHP_EOL;
    echo "Price: KES " . $product["price"] . PHP_EOL;
    echo "----------------" . PHP_EOL;
}

?>