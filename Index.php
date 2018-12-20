<?php
require 'functions.php';

if (oldEnough(15)) {
    echo 'you are old enough'; 
} 
else {
    echo 'you are not old enough';
}

echo '<pre>';
echo add(0, 8); 
echo '</pre>';

echo '<pre>';
echo multiply(1, 8);
echo '</pre>';

echo '<pre>';
echo subtract(16, 8);
echo '</pre>';

echo '<pre>';
echo divide(64, 8); 
echo '</pre>';

if (isEqual(110, 10)) {
    echo 'goed';
}
else {
    echo 'fout';
}

echo '<pre>';
echo sayHello('lars');
echo '</pre>';

echo '<pre>';
echo yourAdress('Hazepad 22');
echo '</pre>';

echo '<pre>';
echo yourCity('Soest');
echo '</pre>';

echo '<pre>';
echo yourTogether('Hazepad 22', 'Soest');
echo '</pre>';

echo '<pre>';
echo yourAge(18, 21);
echo '</pre>';

echo '<pre>';
if (yourAgeBoolean(21, 200)){
    echo 'Je mag erin.';
} else {
    echo 'Je mag er niet in.';
}
echo '</pre>';

echo '<pre>';
echo optellen(2, 4, 8);
echo '</pre>';

echo '<pre>';
echo berekenOppervlakte(3, 6);
echo '</pre>';

echo '<pre>';
echo berekenOppervlakteCirkel(2);
echo '</pre>';

echo '<pre>';
echo berekenOppervlakteDriehoek(2, 4);
echo '</pre>';

echo '<pre>';
if (equalNumber(5)) {
    echo 'even nummer';
} else {
    echo 'niet even nummer';
}
echo '</pre>';

echo '<pre>';
echo names('Lars', ' ', 'Tier');
echo '</pre>';

echo '<pre>';
echo names('Lars', 'Tier');
echo '</pre>';