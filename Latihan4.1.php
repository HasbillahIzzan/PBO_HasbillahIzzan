<?php

class Kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merk;
    
    function statusharga ()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    } 

    function setmerk($x)
    {
        $this->merk =$x;
    }

    function setharga($x)
    {
        $this->harga =$x;
    }
}

$kendaraan1=new kendaraan();
$kendaraan1->setmerk('yamaha mio');
$kendaraan1->setharga('10000000');
echo $kendaraan1->statusharga();

?>