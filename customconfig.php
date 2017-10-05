<?php
session_start();
error_reporting(0);
ob_start();
//session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("tshirt", $con);
?>
