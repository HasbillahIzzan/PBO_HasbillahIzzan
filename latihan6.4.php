<?php
class perulangan{

    public function loop(){
        $array = array('Subang','Bandung','Jakarta','Surabaya','Yogyakarta');
        foreach ($array as $key){
            echo $key."<br/>";
            
        }

    }
}

$objekperulangan = new perulangan();
echo "Nama-Nama Kota di Pulau Jawa : " ."<br/>";
echo $objekperulangan->loop()."<br/>";
?>