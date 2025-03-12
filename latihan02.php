<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'PHP LEARN'?></title>
</head>
<body>

<?php
    echo "<h3> Belajar PHP di kelas pemrograman Web</h3>";
    echo "<ul>";
    echo "<li>Membuat script sederhana</li>";
    echo "<li>Menyisipkan script PHP pada Dokumen HTML</li>";
    echo "<li>Menyisikan external script PHP pada Dokumen HTML </li>";
    echo "</ul>";

    #cara menyisipkan file eksternal pada file lainnya
    include("latihan01.php");
    require("latihan01.php");
?>
</body>
</html>