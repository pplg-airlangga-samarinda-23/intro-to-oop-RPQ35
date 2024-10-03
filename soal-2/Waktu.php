<?php
class Waktu
{
    public $jam;
    public $menit;
    public $detik;

    public function __construct($jam,$menit,$detik) {
        $this->jam = $jam;
        $this->menit=$menit;
        $this->detik=$detik;
    }
    // deklarasikan atribut sesuai ditentukan buku
public function __getjam($jam){return $this->jam;}
public function __getmenit($menit){return $this->menit;}
public function __getdetik($detik){return $this->detik;}
    // deklarasikan metode sesuai yang diminta buku
}

$contoh =new Waktu(15,34,50);
echo "Sekarang pukul = ".$contoh->jam.":".$contoh->menit.":".$contoh->detik."<br>"; //output: Sekarang pukul 15:34:50

?>