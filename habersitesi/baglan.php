

 <?php 

$username ="root";
$password ="12345";
$server ="localhost";
$database ="habersitesi";


	$baglanti = mysqli_connect('localhost','root','', "$database");
	mysqli_query($baglanti, "SET NAMES UTF8");

  ?>