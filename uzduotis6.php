<?php
/*
 * 6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų
 * ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas
 * yra paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
 */

function task6() {
    do {
        $numA = readline('Įveskite 1-a skaičių: ');
        if (is_numeric($numA)) {
            continue;
        } else {
            echo 'Įvestas ne skaičius. Įveskite skaičių: '.PHP_EOL;
        }
    } while (!is_numeric($numA));

    do {
        $numB = readline('Įveskite 2-a skaičių: ');
        if (is_numeric($numB)) {
            continue;
        } else {
            echo 'Įvestas ne skaičius. Įveskite skaičių: '.PHP_EOL;
        }
    } while (!is_numeric($numB));

    $result = pow(($numA*$numB), 2);
    echo 'Skaičiaus '.$numA.' ir '.$numB.' sandauga kvadratu: '.$result;
}
task6();
