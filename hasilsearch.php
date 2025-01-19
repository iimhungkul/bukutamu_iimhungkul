<?php
$kolom = $_POST['kolom'] ?? null;
$cari = $_POST['cari'] ?? null;
$conn = mysqli_connect("localhost", "root", "", "bukutamu_iimhungkul");
$hasil = $conn->query("SELECT * FROM `bukutamu_iimhungkul` WHERE 1");
$jumlah = mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan : $jumlah <br><br>";
While ($baris = mysqli_fetch_array($hasil)) {
    echo "Nama : " . $baris['nama'] . "<br>";
    echo "Email : " . $baris['email'] . "<br>";
    echo "Komentar : " . $baris['komentar'] . "<br><br>";
}

