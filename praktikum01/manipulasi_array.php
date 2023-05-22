<?php

$arraybuah = ["Jeruk","Mangga","Pisang","Apel"];

// mengurutkan nilai/value suatu array
sort($arraybuah);

// menghapus nilai array yang paling akhir
array_pop($arraybuah);

//menghapus keseluruhan isi variabel
//bisa juga menghapus spesifik nilai array tertentu
unset($arraybuah[1]);

// menambahkan nilai array di paling belakang
array_push($arraybuah, "Durian");

//menghapus nilai array yg paling awal
array_shift($arraybuah);

//menambah nilai array di paling depan
array_unshift($arraybuah, "Semangka");

//mengubah spesifik array tertentu
$arraybuah[0] = "Manggis";

foreach($arraybuah as $buah){
    echo $buah . "<br>";
}