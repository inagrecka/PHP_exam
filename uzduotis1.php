<?php
/*
1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
*/
   $numbers = [
       15,
       55,
       66,
       91,
       100,
       995,
       17,
       550,
   ];

function task1(array $num):int {
    $sum = 0;
    foreach ($num as $value) {
        if ($value % 2 === 0) {
            $sum += $value;
        }
    }
    return $sum;
}
var_dump(task1($numbers));
