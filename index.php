<?php 
require "functions.php";

$data = query("SELECT * FROM todo");
// if (isset($_POST["submit"])) {
//     if (tambah($_POST)  > 0) {
//         echo "<script>
//         alert('data berhasil ditambahkan')
//         </script>";
//     } else {
//         echo "<script>
//         alert('data tidak berhasil ditambahkan')
//         </script>";
//     }
// }



// hapus($id);

tambah($_POST);


// header('Location:index.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        table {
            margin: auto;
            margin-top: 1em;
        }

        a {
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <label for="list"></label>
        <input type="text" name="list" id="list">
        <!-- sekalinya baya pindahi ke dalam form aja -->
        <button type="submit" name="submit" id="submit">Tambah</button>
    </form>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <!-- <th>Update</th> -->
            <th>Todo List</th>
        </tr>
        <?php foreach ($data as $todo) : ?>
            <tr>
                <td><a href="hapus.php?id=<?= $todo["id"] ?>"><?= $todo["list"] ?></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>
