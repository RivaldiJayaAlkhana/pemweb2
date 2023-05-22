<?php
require_once '../database/dbkoneksi.php';

// ambil data produk berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$id]);
    $data = $st->fetch(PDO::FETCH_ASSOC);

    // tampilkan deskripsi produk
    echo '<h1>' . $data['produk_id'] . '</h1>';
    echo '<p>Nama Pemesan: ' . $data['nama_pemesan'] . '</p>';
    echo '<p>Alamat: ' . $data['alamat_pemesan'] . '</p>';
    echo '<p>No Handphone: ' . $data['no_hp'] . '</p>';
    echo '<p>Jumlah Pesanan: ' . $data['jumlah_pesanan'] . '</p>';
}
?>
