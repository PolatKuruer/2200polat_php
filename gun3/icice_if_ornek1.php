<?php 

$yazili1=50;
$yazili2=50;
$performans1=60;
$performans2=60;

if($yazili1=="" || $yazili2=="" || $performans1=="" || $performans2=="")
    {
        echo "<em> Puanlardan biri eksik girilmiş </em>";
    }
else
    {
        if($yazili1 < 0 || $yazili2 > 100 || $yazili2 < 0 || $yazili2>100 || $performans1 < 0 || $performans2 < 0 || $performans2>100)            
    }   

?>