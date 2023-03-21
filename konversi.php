<!DOCTYPE html>
<html>

<head>
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2 class="konversi">Form Nilai</h2>
    <div class="pembungkus">
        <form class="finput" method="post" action="">
            <div class="form">
                <label for="range">Nama&emsp;:</label>
                <input class="boxinput" type="text" name="nama" placeholder="Masukkan nama" /><br />
                <label for="range">Nilai &emsp;:</label>
                <input class="boxinput" type="text" name="range" placeholder="Masukkan nilai" /><br />
                <input class="boxsubmit" type="submit" name="submit" value="Submit" />
            </div>

            <div class="output">
                <?php
                if (isset($_POST['submit']))
                    konversi();



                function konversi()
                {
                    $range = $_POST['range'];
                    $nama = $_POST['nama'];

                    if (!is_numeric($range)) {
                        echo " bukan numeric! <br> Inputkan lagi dengan benar";
                        return 0;
                    }
                    if (!preg_match("/^[a-zA-Z]*$/", $nama)) {
                        echo "Inputan nama salah! Gunakan huruf!";
                        return 0;
                    }

                    if ($range >= 81 && $range <= 100) {
                        echo "$range Nilai anda A";
                    } else if ($range >= 71 && $range <= 80) {
                        echo "$range Nilai anda AB";
                    } else if ($range >= 66 && $range <= 70) {
                        echo "$range Nilai anda B";
                    } else if ($range >= 60 && $range <= 65) {
                        echo "$range Nilai anda BC";
                    } else if ($range >= 56 && $range <= 60) {
                        echo "$range Nilai anda C";
                    } else if ($range >= 41 && $range <= 55) {
                        echo "$range Nilai anda D";
                    } else if ($range >= 0 && $range <= 40) {
                        echo "$range Nilai anda E";
                    } else if ($range > 100 || $range < 0) {
                        echo "$range Nilai yang di inputkan tidak sesuai range";
                    }
                }


                ?>
            </div>
        </form>
    </div>
</body>

</html>