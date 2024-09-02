<?php
$Datal = array( 'Toyota Yaris', '4', '160000000' , 'Merah' , ' Pertamax ' , ' 2014' );
$Data2 = array('Honda Scoopy' , '2', '13000000' , 'Putih', 'Premium' , '2005' );
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994' );

for($i = 1; $i <= 3; $i++) {
for ($h = 0; $h <= 5; $h++) {
${"kendaraanŞi"} = new Kendaraan();
${"kendaraanşi"}->setMerek(${"Datasi"} [0]);
${"kendaraanŞi"} ->setjmlroda(${"Dataşi"} [1]);
${"kendaraanŞi"} ->setHarga(${"Datasi"} [2]);
${"kendaraan$1"} ->setwarna(${"DataSi"} [3]);
${"kendaraanŞi"}->setbhnbakar(${"Data$1"} [4]);
$ {"kendaraanŞi"}->settahun(${"DataŞi"} [5]);
}
}
for($i = 1; $i <= 3; $i++) {
echo "\Skendaraan$i<br>"
.${"kendaraanŞi"}->getMerek()."<br>"
.${"kendaraanŞi"}->getjmlroda()."<br>"
.${"kendaraanŞi"} ->getHarga(). "<br>"
.${"kendaraanŞi"}->getWarna()."<br>"
.${"kendaraanŞi"}->getBhnBakar ()."<br>"
.$ {"kendaraanSi"}->getTahun()."<br>"
.${"kendaraanSi"} ->statusHarga() ."<br>"
.${"kendaraanŞi"} ->dapatSubsidi(). "<br>"
.${"kendaraanSi"}->hargaSecondKendaraan()."<br><br>";
}