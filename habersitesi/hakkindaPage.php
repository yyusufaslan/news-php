<?php include "header.php"; ?>
<?php include 'baglan.php'; ?>
<?php

    

    mysqli_query($baglanti, "SET NAMES UTF8");




    
    $haber = mysqli_fetch_array(mysqli_query($baglanti, "SELECT * FROM hakkinda "));
    echo "İletişim Bilgileri";
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
          
            <h2 class="post_titile"><?php echo $haber['hakkinda_icerigi'] ?></h2>
            
          </div>
        </div>
        
        
      </div>
     
    </div>
  </section>
</div>




<?php include "footer.php" ?>