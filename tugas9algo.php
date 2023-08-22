<?php
$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

if (isset($_POST['submit'])) {
    $no_pegawai = $_POST['nopega'];
    $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 2, 2);
        $bulan = substr($no_pegawai, 4, 2);
        $tahun = substr($no_pegawai, 6, 4);
        $no_urutan = substr($no_pegawai,10 ,2 );
    if (strlen($no_pegawai) <= 11) {
        echo "No Pegawai Tidak Sesuai";
    } else {
        $namab = "";

        if ($bulan == "01") {
            $namab = "Januari";
        } elseif ($bulan == "02") {
            $namab = "Februari";
        } elseif ($bulan == "03") {
            $namab = "Maret";
        } elseif ($bulan == "04") {
            $namab = "April";
        } elseif ($bulan == "05") {
            $namab = "Mei";
        } elseif ($bulan == "06") {
            $namab = "Juni";
        } elseif ($bulan == "07") {
            $namab = "Juli";
        } elseif ($bulan == "08") {
            $namab = "Agustus";
        } elseif ($bulan == "09") {
            $namab = "September";
        } elseif ($bulan == "10") {
            $namab = "Oktober";
        } elseif ($bulan == "11") {
            $namab = "November";
        } else {
            $namab = "Desember";
        }

        $tanggal_lahir = $tanggal . " -" . $namab . "- " . $tahun ;

        echo "<br>No Golongan : $no_golongan <br>";
        echo "Tanggal Lahir : $tanggal_lahir <br>";
        echo "No Urutan : $no_urutan";
    }
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
                <td>No Pegawai: </td>
                <td><input type="text" name="nopega"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
