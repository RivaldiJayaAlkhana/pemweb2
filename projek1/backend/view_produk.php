<?php
require_once '../database/dbkoneksi.php';

// ambil data produk berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$id]);
    $data = $st->fetch(PDO::FETCH_ASSOC);

    // tampilkan deskripsi produk
    echo '<h1>' . $data['nama'] . '</h1>';
    echo '<p>Merk: ' . $data['merk_id'] . '</p>';
    echo '<p>Stok: ' . $data['stok'] . '</p>';
    echo '<p>Harga: ' . $data['harga'] . '</p>';
    echo '<p>Berat: ' . $data['berat'] . '</p>';
    echo '<p>Jenis: ' . $data['jenis_produk_id'] . '</p>';
}
?>
