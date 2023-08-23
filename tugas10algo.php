<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah 1 Detik </title>
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
    }
</style>

  
</head>

<body>

    <form method="POST" action="">
        <table>
        <tr>
            <td>Input Jam</td>
            <td><input type="number" name="hh" max="23" min="0" required></td>
        </tr>
        <tr>
            <td>Input Menit</td>
            <td><input type="number" name="mm" max="59" min="0" required ></td>
        </tr>
        <tr>
            <td>Input Detik</td>
            <td><input type="number" name="ss" max="59" min="0" required ></td>
        </tr>
            <td><input type="submit" value="Submit" name="submit"></td>
            </table>

            <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $hh = intval($_POST['hh']);
                $mm = intval($_POST['mm']);
                $ss = intval($_POST['ss']);

                $ss = $ss + 1;

                if ($ss >= 60) {
                    $mm = $mm + 1;
                    $ss = 00;

                    if ($mm >= 60) {
                        $hh = $hh + 1;
                        $mm = 00;
                        $ss = 00;

                        if ($hh >= 24) {
                            $hh = 00;
                            $mm = 00;
                            $ss = 00;
                        }
                    }
                } else {
                    $ss = $ss;
                }

                echo $hh . ":";
                echo $mm . ":";
                echo $ss ;
            }

            ?>
</div>
</body>

</html>