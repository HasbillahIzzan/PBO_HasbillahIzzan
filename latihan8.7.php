<?php
class manusia{
    private $nama="ardi";
    private $kelas="SI 2";

    private function m_nama(){
        return $this->nama;
    }

    public function tampilkan_nama(){
        return $this->m_nama();
    }

    function tampilkan_kelas(){
        return $this->kelas;
    }

}

$manusia = new manusia();

echo "nama :".$manusia->tampilkan_nama()."<br/>";
echo "kelas :".$manusia->tampilkan_kelas();
?>