<?php
include('customconfig.php');

$filterData=substr($_POST['hidden_data'], strpos($_POST['hidden_data'], ",")+1); //Get the base-64 string from data
$decodeData=base64_decode($filterData); //Decode the string
file_put_contents('screenshot.png', $decodeData); //Save the image

$_SESSION['color'] = $_POST['colorofshirt'];
//echo '<img src="'.$_POST['hidden_data'].'" />';
$_SESSION['front'] = $_POST['hidden_data'];
$upload_dir = "upload/";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . mktime() . ".png";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
 $insertsql="insert into picture SET sesid = '1' ,	front = '".$file."'";
 mysql_query($insertsql) or mysql_error();

header('Location: index.php');
//echo "front";


