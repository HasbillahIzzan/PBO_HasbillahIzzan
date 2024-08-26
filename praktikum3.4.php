<?php

class angsuran{
    var $pinjaman = 1000000;
    var $lamaangsuranbulan = 5 ;
    var $bunga;
    var $besaranagsuran ;
    var $totalpinjaman;
    var $dendaperhari;

function totalpinjaman()
{
    return $this->pinjaman * 0.1 + $this->pinjaman;
}
function bunga()
{
    return $this->pinjaman * 0.1;
}
function besaranangsuran() 
{
    return $this->totalpinjaman() / $this->lamaangsuranbulan ;
}
function dendaketerlambatan()
{
    return $this->besaranangsuran() + 13200 ;
}
}
$objekangsuran = new angsuran();
 echo ("TOKO PEGADAIAN SYARIAH") . "<br> ";
 echo ("Jl. Keadilan No.16") . "<br> ";
 echo ("Telp.72353459") . "<br> ";
 echo " ". "<br> ";
 echo "Total pinjaman: Rp." . $objekangsuran->totalpinjaman(). "<br />";
 echo "Bunga :10% / Rp." . $objekangsuran->bunga(). "<br />";
 echo "Lama Angsuran (Bulan) : " . $objekangsuran->lamaangsuranbulan. "<br />";
 echo "Angsuran per bulan :Rp." . $objekangsuran->besaranangsuran(). "<br />";
 echo "Besaran Pembayaran :Rp." . $objekangsuran->dendaketerlambatan(). "<br />"
?>
