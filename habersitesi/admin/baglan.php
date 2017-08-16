<?php 

ob_start();
session_start();

 ?>

 <?php 

$username ="root";
$password ="12345";
$server ="localhost";
$database ="habersitesi";


	$con = mysqli_connect('localhost','root','', "$database");
	mysqli_query($con, "SET NAMES UTF8");

  ?>