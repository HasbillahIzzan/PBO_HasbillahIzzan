<?php
class segitiga{
    public $tinggi;
    public $lebar;
    function __construct($tinggi,$lebar)
    {
        $this->tinggi=$tinggi;
        $this->lebar=$lebar;
    }
    function luas(){
        $luas=$this->tinggi*$this->lebar/2;
        echo "Tinggi Segitiga = ".$this->tinggi."<br/>";
        echo "Lebar Segitiga  = ".$this->lebar."<br/>";
        echo "<br/><b>luas lingkaran = $luas</b>";
    }
}

$segitiga=new segitiga(200,500);
$segitiga->luas();
?>
