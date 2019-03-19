<!DOCTYPE html>
<html lang="nl">
<head>
    <title>phpHerhaling.php</title>
    <style>
        body{
            background-color: cadetblue;
        }
    </style>
</head>
<body>
<title>Herhaling php</title>
<?php
//_______________________________________________________________________________________
echo "<h1>Syntax</h1>"
//------------------------------------------------
?><h4>My firt php page?</h4>

<?='Hello World!';

/*
hallo wereld!
*/

// hallo wereld!
// Hallo Wereld!

?><br><?php

echo 5 + 5 /* = 10 */;

?><br><br><?php
echo "hello world<br>";
echo "hello world<br>";

$color = "red";
echo "my car is " . $color;

//_______________________________________________________________________________________
echo "<hr><h1>Variables</h1>";
//------------------------------------------------
$txt = 'big car';
$x = 5;
$y = 10.5;

echo "I want a $txt!<br>";
echo 'I want a $txt!<br>';/*dubbele quotes zijn nodig!*/
echo "I want a " . $txt . "!<br>";

echo "$y" * "$x" . "<br>";
echo "$x" - "$x" . "<br>";
echo "$y" + "$x" . "<br>";
echo "$x" / "$x" . "<br>";

//function myTest(){
//    $x = 5;//local scope
//    echo "<p>Variable x inside function is: $x</p>";
//}

$x = 5;
$y = 19;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y;

//function myTest(){
//    static $x = 0;
//    echo $x;
//    $x++;
//}
//
//myTest();

//_______________________________________________________________________________________
echo "<hr><h1>Echo / Print</h1>";
//------------------------------------------------
echo "<h4>php is FUM!</h4>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn php";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;


echo "<h4>" . $txt1 . "</h4>";
echo "Study php at " . "$txt2" . "<br>";
echo $txt1 . " at " . $y * 3  . " hour";

print "<br><h4>PHP is Fun!</h4>";
print "Hello world!<br>";
print "<br>I'm about to learn PHP!";


print "Study php at " . "$txt2" . "<br>";
print $txt1 . " at " . $y * 3  . " hour";

//_______________________________________________________________________________________
echo "<hr><h1>Data Types</h1>";
//------------------------------------------------
$a = 'Enkele quotes!';
$b = "Dubbele quotes";

echo $a;
echo "<br>";
echo $b;
echo "<br>";

$c = 5985;
var_dump($c);

echo "<br>";

$C = 10.365;
var_dump($C);

echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";

class Car {
    function Car(){
        $this->model = "VW";
    }
}

//create an object
$herbie = new Car();

//show object properties
echo $herbie->model;

echo "<br>";

$d = "Hallo wereld: en Lars.";
$d = null;
var_dump($d);

//_______________________________________________________________________________________
echo "<hr><h1>Strings</h1>";
//------------------------------------------------

echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Ik ga vandaag naar de winkel.");
echo "<br>";
echo strrev("Ik ga vandaag naar de winkel.");
echo "<br>";
echo strpos("Ik ga vandaag naar de winkel.", "Ik");
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");

//_______________________________________________________________________________________
echo "<hr><h1>Constants</h1>";
//------------------------------------------------

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
echo "<br>";


function myTest2() {
    echo GREETING;
}
myTest2();

//_______________________________________________________________________________________
echo "<hr><h1>Operators</h1>";
//------------------------------------------------
$w = 10;
$z = 5;
$q = 8;
$y = 3;

//----------------------------------
echo "<h2>Arithmetic Operators</h2>";
echo $w + $q;
echo "<br>";
echo $w - $q;
echo "<br>";
echo $w * $q;
echo "<br>";
echo $w / $z;
echo "<br>";
echo $w % $y;

//----------------------------------
echo "<h2>Assignment Operators</h2>";
echo $g = 10;
echo "<br>";

echo $g += 30;
echo "<br>";

echo $g -= 5;
echo "<br>";

echo $g *= 2;
echo "<br>";

echo $g /= 4;
echo "<br>";
echo $g %= 2;

//----------------------------------
echo "<h2>Assignment Operators</h2>";
echo "<ol><li>";
$P = 100;
$I = "100";
var_dump($P == $I);
echo "<br></li><li>";

var_dump($P === $I);
echo "<br>";
var_dump($P === $P);
echo "<br></li><li>";

var_dump($P != $I);
echo "<br>";
var_dump($P <> $I);
echo "<br></li><li>";

