<?php
class manusia {
    public $nama="ardi";
    var $kelas="SI 2";

    function tampilkan_nama(){
        return $this->nama;
    }
    public function tampilkan_kelas(){
        return $this->kelas;
    }
}

$manusia = new manusia();
echo "nama :".$manusia->tampilkan_nama()."<br/>";
echo "kelas :".$manusia->tampilkan_kelas()."<br/>";

?>