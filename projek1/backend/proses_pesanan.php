<?php 
require_once '../database/dbkoneksi.php';

if (isset($_POST['proses'])) {
    $_produk = $_POST['produk_id'];
    $_nama = $_POST['nama_pemesan'];
    $_alamat = $_POST['alamat_pemesan'];
    $_nohp = $_POST['no_hp'];
    $_jumlah = $_POST['jumlah_pesanan'];

    $_proses = $_POST['proses'];

    // array data
    $ar_data[] = $_produk;
    $ar_data[] = $_nama;
    $ar_data[] = $_alamat;
    $ar_data[] = $_nohp;
    $ar_data[] = $_jumlah;

    if ($_proses == "Simpan") {
        // data baru
        $sql = "INSERT INTO pesanan (produk_id,nama_pemesan,alamat_pemesan,no_hp,jumlah_pesanan) VALUES (?,?,?,?,?)";
    } elseif ($_proses == "Update") {
        $ar_data[] = $_POST['idedit'];
        $sql = "UPDATE pesanan SET produk_id=?,nama_pemesan=?,alamat_pemesan=?,no_hp=?,jumlah_pesanan=? WHERE id=?";
    }
    if (isset($sql)) {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);
    }
}
header('location:list_pesanan.php');
?>