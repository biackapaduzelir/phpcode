<?php

$dosyaismi="icerik.txt";
  
$dosya= fopen($dosyaismi,"r");

if($dosya){
$boyut=filesize($dosyaismi);
$icerik=fread($dosya,($boyut-1));
$satirlar=explode("\n",$icerik);	

$sayac = 1;

echo '<form action="" name=""form_1 method="post">';
foreach($satirlar as  $satir){
 
	/**
	 * Satırlar noktali virgül ile bölünmüş
	 * Her satırı kendi içinde noktalı virgül ile explode ettik
	 * Böylece elimizde bir array oluştu
	 */
	$bolunmus_satir = explode(';',$satir);
 
	/**
	 * Array'in ilk indisi anket sorusu, sonrakiler ise seçenekler.
	 */
	echo '<b>Soru:</b>' . $bolunmus_satir[0];
	echo '<br>';
	echo '<b>Seçenekler:</b>';
	echo '<br>';

	/**
	 * Elimizdeki Array'in eleman sayısı
	 */
	$secenek_sayisi = count($bolunmus_satir);

	/**
	 * Döngü 1'den başladı çünkü sıfırıncı indis sorunun kendisi
	 * Döngü sayacı seçenek sayısından büyük veya eşit olduğunda döngü bitecek
	 * Her sorunun farklı sayıda yanıtı var, bu yüzden döngü içinde seçenekleri ekrana yazdırıyoruz.
	 */
	for($i=1; $i < $secenek_sayisi; $i++){

		/**
		 * HTML radio buttonların özelliği gereği, name değeri aynı olan radiolardan sadece bir tanesi seçilebilir.
		 * Bu yüzden satır satır okumaya başladğımız yukarda sayaç değişkeni tanımladık
		 * Satır satır okuma döngüsünü bitmeden hemen önce de sayaç değerini bir arttırdık.
		 * Böylece radio name değerleri soru_1, soru_2, soru_X şeklinde oldu.
		 */
		echo '<input type="radio" name="soru_'.$sayac.'">';
		echo $bolunmus_satir[$i];
		echo '</input>';
		echo '<br>';
	}

	echo '<br>';
	echo '<br>';
	$sayac++;
}
//Döngü bitiş
	
	echo '<input type="submit" value="Gönder">';
	echo '</form>';
}// if bitiş