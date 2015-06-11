<?php

	if(!isset($_SESSION)){ 
		session_start(); 
	}
	$width=100; //width of this pic
	$height=39; //height of this pic
	$length=3;//lengh o the verification code
	$code=getcode($length); //get the random code
	$this->load->library('session');
	$this->session->set_userdata('verifyCode', $code);

	
	$img=imagecreate($width,$height);
	$bgcolor=imagecolorallocate($img,240,240,240);
	$rectangelcolor=imagecolorallocate($img,150,150,150);
	imagerectangle($img,1,1,$width-1,$height-1,$rectangelcolor);
	for($i=0;$i<$length;$i++){
		$codecolor=imagecolorallocate($img,mt_rand(50,200),mt_rand(50,128),mt_rand(50,200));
		$angle=rand(-20,20);
		$charx=$i*17+9;
		$chary=($height+16)/2+rand(-1,1);
		imagettftext($img,15,$angle,$charx,$chary,$codecolor,'C:\WINDOWS\Fonts\comic.TTF',
		$code[$i]);
	}
	for($i=0;$i<20;$i++){
		$linecolor=imagecolorallocate($img,mt_rand(0,250),mt_rand(0,250),mt_rand(0,250));
		$linex=mt_rand(1,$width-1);
		$liney=mt_rand(1,$height-1);
		imageline($img,$linex,$liney,$linex+mt_rand(0,4)-2,$liney+mt_rand(0,4)-2,$linecolor);
	}
	for($i=0;$i<100;$i++){
		$pointcolor=imagecolorallocate($img,mt_rand(0,250),mt_rand(0,250),mt_rand(0,250));
		imagesetpixel($img,mt_rand(1,$width-1),mt_rand(1,$height-1),$pointcolor);
	}
	function getcode($length){//generate the random code
		$key='';
		$pattern = '23456789';// the pool of all codes
		for($i=0;$i<$length;$i++) {
			$key .= $pattern{mt_rand(0,7)};
		}
		return $key;
	}
	
	ob_clean();
	header('Content-type:image/png');
	imagepng($img);


?>