<?php
// function get_nck($imei,$user,$pass)
// {
$token='389ef38f8ac0563c16d3c6b8a7b31bfcb9e892d5b03adf411777a5d439135002';
$next='captchaService=CFG&captchaParams=YToyOntzOjQ6InBhZ2UiO3M6MTI6ImRlc2ltbG9ja2FnZSI7czo0OiJkYXRhIjtzOjY4OiJbIjM4OWVmMzhmOGFjMDU2M2MxNmQzYzZiOGE3YjMxYmZjYjllODkyZDViMDNhZGY0MTE3NzdhNWQ0MzkxMzUwMDIiXSI7fQ%3D%3D&captchaSignature=4532228720-6a31c6290b5a1f324258bdceeddb194e74a92a7e&hash=2515375746-03b7170139cfa173db88d443cf4b106136904f13';
$modeLogged='false';
$operation='desimlockageEquipement';
$typeForm='mode-non-logue';
$simUnlockType='notLogged';
$email='bouha51@gmail.com';
$confirm_email='bouha51@gmail.com';
$imei='012336003128240';
$value='1-2-4-3-8-7-';
// $url= 'http://m.espaceclientv3.orange.fr/index.php?noscript=1&page=desimlockage';
// $url= 'http://b.espaceclientv3.orange.fr/desimlockage';
$url= 'http://b.espaceclientv3.orange.fr/ajax.php?token='.$token.'&next='.$next.'&modeLogged='.$modeLogged.'&operation='.$operation.'&typeForm='.$typeForm.'&simUnlockType='.$simUnlockType.'&email='.$email.'&confirm_email='.$confirm_email.'&imei='.$imei.'&value='.$value;
// $url= 'http://b.espaceclientv3.orange.fr/ajax.php?token=02a4e7b628d2b35f80f4959f06345fbc59684a0b7e96df8e0e617bfc20aa0ac6&next=captchaService=CFG&captchaParams=YToyOntzOjQ6InBhZ2UiO3M6MTI6ImRlc2ltbG9ja2FnZSI7czo0OiJkYXRhIjtzOjY4OiJbIjAyYTRlN2I2MjhkMmIzNWY4MGY0OTU5ZjA2MzQ1ZmJjNTk2ODRhMGI3ZTk2ZGY4ZTBlNjE3YmZjMjBhYTBhYzYiXSI7fQ%3D%3D&captchaSignature=7586827413-39d3b3e617b32ae4cf0c255519b31ffc09df1e92&hash=9722440488-e2b19e1258192934deb14001b2ffd26767d4c5be&modeLogged=false&operation=desimlockageEquipement&typeForm=mode-non-logue&simUnlockType=notLogged&email=bouha51@gmail.com&confirm_email=bouha51@gmail.com&imei=012336003128240&value=6-3-8-1-6-8-';


// $url= 'http://espace-client.sfr.fr/desimlockage/desimlocker.do?';
// $url= 'http://espace-client.sfr.fr/desimlockage/desimlocker.do?desimlockageContext.numIMEI=356429050220699&desimlockageContext.emailDeNotif=sfrteeam@gmail.com&desimlockageContext.emailDeNotifConfirm=sfrteeam@gmail.com#desimlock-page';
for($i=0;$i<10;$i++)
{
$fields  = Array(
	'token'=>'e1858495437d13fc5882421e2bbd0f3f853ca6c07a1cd1bf9e6be237fd423e2d',
	'next'=>'captchaService%3DCFG%26captchaParams%3DYToyOntzOjQ6InBhZ2UiO3M6MTI6ImRlc2ltbG9ja2FnZSI7czo0OiJkYXRhIjtzOjY4OiJbImUxODU4NDk1NDM3ZDEzZmM1ODgyNDIxZTJiYmQwZjNmODUzY2E2YzA3YTFjZDFiZjllNmJlMjM3ZmQ0MjNlMmQiXSI7fQ%253D%253D%26captchaSignature%3D3182099618-7c1fbe127080618e9f18e645e2280e5d9867e37c%26hash%3D7141578648-cfcded3c0487270bace4c538e21485e5af3402f5',
	'modeLogged'=>'false',
	'operation'=>'desimlockageEquipement',
	'typeForm'=>'mode-non-logue',
	'simUnlockType'=>'notLogged',
	'email'=>'bouha51@gmail.com',
	'confirm_email'=>'bouha51@gmail.com',
	'imei'=>'012336003128240',
	'value'=>'1-7-2-3-2-4-'
	// 'username'=>'0685859074',
	// 'password'=>'123456',
	// 'desimlockageContext.numIMEI'=>'356429050220699',
	// 'desimlockageContext.emailDeNotif'=>'sfrteeam@gmail.com',
	// 'desimlockageContext.emailDeNotifConfirm'=>'sfrteeam@gmail.com'
    );
    /*
        $ch = curl_init(); // init curl, and then setup your options
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERPWD,"0685859074:123456");
				curl_setopt ($ch, CURLOPT_POSTFIELDS,$fields);

		// curl_setopt($ch, CURLOPT_USERPWD,"0681509863:474WHP");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // returns the result - very important
        curl_setopt($ch, CURLOPT_HEADER, 0); // no headers in the output
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return page 1:yes
		curl_setopt($ch, CURLOPT_TIMEOUT, 200); // http request timeout 20 seconds
		curl_setopt ($ch, CURLOPT_POSTFIELDS,$fields);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects, need this if the url changes
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 3); //if http server gives redirection responce
		curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7");
		curl_setopt($ch, CURLOPT_COOKIEJAR,"/tmp/get_nck.txt"); // cookies storage / here the changes have been made

		curl_setopt($ch, CURLOPT_COOKIEFILE,"/tmp/get_nck.txt");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // false for https
		curl_setopt($ch, CURLOPT_ENCODING, "gzip"); 
				// curl_setopt($ch, CURLOPT_REFERER, $url);
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch); // execute the http request
        */
		$ch = curl_init(); // init curl, and then setup your options
        curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_USERPWD,$user.":".$pass)
		// curl_setopt($ch, CURLOPT_USERPWD,"0685859074:123456");
		curl_setopt($ch, CURLOPT_USERPWD,"0681509863:474WHP");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // returns the result - very important
        curl_setopt($ch, CURLOPT_HEADER, 0); // no headers in the output
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return page 1:yes
		curl_setopt($ch, CURLOPT_TIMEOUT, 200); // http request timeout 20 seconds
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects, need this if the url changes
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 3); //if http server gives redirection responce
		curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7");
		curl_setopt ($ch, CURLOPT_POSTFIELDS,$fields);
		curl_setopt($ch, CURLOPT_COOKIEJAR,"/tmp/get_nck.txt"); // cookies storage / here the changes have been made
		curl_setopt($ch, CURLOPT_COOKIEFILE,"/tmp/get_nck.txt");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // false for https
		curl_setopt($ch, CURLOPT_ENCODING, "gzip"); 
		$data = curl_exec($ch); // execute the http request
    echo $data;
	echo 'ok<br>';
	    // if($data)
		// {
		// $htmll = str_get_html($data);
		// $res=$htmll->find('b',1)->innertext;
		// $ress=$htmll->find('b',4)->innertext;
		// $nck=trim(substr($res,32));
	
		// }
}		  
       
	// return $nck;
// }
?>