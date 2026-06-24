<?php

function calculateTotal ($price1, $price2){
    return $price1 * $price2;
}

$total = calculateTotal(500,3);
echo "Total Price: " . $total;

?>