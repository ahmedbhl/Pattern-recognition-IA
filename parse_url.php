<?php
$i=0;
include('simple_html_dom.php');
include('url_to_absolute.php');
for($i=0;$i<1000;$i++)
{
echo 'refresh===>'.$i;
$url = 'http://selfsolve.apple.com/agreementWarrantyDynamic.do';
// if ($url === unparse_url(parse_url($url))) {
  // print "YES, they match!\n";
// }

// function unparse_url($parsed_url) {
  // $scheme   = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
  // $host     = isset($parsed_url['host']) ? $parsed_url['host'] : '';
  // $port     = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
  // $user     = isset($parsed_url['user']) ? $parsed_url['user'] : '';
  // $pass     = isset($parsed_url['pass']) ? ':' . $parsed_url['pass']  : '';
  // $pass     = ($user || $pass) ? "$pass@" : '';
  // $path     = isset($parsed_url['path']) ? $parsed_url['path'] : '';
  // $query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
  // $fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';
  // return "$scheme$user$pass$host$port$path$query$fragment";
// }








//captcha=sc875    name="sc883-alc-1421981710803"  name="sc883-alc-1421982584990"
//imei name="sc847-alc-1421981710804"
// Include the library

 
// Retrieve the DOM from a given URL
$html = file_get_html('https://m.espaceclientv3.orange.fr/index.php?noscript=1&page=desimlockage');
// $html = file_get_html('http://eui.orange.fr/captcha/bin/image.cgi?captchaService=CFG&id=081e746e85aba9fc216bcd3f9970112404af00e9c7768a3654b30589e4a576a9');
// $html = file_get_html('file:///C:/Users/AHMED/Desktop/orange/Desimlocker_mon_mobile.htm');
// $html = file_get_html('https://sfr.fr');
// $html = file_get_html('https://eui.orange.fr/captcha/bin/image.cgi?captchaService=CFG&id=fa5196f044e54782ee57d6878c6f8e09b4f02227d0a121ebb0bbe2709dc59124');
// echo $html;


//*********************************************************
//*********************************************************
// Retrieve all images and print their SRCs

foreach($html->find('img') as $e)
{
$i++;
    // echo $e->src . '<br>';
	
	// echo '==>'.$e.'<br>';
	$link=trim(substr($e->src,70));
	$nlink='https://eui.orange.fr/captcha/bin/image.cgi?captchaService=CFG&id='.$link;
	// echo $link, "\n";
	
	copy((string)$nlink,'/tmp/'.$link.'.png');
	
}	
/*
// Find all images, print their text with the "<>" included
// foreach($html->find('img') as $e)
    // echo $e->outertext ;
// Find the DIV tag with an id of "myId"
// foreach($html->find('ol') as $e)
    // echo $e->innertext . '<br>';
	

	
//*********************************************************
//*********************************************************
// Find all "A" tags and print their HREFs
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';	

// Find all SPAN tags that have a class of "myClass"
foreach($html->find('span.myClass') as $e)
    echo $e->outertext . '<br>';

// Find all TD tags with "align=center"
foreach($html->find('td[align=center]') as $e)
    echo $e->innertext . '<br>';
    
// Extract all text from a given cell
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

*/




}

?>

