<?php
class kendaraan {
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $hargakendaraan;
    var $merek;
    var $tahunpembuatan;
    var $platnomer;
 
    function setHarga($y) {
        $this->hargakendaraan = $y;
    }
 
    function getHarga() {
        return $this->hargakendaraan;
    }
    function getstatusharga() {
        if ($this->hargakendaraan > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
    function getStatusBBM() {
        if ($this->bahanbakar == "premium" && $this->tahunpembuatan < 2005) {
            return 'Mendapat Subsidi';
        } else {
            return 'Tidak mendapat subsidi';
        }
    }
 
    function getHargabekas() {
        if ($this->tahunpembuatan > 2005) {
            return $this->hargakendaraan * 0.8;
        } elseif ($this->tahunpembuatan > 2000) {
            return $this->hargakendaraan * 0.7;
        } else {
            return $this->hargakendaraan * 0.6;
        }
    }
 
    function getPajak() {
        if ($this->tahunpembuatan < 2017) {
            return  $this->hargakendaraan * 0.025;
        }
        return  0;
    }
    function getHariOperasi($platNomer) {
        if ($this->platnomer % 2 == 0) {
           
            $hariOperasi = "Selasa Kamis Sabtu";
        } elseif  ($this->platnomer % 2 == 1) {
            $hariOperasi = "Senin Rabu Jumat Minggu";
        }
        return $hariOperasi;
    }
}
 
$objekkendaraan = new kendaraan;
$objekkendaraan->setHarga(50000000);
$objekkendaraan->bahanbakar = "Premium";
$objekkendaraan->tahunpembuatan = 1999;
$objekkendaraan->platnomer = 2128;
 
 
echo "Status Harga : " . $objekkendaraan->getStatusHarga() . "<br>";
echo "Status BBM : " . $objekkendaraan->getStatusBBM() . "<br>";
echo "Harga Bekas : Rp " . number_format($objekkendaraan->getHargaBekas()) . "<br>";
echo "Jumlah Pajak : Rp " . number_format($objekkendaraan->getPajak()) . "<br>";
echo "Hari Operasi : " . $objekkendaraan->getHariOperasi($objekkendaraan->platnomer) . "<br>";
?>