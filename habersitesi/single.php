<?php include "header.php"; ?>
<?php include 'baglan.php'; ?>
<?php

  
    mysqli_query($baglanti, "SET NAMES UTF8");
    $id = $_GET["haber_id"];
     $haber = mysqli_fetch_array(mysqli_query($baglanti, "SELECT * FROM slider WHERE haber_id = $id"));
    echo $haber["haber_basligi"];
    if(!isset($haber)){
        header("Location:/habersitesi/");
    }
 ?>   
<div id="navarea">
   
  </div>
  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
          
            <h2 class="post_titile"><?php echo $haber['haber_basligi'] ?></h2>
            <div class="single_page_content">
              
              <img class="img-center" src="<?php echo $haber['haber_resmi'] ?>" alt="">
              <p><?php echo $haber['haber_icerigi'] ?> </p>
              
            </div>
          </div>
        </div>
        
        
      </div>
     
    </div>
  </section>
</div>




<?php include "footer.php" ?>