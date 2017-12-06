<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
function ortalamavesira($arr,$noo)
{
	$sayac=0;
	$arr1=array();
	$toplam=0;
		foreach ($arr as $key=>$value)
		{

		        $val=$arr[$key];
			if($value!="GR" && is_numeric($val))
			{
			    $arr1[]=$val;
			    $toplam+=$val;
			    $sayac++;
			}
		}

	$ort=round($toplam/$sayac,2);
	rsort($arr1);
	if(is_numeric($arr[$noo]))
	   $key = array_search($arr[$noo], $arr1);
	else 
           return " ----- Sinava girmediginiz icin istatistik veremiyoruz";

	$durum="siralamaniz:".($key+1)."/".count($arr1);
	return " ----- sinif ort:".$ort." ----- ".$durum;
}

$sayac=0;
if(isset($_POST["no"]) && is_numeric($_POST["no"]))
{

$no=$_POST["no"];

$sinavkatari=array();

$sinavkatari["asinavi"]=array("123321123"=>"60");
$sinavkatari["bsinavi"]=array("123456789"=>"80","123321123"=>"50","111111111"=>"20");
$sinavkatari["csinavi"]=array("123456780"=>"50","123321123"=>"40");
$sinavkatari["dsinavi"]=array("123456781"=>"75","123321123"=>"60");
//... istediginiz kadar sinav ekleyebilirsiniz.

	foreach ($sinavkatari as $ky=>$vls)
	{
		$arr=$sinavkatari[$ky];
		if(isset($arr[$no])){ 
			echo $ky." vize notunuz:".$arr[$no]."  ".ortalamavesira($arr,$no)."<br/>";
			$sayac++;
		}
	}
	
	if($sayac==0){
		echo "seni okul no ile taniyamadik :) bir yanlislik oldugunu dusunuyorsan mail atmayi deneyebilir veya face den ulasabilirsin<br/><br/><br/>";
	}

echo "<br/><br/><br/>";

}

?>

<form action="" method="POST">
OKUL NO:<input type="text" id="no" name="no"><br/>
<input type="submit" value="Gonder" >
</form>

</body>
</html>
