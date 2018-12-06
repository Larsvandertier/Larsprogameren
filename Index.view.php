<!DOCTYPE <!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset="utf-8" />
    <title>Document Lars</title>
    <style>
        body{
            background-color: 400000;
            color: white;
        }
    </style>

</head>
<body>

    <h1><?= ucwords('task for the day')?></h1>
    
    <ul>
       <li>
       <strong>Name: </strong> <?php ($task['assigned_to']) ?>
       </li>
       <li></li>
       <li></li>

        <li>
            <strong>Completed: </strong> 
            <?php 
            if ($task['completed']) {
                echo 'complete';
            } else {
                echo 'incomplete';
            }
            ?>
        </li>
    </ul>

</body>
</html>