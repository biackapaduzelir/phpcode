<?php

$veri= "irem";
$dizi= ["123","asd","xyz","222"];

$isim= "ŞİGÜÖÇ şiğüöç abc ABC";

//sayma sistemleri

echo "karakter sayisi:".strlen($veri)."<br>";

//kac karakter 

echo "eleman sayisi:".count($dizi)."<br>";

//buyuk kucuk 

echo "buyuk::".strtoupper($isim)."<br>";
echo "kucuk::".strtolower($isim)."<br>";

echo "mb buyuk::".mb_strtoupper($isim)."<br>";
echo "mb kucuk::".mb_strtolower($isim)."<br>";

//degisecekler

$degisecekler=["a","b","c"];
$donusecekler=["B","X","z"];

echo "<br><br>";

$bilgi=["sanane yalakkk bbb"];
$sonuc=str_replace($degisecekler,$donusecekler,$bilgi);

echo "eski:".$bilgi."yeni:".$sonuc."<br>";

$bilgi=["iremik"];
$aranacak=["k"];

//metnin icindeki karakterin yerini bulur
$say=strpos($bilgi,$aranacak);

if($say)
	echo $bilgi."//".$say."<br>";
else 
	echo "bulamadim! <br>";

//ters cevirir

$sonuc=strrev($bilgi);
echo $bilgi."--->".$sonuc."<br>";

//metnin belli bir bolumunu alır 
$sonuc=substr($bilgi,0,3);
echo $bilgi."-->".$sonuc."<br>";

$sonuc=substr($isim,3);
echo $isim."-->".$sonuc."<br>";

$bilgi= "irem ata bak";
$dizi=explode(" ",$bilgi);

echo "eleman sayisi:".count($dizi)."<br>";

foreach($dizi as $eleman)
echo $eleman."<br>";
