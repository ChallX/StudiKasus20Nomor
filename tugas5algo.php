<?php

$total_gram = 0 ;
$harga_sebelum = 0;
$diskon = 0;
$harga_setelah = 0;

if (isset($_POST['total_gram'])) {
    $total_gram = $_POST['total_gram'];
    $harga_sebelum = 500 * $total_gram;
    $diskon = 100 ;
    $harga_setelah = $harga_sebelum / $diskon;




}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Total Gram</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td> Total Gram: </td>
                <td><input type="text" name="total_gram"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>


</body>

</html>

<?php
    
if ($total_gram > 0) {

    echo "Harga Sebelum Diskon :   $harga_sebelum<br>" ;
    echo "Harga Sesudah Diskon :   $harga_setelah";

}

?>