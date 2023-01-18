<?php
/*
2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
*/
$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12, 0, 0],

];
//echo $numbers[1][1];
//die();

function task2(array $arr):int {
    for ($i = 0; $i < sizeof($arr,0); $i++) {
        for ($j = 0; $j < sizeof($arr, 1); $j++) {
//            if (!in_array($arr[$i],$arr) || !in_array($arr[$i][$j],$arr)) {
//                $arr[$i] = 1;
//                $arr[][$j] = 1;
//            }
            echo $arr[$i][$j];
        }
    }
//    $multi = 1;
//    foreach ($arr as $item) {
//        $multi *= $item;
//        if ($item !== []) {
//            $multi *= $item;
//        } else {
//            $item = 1;
//        }
//    }
    return 0;
}
var_dump(task2($numbers));
