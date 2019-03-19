<?php
?>
<title>Gemaakte opdrachten</title>
<h1>Gemaakte (les-)opdrachten</h1>
<?php
// echo "hello, " . $_GET['name'];



// $task = [
//     'Titel' => 'Huiswerk afmaken',
//     'Wanneer' => 'Vandaag',
//     'Wie gaat het doen' => 'Lars',
//     'Voltooid' => true
//     ];
// ?>


<!-- <?= ucwords('Hallo ik ben lars'); ?> -->


<!-- <strong>Titel: </strong> <?= $task ['Titel']; ?><br>
<strong>Wanneer: </strong> <?= $task ['Wanneer']; ?><br>
<strong>Wie: </strong> <?= $task ['Wie gaat het doen']; ?><br>
<strong>Voltooid: </strong> -->
<?php
// if ($task['Voltooid']) {
//     echo 'Het is klaar';
// } else {
//     echo 'Het is niet klaar';
// }


// if (! $task['Voltooid']) {
//     echo 'niet klaar';
// }


?>
<!-- <ul>
    <?php foreach ($task as $feature => $value) : ?>
    <li>
        <strong><?= $feature; ?>: </strong> <?= $value; ?>
    </li>
    <?php endforeach; ?>
</ul> -->


<?php
// echo die;

// $person = [
//     'lars',
//     'koen'
// ];

// var_dump($person);


// $person = [
//     'name' => 'Lars',
//     'age' => 18
// ];
// ?>


<!-- <ul>
    
<?php foreach ($person as $feature => $value) : ?>
    <li><?= $feature; ?> <?= $value; ?></li>
<?php endforeach; ?>

</ul> -->


<!-- <ul>
<?php foreach ($names as $name) : ?>
    <li><?=$name;?><li>
<?php endforeach; ?>


<?php


foreach ($names as $name) {
    echo "<li>$name</li>";
}
?>
</ul> -->

<?php
// function club($age){
//     if ($age=21);{
//         return 'Je kan erin'
//     } 
//     else {

//     }
// }


// for ($i=1;$i<50;$i++){
//     echo club($i);
// }


//$task = [
    //'title' => 'make homework',
    //'due' => 'tomorrow',
    //'assigned_to' => 'lars',
    //'completed' => true
//];
?>
<hr>
<h4>Class: Task</h4>
<?php
//______________________________________________________________________________________________________________________
class Task {
    public $description;

    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room'),
    new Task('lunchen')
];


$tasks[1]->complete();
$tasks[3]->complete();

//----------------------------------------------------------------------------------------------------------------------
    //----------------zat in Les_Opdrachten_view.php--------------------------------------------------------------------
?>
    <ul>
        <?php foreach ($tasks as $task) : ?>
        <?php if ($task->isComplete()) : ?>
            <li><strike><?= $task->description; ?></strike></li>
            <?php else : ?>
            <li><?= $task->description; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

<hr>
<h4>Class: Deelnemer</h4>
<?php
//______________________________________________________________________________________________________________________
class Deelnemer {
protected $name;
protected $age;
protected $isPresent;

public function __construct($name, $age, $isPresent)
{
$this->name = $name;
$this->age = $age;
$this->isPresent = $isPresent;
}

public function isAanwezig(){
return $this->isPresent;
}

public function getAge(){
return $this->age;
}

public function getName(){
return $this->name;
}

public function pasLeeftijdAan(){
$this->age++;
}
}

$deelnemers = [
new Deelnemer('Lars', 18, true),
new Deelnemer('Esmae', 20, true),
new Deelnemer('Jermy', 20, true),
new Deelnemer('Micheal', 21, false)
];

$deelnemers[0]->pasLeeftijdAan();
$deelnemers[2]->pasLeeftijdAan();

//----------------------------------------------------------------------------------------------------------------------
//----------------zat in Les_Opdrachten_view.php------------------------------------------------------------------------
?>
    <ul>
        <?php foreach ($deelnemers as $deelnemer) : ?>
        <?php if ($deelnemer->isAanwezig()) : ?>
            <li><Strong><?= $deelnemer->getName(); ?>
            <?= $deelnemer->getAge(); ?></Strong></li>
            <?php else : ?>
            <li><?= $deelnemer->getName(); ?>
            <?= $deelnemer->getAge(); ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

<hr>
<h4>Class: Fruit</h4>
<?php
//______________________________________________________________________________________________________________________
class Fruit
{
protected $soort;
protected $lekker;

public function __construct($soort, $lekker)
{
$this->lekker = $lekker;
$this->soort = $soort;
}

public function getSoort(){
return $this->soort;
}
public function getLekker(){
return $this->lekker;
}
public function maakVies()
{
$this->lekker = false;
}
}

$Fruitsoorten = [
new Fruit('meloen', true),
new Fruit('appel', false),
new Fruit('peer', true),
new Fruit('aardbei', true)
];

