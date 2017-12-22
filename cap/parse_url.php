<?php
include('simple_html_dom.php');
require "class_dom.php";
require "get_color.php";

 $value='';
// Retrieve the DOM from a given URL
$html = file_get_html('https://m.espaceclientv3.orange.fr/index.php?noscript=1&page=desimlockage');
// $html = file_get_html('file:///C:/xampp/htdocs/apple/orangee/Desimlocker_mon_mobile.php');

$tab_name=array();
$tab_color=array();
$tab_hash=array();

get_image($html);
// sleep(10);
$names=get_name($html); $k=0;

for($i=1;$i<9;$i++)
		{
		$pic="/tmp/image-".$i.".png";
		$tab_color[$i]=get_color($pic);
		}
		$tab_hash=get_hash_color($tab_color); // retourne table des hashs des l'images
		foreach($tab_hash as $roww)
		{
		$roww = preg_replace('#[^0-9a-z]+#i', '', $roww);
		echo $roww.'<br>';
		}
		foreach($names as $roww)
		{
		echo $roww.'<br>';
		}
// sleep(10);
foreach($names as $row => $name)
{

if($row!=0)
{
$name=str_replace('.', '', $name);
$name=trim($name);
		if($name=="&eacute;l&eacute;phant")
		{$name="elephant";}
		elseif($name=="th&eacute;i&egrave;re")
		{$name="theiere";}
		
			echo '<font color="red"><b>=========================='.$name.'========='.$k.'</b></font><br>';
			
			for($j=1;$j<10;$j++)
			{
				$pic1="C:/xampp/htdocs/apple/solcaporange/image/".$name."/image-".$j.".png";
				$img_color=get_color($pic1);
				$img_hash=get_hash1_color($img_color); // retourne le hash de l'image
				$k++;
				$img_hash = preg_replace('#[^0-9a-z]+#i', '', $img_hash);
				echo $img_hash.'<br>';
					foreach($tab_hash as $ha =>$x)
					{
						// $x=str_replace('#', '', $x);
						
						$x = preg_replace('#[^0-9a-z]+#i', '', $x);

						// $img_hash=str_replace('#', '', $img_hash);
						// echo $x.'<br>';
						// echo '<font color="blue"><b>'.$x.'</font><br>';
						if($img_hash == $x)
							{
								
								// echo $x.'<br>';
								// echo $img_hash.'</b></font><br>';
						
								$value=$value.$x.'-';// tester les deux image identique
								// echo $value;
								$j=10;
							}
							// else
							// {
							// $value=$value.'*'.'-';
							// }
						
					}
			}
	// echo '==>'.$value.$k.'<br>';
	// echo $name.'<br>';
		
	// }
	// echo 'NAME :'.$name.' -- '.$row.'<br>';
}
}
echo '<br>';
echo '==>'.$value.'<br>';
echo '**>'.$k.'<br>';
echo '===>'.$row.'<br>';



?>

