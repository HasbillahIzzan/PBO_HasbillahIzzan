<?php
//membuat class
class Kendaraan{
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    function setmerek($x)
    {
        $this->merek = $x;
    }
    function setharga($x)
    {
        $this->harga = $x;
    }
    function setjmlroda($x)
    {
        $this->jmlroda = $x;
    }
    function setwarna($x)
    {
        $this->warna = $x;
    }
    function setbhnbakar($x)
    {
        $this->bhnbakar = $x;
    }
    function settahun($x)
    {
        $this->tahun = $x;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setmerek('Toyota Yaris');
$kendaraan1->setjmlroda(4);
$kendaraan1->setharga(160000000);
$kendaraan1->setwarna("merah");
$kendaraan1->setbhnbakar('premium');
$kendaraan1->settahun(2005);

$kendaraan2 = new Kendaraan();
$kendaraan2->setmerek('Honda Scoopy');
$kendaraan2->setjmlroda(2);
$kendaraan2->setharga(13000000);
$kendaraan2->setwarna("putih");
$kendaraan2->setbhnbakar('premium');
$kendaraan2->settahun(2004);

$kendaraan3 = new Kendaraan();
$kendaraan3->setmerek('Isuzu Panther');
$kendaraan3->setjmlroda(4);
$kendaraan3->setharga(170000000);
$kendaraan3->setwarna("Hitam");
$kendaraan3->setbhnbakar('solar');
$kendaraan3->settahun(2003);

echo $kendaraan1->merek;
echo "<br>";
echo $kendaraan1->jmlroda;
echo "<br>";
echo $kendaraan1->harga;
echo "<br>";
echo $kendaraan1->warna;
echo "<br>";
echo $kendaraan1->bhnbakar;
echo "<br>";
echo $kendaraan1->tahun;
echo "<br>";
echo "<br>";

echo $kendaraan2->merek;
echo "<br>";
echo $kendaraan2->jmlroda;
echo "<br>";
echo $kendaraan2->harga;
echo "<br>";
echo $kendaraan2->warna;
echo "<br>";
echo $kendaraan2->bhnbakar;
echo "<br>";
echo $kendaraan2->tahun;
echo "<br>";
echo "<br>";

echo $kendaraan3->merek;
echo "<br>";
echo $kendaraan3->jmlroda;
echo "<br>";
echo $kendaraan3->harga;
echo "<br>";
echo $kendaraan3->warna;
echo "<br>";
echo $kendaraan3->bhnbakar;
echo "<br>";
echo $kendaraan3->tahun;
echo "<br>";
echo "<br>";