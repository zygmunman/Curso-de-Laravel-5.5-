<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios - Curso styde</title>
</head>
<body>
    <h1><?= e($title) ?></h1>
    <ul>
        <?php foreach($users as $user): ?>

            <li><?= e($user)?></li>

        <?php endforeach; ?>
    
    </ul>
</body>
</html>