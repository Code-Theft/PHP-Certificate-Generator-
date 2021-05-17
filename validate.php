<?php

//read value from user
$name = $_REQUEST['name'];

header('Content-type: image/jpeg');

// Load And Create Image From Source
$our_image = imagecreatefromjpeg('assests/poster.jpg');

// Allocate A Color For The Text Enter RGB Value
$white_color = imagecolorallocate($our_image, 0, 0, 0);

// Set Path to Font File
$font_path =__DIR__ .'./assests/1.ttf';
$size=100;
$angle=0;
// Get image dimensions
$image_width = imagesx($our_image);
$image_height = imagesy($our_image);

$text_bound = imageftbbox($size, $angle, $font_path, $name);

//Get the text upper, lower, left and right corner bounds
$lower_left_x =  $text_bound[0]; 
$lower_left_y =  $text_bound[1];
$lower_right_x = $text_bound[2];
$lower_right_y = $text_bound[3];
$upper_right_x = $text_bound[4];
$upper_right_y = $text_bound[5];
$upper_left_x =  $text_bound[6];
$upper_left_y =  $text_bound[7];


//Get Text Width and text height
$text_width =  $lower_right_x - $lower_left_x; //or  $upper_right_x - $upper_left_x
$text_height = $lower_right_y - $upper_right_y; //or  $lower_left_y - $upper_left_y

//Get the starting position for centering
$start_x_offset = ($image_width - $text_width) / 2;
$start_y_offset = ($image_height - $text_height) / 2;

// Add text to image
imagettftext($our_image, $size, $angle, $start_x_offset, $start_y_offset, $white_color, $font_path, $name);

//create image
imagejpeg($our_image, 'fpdf/simple.jpg');
//store image
header("location: ./fpdf/index.php");
/*
header("Content-disposition: attachment; filename=".$our_image.".jpg");
  header('Content-Description: File Transfer');
  readfile("".$our_image.".jpg");
  */

// Clear Memory



  
?>

 


