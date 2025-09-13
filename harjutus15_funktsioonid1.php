<?php
/**
 * ÜLESANNE 1: Numbrite töötlemine
 * Loo funktsioon processNumbers($numbers, $callback), mis:
 * - Võtab vastu numbrite massiivi ja callback funktsiooni
 * - Rakendab callback'i igale numbrile
 * - Tagastab uue massiivi
 * 
 * Loo ka callback funktsioonid:
 * - double($num) - korrutab 2-ga
 * - square($num) - ruut
 */

function processNumbers($numbers, $callback) {
    $result = [];

    foreach ($numbers as $num) {
        $result[] = $callback($num); // callback rakendub igale numbrile
    }

    return $result;

}

function doubled($num) {
    return $num * 2;
}

function squared($num) {
    return $num ** 2;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "Doubled numbers:\n";
print_r(processNumbers($numbers, 'doubled'));

echo "\nSquared numbers:\n";  
print_r(processNumbers($numbers, 'squared'));