$Fruitsoorten[0]->maakVies();

//----------------------------------------------------------------------------------------------------------------------
//----------------zat in Les_Opdrachten_view.php------------------------------------------------------------------------
?>
    <ul>
        <?php foreach ($Fruitsoorten as $Fruit) : ?>
        <?php if ($Fruit->getLekker()) : ?>
            <li><?= $Fruit->getSoort(); ?></li>
        <?php else : ?>
            <li><?= $Fruit->getSoort(); ?>
            <?= 'Niet lekker'?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <hr>
    <h4>Class: Spelletjes</h4>
<?php
//______________________________________________________________________________________________________________________
class Spel
{
    protected $spel;
    protected $nodig;

    public function __construct($spel, $nodig)
    {
        $this->spel = $spel;
        $this->nodig = $nodig;
    }

    public function getSpel()
    {
        return $this->spel;
    }
    public function getNodig(){
        return $this->nodig;
    }
    public function pasSpelAan($nieuweSpel){
        $this->spel = $nieuweSpel;
    }
    public function pasNodigAan($nieuweNodig){
        $this->nodig = $nieuweNodig;
    }
}

$Spelletjes = [
    new Spel('pesten:', 'kaarten'),
    new Spel('boterKaasEieren:', 'papierEnEenPotlood'),
    new Spel('kwartet:', 'kaartejesEnEenPotlood')
];

$Spelletjes[0]->pasSpelAan('Pesten:');
$Spelletjes[1]->pasSpelAan('Boter, kaas en eieren:');
$Spelletjes[2]->pasSpelAan('Kwartet:');

$Spelletjes[0]->pasNodigAan('Kaarten');
$Spelletjes[1]->pasNodigAan('Papier en een potlood');
$Spelletjes[2]->pasNodigAan('Papier, potlood en een schaar');

//----------------------------------------------------------------------------------------------------------------------
//----------------zat in Les_Opdrachten_view.php------------------------------------------------------------------------
?>
    <ul>
        <?php foreach ($Spelletjes as $Spel) : ?>
            <li><?= $Spel->getSpel(); ?>
            <?= $Spel->getNodig(); ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>
    <h4>Class: Product</h4>
<?php
//______________________________________________________________________________________________________________________
class Product
{
    protected $naamProduct;
    protected $prijs;
    protected $opVoorraad;

    public function __construct($naamProduct, $prijs, $opVoorraad)
    {
        $this->naamProduct = $naamProduct;
        $this->prijs = $prijs;
        $this->opVoorraad = $opVoorraad;
    }

    public function getNaamProduct(){
        return $this->naamProduct;
    }
    public function getPrijs(){
        return $this->prijs;
    }
    public function getOpVoorraad()
    {
        return $this->opVoorraad;
    }
    public function pasNaamProductAan($nieuweNaam){
        $this->naamProduct = $nieuweNaam;
    }
}

$Producten = [
    new Product('melk', '5 euro', false),
    new Product('kaas', '2 euro', true),
    new Product('eieren', '1 euro', false)
];

//----------------------------------------------------------------------------------------------------------------------
//----------------zat in Les_Opdrachten_view.php------------------------------------------------------------------------
?>
<ul>
        <?php foreach ($Producten as $Product) : ?>
        <?php if ($Product->getOpVoorraad()) : ?>
            <li><?= $Product->getNaamProduct(); ?>
                <?= $Product->getPrijs(); ?></li>
        <?php else : ?>
            <li><?= $Product->getNaamProduct(); ?>
                <?= $Product->getPrijs(); ?>
        <strong><?= 'Niet leverbaar!' ?></strong></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <hr>
    <h4>Class: Drankje</h4>
<?php
//______________________________________________________________________________________________________________________
class Drankje
{
    protected $soortDrinken;
    protected $temperatuur;

    public function __construct($soortDrinken, $temperatuur)
    {
        $this->soortDrinken = $soortDrinken;
        $this->temperatuur = $temperatuur;
    }

    public function getSoortDrinken(){
        return $this->soortDrinken;
    }

    public function getTemperatuur(){
        return $this->temperatuur;
    }
}

$Drankjes = [
    new Drankje('warme chocolademelk', 'warm'),
    new Drankje('water', 'koud'),
    new Drankje('thee', 'heet')
];

require 'index.view.php';

//----------------------------------------------------------------------------------------------------------------------
//----------------zat in Les_Opdrachten_view.php------------------------------------------------------------------------
?>
<ul>
        <?php foreach ($Drankjes as $Drankje) : ?>
            <li><?= $Drankje->getSoortDrinken(); ?>
            <?= $Drankje->getTemperatuur(); ?></li>
        <?php endforeach; ?>
    </ul>



<?php
//______________________________________________________________________________________________________________________
