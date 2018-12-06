<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset="utf-8" />
    <title>Document Lars</title>
    <style>
        body{
            background-color: #400;
            color: #198673;
        }
    </style>

</head>
<body>
    <label><h1>Leeftijd</h1></label>
    <h1><?= ucwords('task for the day')?></h1>
    
    <ul>
       <li>
       <strong>Name: </strong> 
            <?php 
            ($task['assigned_to']) 
       
            
            if (! true){
            echo 'complete';
            }?>
            
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