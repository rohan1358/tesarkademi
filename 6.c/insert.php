<?php 
include "koneksi.php";

$kasir = $_POST["kasir"];
$kategori = $_POST["kategori"];
$produk = $_POST["produk"];
$harga = $_POST["harga"];
mysqli_query($koneksi, "INSERT INTO product VALUES ('', '$produk', '$harga', '$kategori', '$kasir')");
header('Location: 6.c.php');

 ?>