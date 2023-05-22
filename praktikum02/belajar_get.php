<?php
$nama_mahasiswa = $_GET['nama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$mata_kuliah = $_GET['mata_kuliah'];
$nomor_telepon = $_GET['nomor_telepon'];
$prodi = $_GET['prodi'];

echo "<h1> Hasil Form Pendaftaran Mahasiswa</h1><br>";
echo "Nama : " . $nama_mahasiswa . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamin . "<br>";
echo "Mata Kuliah : " . $mata_kuliah . "<br>";
echo "Nomor Telepon : " . $nomor_telepon . "<br>";
echo "Program Studi : " . $prodi . "<br>";