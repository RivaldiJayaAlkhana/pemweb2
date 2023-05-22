<?php 
require_once '../database/dbkoneksi.php';

// memulai output buffering
ob_start();

$_nama = $_POST['nama'];
$_merk = $_POST['merk_id'];
$_stok = $_POST['stok'];
$_harga = $_POST['harga'];
$_berat = $_POST['berat'];
$_jenis = $_POST['jenis'];

$_proses = $_POST['proses'];

// array data
$ar_data[]=$_nama; // ? 2
$ar_data[]=$_merk;// 3
$ar_data[]=$_stok;
$ar_data[]=$_harga;
$ar_data[]=$_berat; // ? 7
$ar_data[]=$_jenis;

if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (nama,merk_id,stok,harga,berat,jenis_produk_id) VALUES (?,?,?,?,?,?)";
}
if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama=?,merk_id=?,stok=?,
    harga=?,berat=?,jenis_produk_id=? WHERE id=?";
}

if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// mengakhiri output buffering dan mengirimkan output ke browser
ob_end_flush();

// mengubah header setelah output buffering diakhiri
header('location:index.php');
exit();
?>
