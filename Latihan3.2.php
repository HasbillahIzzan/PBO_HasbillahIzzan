<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek; 
    var $tahunPembuatan = 2004;
    
    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
    
    function dapatSubsidi()
    {
        if ($this->bahanBakar == "Premium") {
            return " Tidak Dapat subsidi";
        } else {
            return "  dapat subsidi";
        }
    }

    function hargaSecondKendaraan()
    {
        return $this->harga * 0.7;
    }
}


$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 1000000; 
$objekKendaraan1->tahunPembuatan = 1999;
echo "Status Harga : " . $objekKendaraan1->statusHarga();

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "premium";
$objekKendaraan2->tahunPembuatan = 1999;

echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>
