<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$array = [];

while (count($array) < 15) {
    $random = rand(1, 100);
    if (!in_array($random, $array)) {
        $array[] = $random;
    }
}
var_dump($array);

?>