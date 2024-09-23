<?php
class perulangan{
    public function loop1(){
        for ($baris=1;$baris <=6;$baris++)
        {
            for ($kolom=1;$kolom < $baris; $kolom++)
            {
                echo $kolom."&nbsp;";
            }
            echo "<br/>";
        }
    }


    public function loop2(){
        for ($baris=1;$baris <=6;$baris++)
        {
            for ($kolom=1;$kolom < $baris; $kolom++)
            {
                echo "*"."&nbsp;";
            }
            echo "<br/>";
        }
    }

}

$objekperulangan = new perulangan();
echo "jenis perulangan 1 "."<br/>";
echo $objekperulangan->loop1(). "<br/>";
echo "jenis perulangan 2 "."<br/>";
echo $objekperulangan->loop2(). "<br/>";
?>