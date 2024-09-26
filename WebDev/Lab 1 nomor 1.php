<?php
    function palindrome() {
        $angka = $_POST['angka'];
        if(isset($_POST['angka'])) { //isset untuk mengecek apakah form telah diisi
            for ($i = 1;$i <= $angka;$i++) { //loop untuk melakukan pengulangan perhitungan
                for($w = 1;$w <= $angka - $i;$w++) { // loop untuk memberi Spasi untuk memberi jarak agar menjadi pyramid
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                }
                $a = str_repeat("1",$i); //untuk menambahkan cth 1 * 1 jadi 11 * 11
                $b = str_repeat("1",$i); //untuk menambahkan cth 1 * 1 jadi 11 * 11
                $hasil = $a * $b;
                echo " $a * $b = $hasil"; //untuk menghitung hasil
                echo "<br>";
            }
            echo "</pre>";
        } else {
            echo "Angka belum dipilih";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>
<body>
    <form action="" method="POST"> 
        Pilih berapa kali palindrome :
        <input type="number" id="nama" name="angka" min="1" max="10">
        <br><br> 
        <input type="submit" value="Kirim">
    </form>
    <!-- <?php palindrome();?>   ini adalah pemanggilan fungsi -->
</body>
</html>