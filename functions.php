<?php


function oldEnough($age) {
    if ($age>21) {
        return true;
    }
    else {
        return false;
    }
}


function add($valueOne, $valueTwo) {
    return $valueOne + $valueTwo;
}

function multiply($valueThree, $valueFour) {
    return $valueThree * $valueFour;
}

function subtract($valueFive, $valueSix) {
    return $valueFive - $valueSix;
}

function divide($valueSeven, $valueEight) {
    return $valueSeven / $valueEight;
}

function isEqual($valueNine, $valueTen) {
    if ($valueNine == $valueTen) {
        return true;
    } else {
        return false;
    }
}

function sayHello($name) {
    return 'hallo'. $name;
}

function yourAdress($adress) {
    return 'U woont op '. $adress;
}

function yourCity($city) {
    return 'U woont in '. $city;
}

function yourTogether($adress, $city) {
    return 'Uw adres is '. $adress. ' '. $city;
}

function yourAge($ageOne, $ageTwo) {
    if ($ageOne >= $ageTwo) {
        return 'Je mag erin.';
    } else {
        return 'Je mag er niet in';
    }
}

function yourAgeBoolean($ageOne, $ageTwo) {
    if ($ageOne >= $ageTwo) {
        return true;
    } else {
        return false;
    }
}

function optellen($numberOne, $numberTwo, $numberThree) {
    return $numberOne + $numberTwo + $numberThree;
}

function berekenOppervlakte($length, $breedte) {
    return 'De oppervlakte van deze rechthoek is: '. $length * $breedte;
}

function berekenOppervlakteCirkel($straal) {
    return $straal * $straal * pi();
}

function berekenOppervlakteDriehoek($basis, $hoogte) {
    return $basis * $hoogte / 2;
}

function equalNumber($numberOne) {
    if ($numberOne % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

function names($firstName, $insertion, $lastName) {
    if ($insertion == ' ') {
        return $firstName. ' '. $lastName;
    } else {
        return $firstName. ' '. $insertion. ' '. $lastName;
    } 
}

function salutation($geslacht, $achternaam) {
    if ($geslacht = 'vrouw') {
        return 'Geachte'. 'mevrouw'. $achternaam;
    }   
    else ($geslacht = 'man') {
        return 'Geachte heer'. $achternaam;
    }
}