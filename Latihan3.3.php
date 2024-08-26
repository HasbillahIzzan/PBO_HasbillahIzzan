<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}

// Objek 1
$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->merek = "Yamaha MIO";
$objekKendaraan1->harga = 10000000;

// Objek 2
$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->merek = "Toyota Avanza";
$objekKendaraan2->harga = 100000000;

// Objek 3
$objekKendaraan3 = new Kendaraan();
$objekKendaraan3->merek = "Astrea Honda";
$objekKendaraan3->harga = 50000000;

// Menampilkan informasi dari objek 1
echo "Merek: " . $objekKendaraan1->merek;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan1->harga;
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan1->statusHarga();
echo "<br>";

// Menampilkan informasi dari objek 2
echo "Merek: " . $objekKendaraan2->merek;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan2->harga;
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga();
echo "<br>";

// Menampilkan informasi dari objek 3
echo "Merek: " . $objekKendaraan3->merek;
echo "<br>";
echo "Nominal Harga: " . $objekKendaraan3->harga;
echo "<br>";
echo "Status Harga Kendaraan: " . $objekKendaraan3->statusHarga();
?>
