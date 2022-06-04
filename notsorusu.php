<?php
//öğrenci geçti kaldı uygulaması
$ogrenciler=array(
array("adsoyad"=>"mehmet","not1"=>"60","not2"=>"70"),
array("adsoyad"=>"ahmet","not1"=>"80","not2"=>"50"),
array("adsoyad"=>"mehmet","not1"=>"40","not2"=>"50")
);
foreach($ogrenciler as $ogrenci)
{
    $ortalama = ($ogrenci["not1"] +$ogrenci["not2"])/2;
    if($ortalama>=60)
    {
        $sonuc="geçti";
    }
    else {
        $sonuc="kaldı";
    }
    echo "adı soyadı: ".$ogrenci["adsoyad"]."<br>";
    echo "not 1:".$ogrenci["not1"]."<br>";
    echo"not2:".$ogrenci["not2"]."<br>";
    echo "ortalama:".$ortalama."<br>";
    echo"sonuç:".$sonuc;
    echo "<br><hr><br>";
}






?>