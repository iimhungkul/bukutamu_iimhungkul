<?php
$conn = mysqli_connect ("localhost","root","","bukutamu_iimhungkul");
$hasil = $conn->query("SELECT * FROM bukutamu_iimhungkul");
$jumlah = mysqli_num_rows($hasil);
Echo "Daftar Pengunjung <br>";
Echo "Jumlah Pengunjung : $jumlah";
$a=1;
While ($baris = mysqli_fetch_array($hasil))
{
    Echo "<br>"; echo $a; echo "<br>";
    Echo "Nama : "; echo $baris[0]; echo "<br>"; echo "Email : "; echo $baris[1];
    Echo "<br>";
    Echo "Komentar : "; echo $baris[2];
    $a++;
}
?>

