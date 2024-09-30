<?php

class ogrenci
{
    public $adi;
    public $bolum;
    public $yas;

    function yazdir()
    {
        echo $this->adi."".$this->bolum."".$this->yas;
    }
}
    $nesne_ogrenci=new ogrenci;
    $nesne_ogrenci->adi="Ahmet "; 
    $nesne_ogrenci->bolum="Bilişim ";
    $nesne_ogrenci->yas=16;
    $nesne_ogrenci->yazdir(); 

?>