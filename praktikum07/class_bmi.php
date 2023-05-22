<?php

class Bmipasien {
    public $nama;
    public $umur;
    public $jk;
    public $berat;
    public $tinggi;

    public function __construct($nama, $umur, $jk, $bb, $tb) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jk = $jk;
        $this->berat = $bb;
        $this->tinggi = $tb;
    }

    public function hasilBMI() {
        $hasil = $this->berat / ($this->tinggi * $this->tinggi / 10000);
        return $hasil;
    }

    public function statusBMI() {
        $hasil = $this->hasilBMI();
        if ($hasil < 18.5) {
            return "Kekurangan Berat Badan";
        }
        elseif ($hasil >= 18.5 && $hasil <= 24.9) {
            return "Normal (Ideal)";
        }
        elseif ($hasil >= 25 && $hasil <= 29.9) {
            return "Kelebihan Berat Badan";
        }
        else {
            return "Kegemukan (Obesitas)";
        }
    }
}