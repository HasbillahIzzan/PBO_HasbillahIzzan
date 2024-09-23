<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo " * * ";
    }
 
    echo "<br />";
}

echo "<br/>";

class segitiga{

    public function array(){
        $array = array('*','* *','* * *','* * * *','* * * * *','* * * * *','* * * *','* * *','* *','*');
        foreach ($array as $key){
            echo $key."<br/>";
            
        }

    }
}

$objekperulangan = new segitiga();
echo "Segitiga terbalik ke kanan : " ."<br/>";
echo $objekperulangan->array()."<br/>";


echo "<br/>";


?>