var_dump($P !== $I);
echo "<br></li><li>";

var_dump($P > $I);
echo "<br></li><li>";

var_dump($P < $I);
echo "<br></li><li>";

var_dump($P >= $I);
echo "<br></li><li>";

var_dump($P <= $I);
echo "</li></ol>";

//----------------------------------
echo "<h2>Increment / Decrement Operators</h2>";

$R = 10;
echo ++$R;
echo "<br>";

echo $R++;
echo "<br>";

echo --$R;
echo "<br>";

echo $R--;

//----------------------------------
echo "<h2>Logical Operators</h2>";

$M = 20;
$N = 30;
if ($M == 20 and $N == 30){
    echo "It's ok.<br>";
} else {
    echo "It is not ok.<br>";
}
if ($M == 20 && $N == 30){
    echo "It's ok.<br>";
} else {
    echo "It is not ok.<br>";
}

if ($M == 20 or $N == 30){
    echo "It's ok.<br>";
} else {
    echo "It is not ok.<br>";
}
if ($M == 20 || $N == 30){
    echo "It's ok.<br>";
} else {
    echo "It is not ok.<br>";
}

if (!$M == 20 xor $N == 30){
    echo "It's ok.<br>";
} else {
    echo "It is not ok.<br>";
}

//----------------------------------
echo "<h2>String Operators</h2>";

$txt3 = 'lopen';
$txt4 = 'Lars ';
$txt5 = 'gaat ';
echo $txt5 . ' ' . $txt4 . ' ' . $txt3 . '?';
echo "<br>";

$txt4 .= $txt5 .= $txt3;
echo $txt4;

//----------------------------------
echo "<h2>Array Operators</h2>";
$V = array("a" => "green", "Huis", "d" => "opperdetop");
$S = array("g" => "orange", "gebouw", "g" => "ouiuhj");
print_r($V + $S);
echo "<br>";
var_dump($V == $S);
echo "<br>";
var_dump($V === $S);
echo "<br>";
var_dump($S != $V);
echo "<br>";
var_dump($V <> $V);
echo "<br>";
var_dump($V !== $S);

//_______________________________________________________________________________________
echo "<hr><h1>If...Else...Elseif</h1>";
//------------------------------------------------
$t = date("H");
if ($t < "20"){
    echo 'Have a good day!';
}
echo "<br>";
if ($t < "20"){
    echo 'Have a good day!';
} else {
    echo 'Have a good night!';
}
echo "<br>";
if ($t < "12") {
    echo 'Have a good morning!';
} elseif ($t < "20"){
    echo 'Have a good day!';
} else {
    echo 'Have a good day';
}

//_______________________________________________________________________________________
echo "<hr><h1>Switch</h1>";
//------------------------------------------------
$favcolor = 'bleu';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    default:
        echo 'Your favorite color is neither red, blue, nor green!';
}

//_______________________________________________________________________________________
echo "<hr><h1>While Loops</h1>";
//------------------------------------------------
$l = 6;
//while ($l <= 5) {
//    echo "The number is: $l <br>";
//    $l++;
//}
echo "<br>";
do {
    echo "The number is: $l <br>";
    $l++;
} while ($l <= 5);

//_______________________________________________________________________________________
echo "<hr><h1>For Loops</h1>";
//------------------------------------------------
for ($i = 0;$i <= 10;$i++){
    echo "The number is: $i <br>";
}

echo "<br>";
$colors = array('Groen', 'Rood', 'Blauw', 'Geel');

foreach ($colors as $value){
    echo "$value <br>";
}

//_______________________________________________________________________________________
echo "<hr><h1>Functions</h1>";
//------------------------------------------------
function writeMsg(){
    echo 'Dit is een function.';
}
writeMsg();

echo "<br>";
echo "<br>";
function familyName($fname){
    echo "$fname Refsnes.<br>";
}

familyName('Jani');
familyName('Hege');
familyName('Stale');
familyName('Kai Jim');
familyName('Borge');

echo "<br>";
function familyDate($frontName, $bornYear){
    echo "$frontName Refnes. Born in $bornYear. <br>";
}

familyDate('Hege', '1975');
familyDate('Stale', '1978');
familyDate('Kai Jim', '1983');

echo "<br>";
function setHeight($minheight = 50){
    echo "The height is : $minheight. <br>";
}

setHeight(300);
setHeight(20);
setHeight();

echo "<br>";
function Som($b, $e)
{
    $F = $b + $e;
    return $F;
}

