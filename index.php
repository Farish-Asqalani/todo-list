<?php 
require "functions.php";

$data = query("SELECT * FROM todo");

// if (isset())


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="list"></label>
        <input type="text" name="list" id="list">
    </form>
    <button type="submit">Tambah</button>
    <?php foreach ($data as $todo) : ?>
        <p><?= $todo["todo"] ?></p>
    <?php endforeach; ?>
</body>
</html>