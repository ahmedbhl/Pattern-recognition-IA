<?php

// include('simple_html_dom.php');



//*********************************************************
// Retrieve all images and print their SRCs
//*********************************************************

function get_image($html)
{
$i=0;
foreach($html->find('img') as $e)
{

    // echo $e->src . '<br>';
	$link=trim(substr($e->src,70));
	$nlink='https://eui.orange.fr/captcha/bin/image.cgi?captchaService=CFG&id='.$link;
	copy((string)$nlink,'/tmp/image-'.$i.'.png');
	$i++;
}
}	

//*********************************************************
// Find all images, print their text with the "<>" included
//*********************************************************
function desplay_image($html)
{
foreach($html->find('img') as $e)
    echo $e->outertext ;
}	
//*********************************************************
// Find the DIV tag with an id of "name"
//*********************************************************
 function get_name($html)
{
$tab_name=array();
$i=0;
$j=1;
foreach($html->find('li') as $e)
{
	if($i>=2)
	{
    $tab_name[]=$e->innertext;
	}
	$i++;
	
}	
return $tab_name;
}	


//*********************************************************
// Find all "A" tags and print their HREFs
//*********************************************************
 function get_href($html)
{
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';	
}
//*********************************************************
// Find all SPAN tags that have a class of "myClass"
//*********************************************************
 function get_tags($html)
{
foreach($html->find('span.myClass') as $e)
    return $e->outertext . '<br>';
}	
//*********************************************************
// Find all TD tags with "align=center"
//*********************************************************
 function get_td($html)
{
foreach($html->find('td[align=center]') as $e)
    echo $e->innertext . '<br>';
}
//*********************************************************
// Extract all text from a given cell
//*********************************************************   
 function get_all_text($html)
{
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
}







?>