echo "10 + 3 = ". Som(10,3). "<br>";
echo "0 + 0 = ". Som(0,35678). "<br>";

//_______________________________________________________________________________________
echo "<hr><h1>Arrays</h1>";
//------------------------------------------------
$auto = array('Volvo', 'BMW', 'Toyota');
echo 'I like ' . $auto[2] . ', ' . $auto[1] . ' and ' . $auto[0] . '.';

echo "<br>";
echo count($auto);

echo "<br>";
$autoLengte = count($auto);

for ($X = 0; $X < $autoLengte; $X++){
        echo $auto[$X];
        echo "<br>";
}

echo "<br>";
$age = array(
    'Pete' => 35,
    'Ben' => 37,
    'Joe' => 43
);
echo "Pete is " . $age['Pete'] . " years old." . "<br>";
echo "Ben is " . $age['Ben'] . " years old." . "<br>";
echo "Joe is " . $age['Joe'] . " years old." . "<br>";

echo "<br>";
$age2 = array(
    'Petty' => 50,
    'Bennie' => 16,
    'Joey' => 92
);
foreach ($age2 as $g => $g_value) {
    echo "Key=" . $g . ", Value=" . $g_value . "<br>";
}

echo "<br>";
foreach ($age2 as $g => $g_value) {
    echo $g . " is " . $g_value . " jaar oud." . "<br>";
}

//_______________________________________________________________________________________
echo "<hr><h1>Sorting Arrays</h1>";
//------------------------------------------------
$auto = array('Volvo', 'BMW', 'Toyota');
sort($auto);

$autoLengte = count($auto);

for ($X = 0; $X < $autoLengte; $X++) {
    echo $auto[$X];
    echo "<br>";
}

echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrLengte = count($numbers);
for ($X = 0; $X < $arrLengte; $X++) {
    echo $numbers[$X];
    echo "<br>";
}



echo "<br>";
$auto = array('Volvo', 'BMW', 'Toyota');
rsort($auto);

$autoLengte = count($auto);

for ($X = 0; $X < $autoLengte; $X++) {
    echo $auto[$X];
    echo "<br>";
}

echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrLengte = count($numbers);
for ($X = 0; $X < $arrLengte; $X++) {
    echo $numbers[$X];
    echo "<br>";
}




echo "<br>";
$age = array('Petey' => 35, 'Bennie' => 37, 'Daan' => 43);
asort($age);

foreach ($age as $A => $A_value){
    echo $A . ' is ' . $A_value . ' jaar oud.';
    echo "<br>";
}

echo "<br>";
$age = array('Petey' => 35, 'Bennie' => 37, 'Daan' => 43);
arsort($age);

foreach ($age as $A => $A_value){
    echo $A . ' is ' . $A_value . ' jaar oud.';
    echo "<br>";
}

echo "<br>";
$age = array('Petey' => 35, 'Bennie' => 37, 'Daan' => 43);
ksort($age);

foreach ($age as $A => $A_value){
    echo $A . ' is ' . $A_value . ' jaar oud.';
    echo "<br>";
}

echo "<br>";
$age = array('Petey' => 35, 'Bennie' => 37, 'Daan' => 43);
krsort($age);

foreach ($age as $A => $A_value){
    echo $A . ' is ' . $A_value . ' jaar oud.';
    echo "<br>";
}

//_______________________________________________________________________________________
echo "<hr><h1>Superglobals</h1>";
//------------------------------------------------
$x = 75;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>"
;echo $_SERVER['SERVER_NAME'];
echo "<br>"
;echo $_SERVER['HTTP_ACCEPT'];
echo "<br>"
;echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];


echo "<br>";
echo "<br>";


?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo 'Name is empty';
    } else {
        echo $name;
    }
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo 'Name is empty';
    } else {
        echo $name;
    }
}
?>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

//_______________________________________________________________________________________
echo "<hr><h1>Form Handling</h1>";
//------------------------------------------------
?>
<form action="welcome.php" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php

//_______________________________________________________________________________________
echo "<hr><h1>Form Validation</h1>";
//------------------------------------------------
$name = $email = $gender = $comment = $website = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $gender = test_input($_POST['gender']);
    $comment = test_input($_POST['comment']);
    $website = test_input($_POST['website']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return ($data);
}
?>

<h4>PHP Form Validation</h4>
<form method="post" action="<?php echo
htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" cols="1" rows="1"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="Other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h4>Your input</h4>";















?>
</body>
</html>