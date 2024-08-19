class Mobil {

var $jumlahroda="4;
var $warna="merah";
var $bahanbakar="pertamax";
var $harga=120000000;
var $merk='A';


public function statusharga()
{
    if ($this > harga > 50000000) $status = 'mahal' ;
    else $status = 'murah' ;
    return $status;
}

}

