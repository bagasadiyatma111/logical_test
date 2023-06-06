<?php
function pembagianBulat($dividend, $divisor) {
    
    $quotient = 0;

    
    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $quotient++;
    }

    return $quotient;
}

$hasil1 = pembagianBulat(7, 2); 
$hasil2 = pembagianBulat(8, 4); 

echo $hasil1 . "\n";
echo $hasil2 . "\n";
?>