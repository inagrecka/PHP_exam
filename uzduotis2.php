<?php
/*
2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
*/
$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];
function task2(array $arr):int {
    $newArr = array();
    foreach (array(0, 1, 2) as $a) {
        $newArr[$a] = array_product(array_column($arr, $a));
    }
    return array_product($newArr);
}
var_dump(task2($numbers));
