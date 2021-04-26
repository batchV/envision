<?php
$conn = new mysqli('localhost', 'root', '', 'test');
$id_produk = $_GET['id_produk'];
$proses = mysqli_query($conn, "DELETE FROM produk WHERE id_produk='$id_produk'");
echo "<script>alert('Data Produk Berhasil Dihapus'); window.location='form.php';</script>";
?>