<?php
// koneksi database

include '../koneksi.php';

// menangkap data yang di kirim dari form
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$KodeProduk = $_POST['KodeProduk'];


// menginput data ke database
mysqli_query($koneksi, "INSERT INTO produk (NamaProduk, Harga, Stok, KodeProduk) 
VALUES ('$NamaProduk', '$Harga', '$Stok', '$KodeProduk')");

// mengalihkan halaman kembali ke data_barang.php
header("location:data_barang.php?pesan=simpan");
?>