<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>phplessen</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="about.view.php">About page</a></li>
            <li><a href="contact.view.php">Contact page</a></li>
        </ul>
    </nav>
    <h1>My Tasks</h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <Strike><?= $task->description; ?></Strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>