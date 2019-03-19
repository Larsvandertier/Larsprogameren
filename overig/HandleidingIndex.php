<?php
echo 'Lars';

?><br><br><?php

$Home = 'Huis';
echo $Home;

?><br><br><?php

echo 'Het ', $Home;

?><br><br><?php
?><br><br><?php
?><strong><?='Php en html';?></strong><?php
?><br><br><?php

echo $_GET['name'];

?><br><br><?php

?><strong><?='PHP-logica van presentatie';?></strong><?php

// require "Handleiding.html";

?><br><br><?php
?><br><br><?php
?><strong><?='Arrays';?></strong><?php
?><br><br><?php


$Names = [
    'Lars',
    'Koen',
    'Liesbeth'
    ];
foreach ($Names as $Name) {
    echo $Name;
};

?><br><br><?php

foreach ($Names as $Name) {
    ?><li><?php echo $Name;?></li><?php
}

?><br><br>

<?php foreach ($Names as $Name) : ?>
<li><?=$Name;?></li>
<?php endforeach; ?>
    
<br><br><?php

// foreach ($Names as $Name) {
//     <li>$Name;</li>
//     }

?><br><br><?php

$Names[] = 'Jaap';

?><br><br><?php

foreach ($Names as $Name) {
    ?><li><?php echo $Name;?></li><?php
}


?><br><br><?php
?><br><br><?php
?><strong><?='Associative arrays';?></strong><?php
?><br><br><?php
$person = [
    'Naam:' => 'Lars',
    'Leeftijd:' => 18
    ];

// foreach ($names as $feature) : 
//     echo $feature;
// endforeach;
?><ul><?php
foreach ($person as $feature) : ?>
<li><?php echo $feature; 
endforeach;
?>
</ul>


<ul>

<?php foreach ($person as $feature => $value) : ?>
<li><?= $feature;?> <?= $value; ?></li>
<?php endforeach; ?>

</ul>
<?php

?><br><br><?php

$person['Kleur:'] = 'licht blauw';

?><br><br>
<ul>
<?php foreach ($person as $feature => $value) : ?>
<li><?= $feature;?> <?= $value; ?></li>
<?php endforeach; ?>
</ul>

<br><br><?php
var_dump($person);

?><br><br><?php
echo '<pre>';
var_dump($person);
echo '</pre>';

?><br><br><?php
// die(var_dump($person));

?><br><br>
<strong>Booleans</strong>

<?php
$task = [
    'Titel' => 'Huiswerk afmaken',
    'Waneer' => 'Vandaag',
    'Wie gaat het doen' => 'Lars',
    'Voltooid' => true
    ];

?>
<ul>
<li><strong>Titel: </strong><?= $task['Titel']; ?></li>
<li><strong>Waneer: </strong><?= $task['Waneer']; ?></li>
<li><strong>Wie: </strong><?= $task['Wie gaat het doen']; ?></li>
<li><strong>Voltooid: </strong><?= $task['Voltooid'] ? 'klaar' : 'nog niet klaar'; ?></li>
</ul>

<br><br>
<strong>Conditionals</strong>

<br><br><?php
if ($task['Voltooid']) {
    echo 'klaar';
    } else {
    echo 'niet klaar';
    }

?><br><br><?php
if ($task['Voltooid']) {
    echo '&#9989;';
    } else {
    echo 'niet klaar';
    }

?><br><br>
<?php if ($task['Voltooid']) : ?>
<span>klaar</span>
<?php else : ?>
<span>niet klaar</span>
<?php endif; ?>

<br><br><?php
if (! $task['Voltooid']) {
echo 'Met uitroepteken';
}

?><br><br><?php
if ($task['Voltooid']) {
echo 'zonder uitroepteken';
}

?><br><br>
<strong>Functions</strong>

<br><br><?php
function dumper($een, $twee, $drie) {
    var_dump($een, $twee, $drie);
}

dumper('Hoi ik', 'ben', 'Lars');