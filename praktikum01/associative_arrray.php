<?php
$profileArray = [
    "nama" => "Rivaldi",
     "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];
echo "<br>";

$profilMultiArray = [
    [
        "nama" => "Rivaldi",
        "semester" => 2
    ], [
        "nama" => "Jaya",
        "semester" => 3
    ], [
        "nama" => "AL",
        "semester" => 5
    ]
];

foreach($profilMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}