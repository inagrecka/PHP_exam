<?php
/*
3.    Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
      Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)

      Destination "Paris".
      Titles: "Romantic Paris", "Hidden Paris"
      Total: 99500
      ************
      Destination "New York"
      ...
*/

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydey',
           'destination' => 'Sydey',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];
   function task3(array $arr):void {
       $newArr = array();
       foreach ($arr as $item) {
           if (array_key_exists($item['destination'], $newArr)) {
               $newArr[$item['destination']]['destination'] = $item['destination'];
//               $newArr[$item['destination']]['title'] = $item['title'];
               $newArr[$item['destination']]['title'] = implode(', ',array_column($newArr, 'title')); // cia neisspresta!!!
               $newArr[$item['destination']]['price'] += $item['price'];
               $newArr[$item['destination']]['tourists'] += $item['tourists'];
               $newArr[$item['destination']]['total'] = ($newArr[$item['destination']]['total']) + ($item['price']*$item['tourists']);
           } else {
               $newArr[$item['destination']] = $item;
               $newArr[$item['destination']]['total'] = ($item['price']*$item['tourists']);
           }
       }
//       var_dump($newArr);

       foreach ($newArr as $value) {
           if ($value['total'] > 0) {
               echo 'Destination: "'.$value['destination'].'".'.PHP_EOL;
               echo 'Titles: "'.$value['title'].'".'.PHP_EOL;
               echo 'Total: "'.$value['total'].'".'.PHP_EOL;
               echo '***********************'.PHP_EOL;
           }
       }
   }
   task3($holidays);
