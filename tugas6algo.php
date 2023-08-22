<?php

$bilangan = 0;
$satuan = 0;
$puluhan = 0;
$ratusan = 0;

if (isset($_POST['submit'])) {
    $bilangan = $_POST["bilangan"];
    $satuan = $bilangan % 10; 
    $puluhan = floor (($bilangan / 10 ) % 10);
    $ratusan = floor (($bilangan / 100 ));
}

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
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td><input type="text" name="bilangan"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>   
            </tr>
            
        </table>
    </form>
</body>
</html>

<?php


if (isset($_POST['submit'])) {
    echo "Satuan : $satuan <br>";
    echo "Puluhan : $puluhan <br>";
    echo "Ratusan : $ratusan";
}

