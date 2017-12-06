<html>
<head>
	<meta charset="UTF-8">
	<title>İSTE Anket</title>
</head>
<body>
<?php

$dosyaismi="icerik.txt";

$dosya= fopen($dosyaismi,"r");

if($dosya){
$boyut=filesize($dosyaismi);
$icerik=fread($dosya,($boyut-1));
$satirlar=explode("\n",$icerik);	

	
$i=1;
foreach($satirlar as  $satir){
	echo "$i- ";
	$i++;
$ayir=explode(";",$satir);
foreach($ayir as $bolum){

echo $bolum."<br>";	

}}}

?>

<form method="post">
<table border="1"> 

