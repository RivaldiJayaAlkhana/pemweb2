<?php
$nama_mahasiswa = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$mata_kuliah = $_POST['mata_kuliah'];
$nomor_telepon = $_POST['nomor_telepon'];
$prodi = $_POST['prodi'];

echo "<h1> Hasil Form Pendaftaran Mahasiswa</h1><br>";
echo "Nama : " . $nama_mahasiswa . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamin . "<br>";
echo "Mata Kuliah : " . $mata_kuliah . "<br>";
echo "Nomor Telepon : " . $nomor_telepon . "<br>";
echo "Program Studi : " . $prodi . "<br>";