<?php
$arraybuah = ["Anggur","Mangga","Pisang","Apel"];

print_r($arraybuah);
echo "<br>";
var_dump($arraybuah);
echo "<br>";
foreach($arraybuah as $buah){
    echo $buah . "<br>";
}
echo "<br>";
echo $arraybuah[0];