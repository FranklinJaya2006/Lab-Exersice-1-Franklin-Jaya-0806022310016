<?php
function urraaa() {
    if (isset($_POST['num1']) && isset($_POST['num2'])) { //untuk mengetahui apakah form telah diisi
        $num1 = explode(",", $_POST['num1']); //explode untuk memisahkan string menjadi array
        $num2 = explode(",", $_POST['num2']); //explode untuk memisahkan string menjadi array
        $m = $_POST['m']; // mengambil nilai dari m
        $n = $_POST['n']; // mengambil nilai dari n

        $o = array_slice($num1, 0, $m); //untuk mengambil nilai dari indeks num1 sesuai yang kita isi dari m
        $p = array_slice($num2, 0, $n); //untuk mengambil nilai dari indeks num1 sesuai yang kita isi dari m

        echo "<br>";
        echo "Hasil M : " . implode(", ", $o); //menampilkkan hasil array o
        echo "<br>";
        echo "Hasil N : " . implode(", ", $p); //menampilkkan hasil array p
        echo "<br>";
        $num3 = array_merge($o, $p); //untuk menggabungkan 2 indeks antara array o dan p
        sort($num3); //untuk melakukkan sortir atau mengurutkan angka
        return $num3; //untukk mengembalikan nilai num3
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
</head>
<style>
    input[type="text"] {
        width: 200px; 
        padding: 5px; 
        font-size: 16px;
    } /* untuk sedikit memperindah form */ 
</style>
<body>
<H1>Masukkan angka untuk num1 dan num2</H1>
    <form action="" method="POST"><!-- method POST untuk mengirim permintaan berbeda dengan GET-->
        Pilih angka untuk num1 :
        <input type="text" id="nama" name="num1" placeholder="cth : 1,3,5,6,7,0" pattern="^\d*(,\d*)*$"> <!-- pattern untuk mengatur apa saja yang diperbolehkan, name disesuaikan dengan di atas. -->
        <br><br> 
        Pilih berapa angka yang ingin digunakan m :
        <input type="text" id="nama" name="m" placeholder="cth : 1" required pattern="^[0-9]+$"> <!-- pattern untuk mengatur apa saja yang diperbolehkan, name disesuaikan dengan di atas. -->
        <br><br> 
        Pilih angka untuk num2 :
        <input type="text" id="nama" name="num2" placeholder="cth : 2,4,6,7,0" pattern="^\d*(,\d*)*$"> <!-- pattern untuk mengatur apa saja yang diperbolehkan, name disesuaikan dengan di atas. -->
        <br><br> 
        Pilih berapa angka yang ingin digunakan n :
        <input type="text" id="nama" name="n" placeholder="cth : 2" required pattern="^[0-9]+$"> <!-- pattern untuk mengatur apa saja yang diperbolehkan, name disesuaikan dengan di atas. -->
        <br><br> 
        <input type="submit" value="Kirim">
    </form>

    <?php 
    $num3 = urraaa(); //memanggil fungsi
    ?>
    <?php foreach ($num3 as $a) :?> 
        <?php echo $a . " "; ?>
    <?php endforeach ;?>
</body>
</html>
