<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $nopol;
    public $merek;
    public $type ;
    public $tahun;
    public $noR  ;
    public $noM  ;
    public $bbm  ;
    // contoh metode melaju()
    public function melaju() {
        echo "Mobil sedang melaju."."<br>";
    }
    public function belok(){echo "Mobil sedang berbelok."."<br>";}
    public function berhenti(){echo "Mobil sedang berhenti."."<br>";}
    public function mundur(){echo "Mobil sedang mundur."."<br>";}
    


// buat sebuah objek mobil dan lengkapi atributnya
    public function __construct($nopol,$type,$merek,$tahun,$noR,$noM,$bbm) {
        $this->nopol=$nopol;
        $this->merek=$merek;
        $this->type=$type;
        $this->tahun=$tahun;
        $this->noR=$noR;
        $this->noM=$noM;
        $this->bbm=$bbm;
    }
}
$namaini= new Mobil("B1234YZ","xpander","mitsubishi","2015","MA3GMH31SA1162468","KX2BN4052285","bensin");
    echo "nopol=".$namaini->nopol." <br> merek=".$namaini->merek." <br> type=".$namaini->type."<br> tahun=".$namaini->tahun."<br> no rangka=".$namaini->noR."<br> no mesin=".$namaini->noM."<br> BBM=".$namaini->bbm."<br> <br> <br>";

// panggil keempat metode yang terdapat pada kelas Mobil
$namaini->melaju();
$namaini->mundur();
$namaini->belok();
$namaini->berhenti();