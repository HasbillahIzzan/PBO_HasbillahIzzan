<?php
class Datanilai {
    var $nama;
    var $kelas;
    var $matkul;
    var $nilai;

   function keteranganlulus()
   {
    if ($this->nilai > 70 ) $status = 'Lulus Kuis';
    else $status = 'Tidak Lulus kuis';
    return $status;
   }

    function setnama($nama)
   {
    $this->nama=$nama;
   }

   function getnama(){
    return $this->nama;
   }

   function setkelas($kelas)
   {
    $this->kelas=$kelas;
   }

   function getkelas(){
    return $this->kelas;
   }

   function setmatkul($matkul)
   {
    $this->matkul=$matkul;    
   }

   function getmatakuliah(){
    return $this->matkul;
   }

   function setnilai($nilai)
   {
    $this->nilai=$nilai;
   }

   function getnilai(){
    return $this->nilai;
   }
}
$databases = [
    [
        'nama' => 'Aditya',
        'kelas' => 'SI2',
        'matkul' => 'PBO',
        'nilai' => 80
    ],
    [
        'nama' => 'Shinta',
        'kelas' => 'SI2',
        'matkul' => 'PBO',
        'nilai' => 75
    ],
    [
        'nama' => 'Ineu',
        'kelas' => 'SI2',
        'matkul' => 'PBO',
        'nilai' => 55
    ]
];


$databases_objects = [];


foreach ($databases as $data) {
    $obj = new Datanilai();
    $obj->setnama($data['nama']);
    $obj->setkelas($data['kelas']);
    $obj->setmatkul($data['matkul']);
    $obj->setnilai($data['nilai']);
    $databases_objects[] = $obj;
}

foreach ($databases_objects as $obj) {
    echo "Nama: " . $obj->getnama() . "<br>";
    echo "Kelas: " . $obj->getkelas() . "<br>";
    echo "Mata Kuliah: " . $obj->getmatakuliah() . "<br>";
    echo "Nilai: " . $obj->getnilai() . "<br>";
    echo "Keterangan: " . $obj->keteranganlulus() . "<br><br>";
}
?>