<?php include 'baglan.php'; ?>
<?php 

$habersor =mysqli_query($con,"SELECT * FROM slider");



 ?>


<?php include "header.php" ?>

<?php include "sidebar.php" ?>





        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Haber Yönetimi</h2>   
                        <h5>Haber düzenleme, ekleme, silme bölümüne hoşgeldiniz... </h5>
                       <div  class="form-group" >
                                             
                        <label>Yeni Haber Ekle</label><br>
                        <button type="button" onclick="location.href='sliderHaberEkleForm.php'" class="btn btn-default">Yeni Ekle</button>

                    </div>
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Yayında olan haberler...
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form  method="post" role="form">
                                         

                                       <?php 
                                        while ($habercek = mysqli_fetch_array($habersor) ) {

                                       ?>
                                        
                                        <div style="float: left;" class="form-group" >
                                             
                                             <label>Düzenle  </label><br>
                                             <a href='sliderHaberDuzenleForm.php?haber_id=<?php echo $habercek['haber_id']; ?>'" class="btn btn-default">D</a>
                                        </div>

                                         <div style="float: left;" class="form-group" >
                                             
                                             <label>Sil</label><br>
                                             <a type="submit" onclick="location.href='slidersil.php?haber_id=<?php echo $habercek['haber_id']; ?>'" class="btn btn-default">S</a>
                               
                                        </div>

                                        
                                         <div style="float: left;" class="form-group">
                                            <label>Haber Başlığı</label>
                                            <input class="form-control" value="<?php echo $habercek['haber_basligi']; ?>" />
                                           
                                       
                                         </div>
                                         <div style="float: left;" class="form-group">
                                            <label>Haber Kategori</label>
                                            <input class="form-control" value="<?php echo $habercek['haber_kategori']; ?>" />
                                         
                                         </div>

                                         <div style="clear: both;"></div>
                                         <?php } ?>
                                    </form>
                                        
                             </div>
             
                        </div>
       
                    </div>
            
<?php include "footer.php" ?>