<?php include 'baglan.php'; ?>
<?php
  


    mysqli_query($con, "SET NAMES UTF8");

 	$id = $_GET["haber_id"];
	
	
	// sending query
	//$sa = mysqli_query($baglanti,"DELETE FROM 'haberler' WHERE haber_id = $id");
	$sa = mysqli_query($con, "DELETE FROM slider WHERE haber_id = $id ");
	if (!$sa) {
		echo "silinemedi";
	}else{
		header("Location:http://localhost/habersitesi/admin/slider.php");
	}
	
?> 