<html>
<head>
	<title>Sınav Oturma Planı</title>
	<meta charset="UTF-8">	
</head>

<body>
	<?php
	$sutunsay=3;
	
	$isimlistesi=[];
	
	$dosya=fopen("isimler.txt","r");

	if($dosya)
	{
	  $veriler=fread($dosya,filesize("isimler.txt"));
	  $isimlistesi=explode("\n",$veriler);
	  /*$liste=explode("\n",$veriler);
	  
	  for($say=0;$say<count($liste);$say++)
	  {
	  	if(strlen($liste[$say])>1)
	  		$isimlistesi[]=$liste[$say];
	  }*/
	  	
	  fclose($dosya);
	}


	


	$konum=[];
	$satir=0;
	$sutun=0;
	
	while(true)
	{
		$say=count($isimlistesi);
		if($say==0)
			break;	
		$rast=rand(0,$say-1);
		
		if(strlen($isimlistesi[$rast])>1){
			$konum[$satir][$sutun]=$isimlistesi[$rast];
			$sutun++;
			if($sutun%$sutunsay==0)
			{
				$satir++;
				$sutun=0;
			}
		}
		array_splice($isimlistesi,$rast,1);	
	}

	/*
	$say=0;
	while($say<100)
	{
		$r1=rand(0,count($isimlistesi)-1);
		$r2=rand(0,count($isimlistesi)-1);
		
		$tmp=$isimlistesi[$r1];
		$isimlistesi[$r1]=$isimlistesi[$r2];
		$isimlistesi[$r2]=$tmp;	
	
	$say++;
	}
	
	
	$satirsay=count($isimlistesi)/$sutunsay;

	
	$sayac=0;
	for($satir=0;$satir<$satirsay;$satir++)
	{
		for($sutun=0;$sutun<$sutunsay;$sutun++)
		{
		 $konum[$satir][$sutun]=$isimlistesi[$sayac++];
		}
	}*/
	
	
	
	
	?>
	<table border="1" width="100%">
		<tr>
			<td>#</td>
			<?php 
				for($i=0;$i<$sutunsay;$i++)
					echo "<td>".($i+1)."</td>";
			
			?>
		</tr>
		<?php 
		for($satir=0;$satir<count($konum);$satir++)
		{
			echo "<tr>";
			echo "<td>".($satir+1)."</td>";
			
		for($sutun=0;$sutun<count($konum[$satir]);$sutun++)
		{
			echo "<td>".$konum[$satir][$sutun]."</td>";	
		}	
			echo "</tr>";
		}
		
		?>
	
	</table>
</body>
</html>
