<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Php Lessen</title>
</head>
<body>
    
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
    <h3>Testclass</h3>
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
    <h3>fruitclass</h3>
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

</body>
</html>