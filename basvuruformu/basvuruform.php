<html>
	<head>
		<meta charset="UTF-8">
		<title>Başvuru Formu</title>
	</head>
	<style>
	input, select{
		width:200px;
		color:red;
		font-weight:bold;
	}
	
	.td1{
		text-align:right;
		font-weight:bold;
		color:blue;
	}
	.td2{
		width:200px;
		color:red;
		font-weight:bold;
	}
	
	.radio{
		width:20px;
	}
	.baslik{
		text-align:center;
		color:red;
		font-weight:bold;
		
	}
	
	
	</style>
	<body>
	<?php 
	
	function getir($key,$varsayilan)
	{
		if(isset($_POST[$key]))
			return $_POST[$key];
		return $varsayilan;		
	}
	
	if(count($_POST)>0)
	{
		$adsoyad=getir("adsoyad","-");
		$meslek=getir("meslek","-");
		$cinsiyet=getir("cinsiyet","-");
		$adres=getir("adres","-");
		$telno=getir("telno","-");
		$dogumtarihi=getir("dogumtarihi","-");
		$egitim=getir("egitim","-");
		
		$hobi="";
		for($i=1;$i<5;$i++)
		{
			$veri=getir("ch".$i,"-");
			if($veri!="-")
			{
				if(strlen($hobi)>0) $hobi.=",";
				$hobi.=$veri;
			}
		}
		
	?>	
		
		<table border="2" width="25%">
			<tr>
				<td colspan="2" class="baslik">Başvuru Formu Çıktısı</td>
			</tr>
			<tr>
				<td class="td1">Ad Soyad:</td>
				<td class="td2"><?php echo $adsoyad; ?></td>
			</tr>
			<tr>
				<td class="td1">Meslek:</td>
				<td class="td2"><?php echo $meslek; ?></td>
			</tr>
			<tr>
				<td class="td1">Cinsiyet:</td>
				<td class="td2"><?php echo $cinsiyet; ?></td>
			</tr>
			</tr>
			<tr>
				<td class="td1">Doğum Tarihi:</td>
				<td class="td2"><?php echo $dogumtarihi; ?></td>
			</tr>
			<tr>
				<td class="td1">Adres:</td>
				<td class="td2"><?php echo $adres; ?></td>
			</tr>
			<tr>
				<td class="td1">Tel.No:</td>
				<td class="td2"><?php echo $telno; ?></td>
			</tr>
			<tr>
				<td class="td1">Eğitim Durumu:</td>
				<td class="td2"><?php echo $egitim; ?></td>
			</tr>
			<tr>
				<td class="td1">Hobiler:</td>
				<td class="td2"><?php echo $hobi; ?></td>
			</tr>
			<tr>
				<td class="baslik" colspan="2"><a href="">Başvuru Formuna Dön</a></td>
			</tr>
			<tr>
		</table>
		
	<?php 	
	}
	else
	{

	?>
	
		<form method="post">
		<table border="1" width="25%">
			<tr>
				<td colspan="2" class="baslik">Başvuru Formu</td>
			</tr>
			<tr>
				<td class="td1">Ad Soyad:</td>
				<td class="td2"><input type="text" name="adsoyad"></td>
			</tr>
			<tr>
				<td class="td1">Meslek:</td>
				<td class="td2"><input type="text"  name="meslek"></td>
			</tr>
			<tr>
				<td class="td1">Cinsiyet:</td>
				<td class="td2"><input class="radio" type="radio" value="Bay" name="cinsiyet">Bay <input class="radio" type="radio" value="Bayan" name="cinsiyet">Bayan</td>
			</tr>
			<tr>
				<td class="td1">Doğum Tarihi:</td>
				<td class="td2"><input type="number" name="dogumtarihi" min="1955" max="2001" ></td>
			</tr>
			<tr>
				<td class="td1">Adres:</td>
				<td class="td2"><input type="text" name="adres"></td>
			</tr>
			<tr>
				<td class="td1">Tel.No:</td>
				<td class="td2"><input type="text" name="telno"></td>
			</tr>
			<tr>
				<td class="td1">Eğitim Durumu:</td>
				<td class="td2">
					<select name="egitim">
						<option value="0">Seçiniz</option>
						<option value="Lisans">Lisans</option>
						<option value="YL">YL</option>
						<option value="DR">DR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="td1">Hobiler:</td>
				<td class="td2">
				<input type="checkbox" class="radio" name="ch1" value="Müzik">Müzik<br>
				<input type="checkbox" class="radio" name="ch2" value="Resim">Resim<br>
				<input type="checkbox" class="radio" name="ch3" value="Spor">Spor<br>
				<input type="checkbox" class="radio" name="ch4" value="Aşçılık">Aşçılık<br>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="baslik"><input type="reset" value="Sıfırla"><input type="submit" value="Gönder"></td>
			
			</tr>
		
		</table>
		</form>
	<?php } ?>	
	
	</body>
	
</html>
