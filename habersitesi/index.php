<?php include "header.php"; ?>
<?php include 'baglan.php'; ?>
<?php 




  mysqli_query($baglanti, "SET NAMES UTF8");
$slider =mysqli_query($baglanti,"select * from slider");

$haber =mysqli_query($baglanti,"select * from haberler");
 


 ?>


  
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
             
             <?php while ($slidersor =  mysqli_fetch_array($slider)) {
               # code...
              ?>
              <div class="single_iteam"><img src="<?php echo $slidersor['haber_resmi']; ?>" alt="">
                <h2><a class="slider_tittle" href="single.php?haber_id=<?php echo $slidersor['haber_id']; ?>"><?php echo $slidersor['haber_basligi'] ; ?></a></h2>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Haberler</a> </h2>
           
            <div class="content_bottom_left">
              <ul class="small_catg">
                <?php while ($habersor =  mysqli_fetch_array($haber)) {
               # code...
                 
              ?>

                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="single2.php?haber_=<?php echo $habersor['haber_id']; ?>"><img src="<?php echo $habersor['haber_resmi']; ?>" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href='single2.php?haber_=<?php echo $habersor['haber_id'];?>'><?php echo $habersor['haber_basligi']; ?> </a></h4>
                      <p><?php echo $habersor['haber_icerigi'] ; ?> </p>
                    </div>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        
         
        </div>
      </div>
    
    
  </section>



<?php include "footer.php"; ?>