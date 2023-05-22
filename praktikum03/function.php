<?php

// fungsi pertama 
function hitungUmur($tahunLahir = 2000,$tahunSekarang = 2023){
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2002, 2023);
echo "<br>";
hitungUmur(1990, 2023);
echo "<br>";
hitungUmur(1918, 2023);
echo "<br>";
hitungUmur();
echo "<br>";

// fungsi kedua 
function greeting($nama)
{
    return "Hai, namaku $nama !";
}

echo greeting("Abiyyu");