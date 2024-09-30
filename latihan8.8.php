<?php
class manusia{
    protected $nama = "ardi";
    var $kelas = "SI 2";

    protected function nama(){
        return "nama :" .$this->nama;
    }
    public function tampilkan_nama(){
        return $this->nama();
    }
    protected function tampilkan_kelas(){
        return "kelas :".$this->kelas;
    }
}

$manusia = new manusia();

echo $manusia->tampilkan_nama()."<br/>";
echo $manusia->tampilkan_kelas();
?>