<?php
class PersegiPanjang
{
    // deklarasikan panjang dan lebar
public $lebar;
public $panjang;
    // deklarasikan metode konstruktor
public function __construct($panjang,$lebar) {$this->lebar=$lebar;$this->panjang=$panjang;}
    


    // deklarasikan metode mutator dan asesor



    public function hitungLuas()
    {
        // lengkapi kode untuk menghitung luas persegi panjang
        $lebar=$this->lebar;
        $panjang=$this->panjang;
        $luas=$lebar*$panjang;
        return $luas;
    }

    public function hitungKeliling()
    {
        // lengkapi dengan kode untuk menghitung keliling persegi panjang
        $lebar=$this->lebar;
        $panjang=$this->panjang;
        $keliling=2*($lebar+$panjang);
        return $keliling;
    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";
