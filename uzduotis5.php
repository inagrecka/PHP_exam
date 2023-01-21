<?php
/*
 * 5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)
 */
function task5() {
    $tasks = 'tasks.txt';
    $contentsTask = file_get_contents($tasks);
    $arr = explode(PHP_EOL, $contentsTask);
    $newArr = [];
    foreach ($arr as $tasklLine) {
        $task = explode('-', $tasklLine);
        $newArr['Darbas '.$task[0]] = $task[1];
    }
    var_dump($newArr);
}
task5();
