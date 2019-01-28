<?php

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


require 'Les_Opdrachten_View.php';
