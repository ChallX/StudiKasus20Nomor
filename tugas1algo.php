<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <h1>Konversi Detik ke Jam-Menit-Detik</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalDetik = intval($_POST["total_detik"]);

        $jam = floor($totalDetik / 3600);
        $sisaDetik = $totalDetik % 3600;
        $menit = floor($sisaDetik / 60);
        $detik = $sisaDetik % 60;

        $formatWaktu = "";
        if ($jam > 0) {
            $formatWaktu .= $jam . " jam ";
        }
        if ($menit > 0) {
            $formatWaktu .= $menit . " menit ";
        }
        $formatWaktu .= $detik . " detik";
    }
    ?>

    <form method="POST" action="">
        <label for="total_detik">Masukkan total detik:</label>
        <input type="number" name="total_detik" required>
        <button type="submit">Konversi</button>
    </form>

    <?php if (isset($formatWaktu)): ?>
        <p>Hasil konversi: <?php echo $formatWaktu; ?></p>
    <?php endif; ?>
</body>
</html>
