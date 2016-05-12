<?php
//path to directory to scan. i have included a wildcard for a subdirectory
$directory = "./uploads/";
//get all image files with a .jpg extension.
$images = glob("" . $directory."*.jpeg");
//$images .= glob("".$directory."*.png");
$jpg = glob("" . $directory."*.jpg");
$png = glob("" . $directory."*.png");
$gif = glob("" . $directory."*.gif");



$images =array_merge($images, $jpg);
$images =array_merge($images, $png);
$images =array_merge($images, $gif);

//$img = base_url().substr($images[0],2);//base_url()."uploads/8bfa38df918b6ad8a2191110b5d37dc4.jpg";
foreach ($images as $img){
	$img= base_url().substr($img,2);
    echo "<img src='$img' width=150px height=150px/> ";
}
//}

?>