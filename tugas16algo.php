<?php 

$kehadiran  ; 
$mtk        ;
$indo       ;
$ing        ;
$dpk        ;
$agama      ;
$nama       ;

if (isset($_POST['submit'])) {
    $kehadiran = $_POST["kehadiran"];
    $mtk  	 	= $_POST["mtk"];
    $indo 	    = $_POST["indo"];
    $ing 		    = $_POST["ing"];
    $dpk 			    = $_POST["dpk"];
    $agama 		    = $_POST["agama"];
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
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kehadiran : </td>
                <td><input type="text" name="kehadiran"></td>
            </tr>
            <tr> 
                <td>MTK : </td>
                <td><input type="text" name="mtk"></td>
            </tr>
            <tr>
                <td>Indo : </td>    
                <td><input type="text" name="indo"></td>
            </tr>
            <tr>
                <td>Ing : </td>
                <td><input type="text" name="ing"></td>
            </tr>
            <tr>
                <td>DPK : </td>
                <td><input type="text" name="dpk"></td>
            </tr>
            <tr>
                <td>Agama : </td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>