<?php
class manusia{
    var $nama;
    var $warna;

    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }

    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }

    function tampilkan_nama(){
        return "nama saya mahasiswa Si <br/>";
    }
}

$manusia = new manusia;

echo $manusia->tampilkan_nama();
?>