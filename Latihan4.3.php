<?php
//akses properties
class kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;
    var $tahunpembuatan;

    function setmerek($x)
    {
        $this->merk =$x;
    }

    function getmerek()
    {
        return $this->merek;
    }

    function setharga($y)
    {
        $this->harga =$y;
    }

    function getharga()
    {
        return $this->harga;
    }
}

$kendaraan1 = new kendaraan;
$kendaraan1->setmerek('Yamaha Mio');
$kendaraan1->setharga(10000000);
echo $kendaraan1->getmerek();
echo "<br>";
echo $kendaraan1->getharga();

?>