
<?php include 'baglan.php'; ?>

<?php 


   
     if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($_POST)
{
 if ($_FILES["resim"]["size"]<1024*1024){//Dosya boyutu 1Mb tan az olsun
              if ($_FILES["resim"]["type"]=="image/jpeg"){//dosya tipi jpeg olsun
                
                $dosya_adi=$_FILES["resim"]["name"];
                //Dosyaya yeni bir isim oluşturuluyor
                $uret=array("as","rt","ty","yu","fg");
                $uzanti=substr($dosya_adi,-4,4);
                $sayi_tut=rand(1,10000);
                $yeni_ad="/habersitesi/images/".$uret[rand(0,4)].$sayi_tut.$uzanti;
                //Dosya yeni adıyla dosyalar klasörüne kaydedilecek
                if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
                  echo 'Dosya başarıyla yüklendi.';
                  //Bilgiler veri tabanına kaydedilsin
                 // $sorgu=mysql_query("insert into resimler (resim) values ('$yeni_ad')");
                
                }else{
                  echo 'Dosya Yüklenemedi!';
                }
              }else{
                echo 'Dosya yalnızca jpeg formatında olabilir!';
              }
            }else{      
              echo 'Dosya boyutu 1 Mb ı geçemez!';
         }}
    if (isset($_POST['yayinla'])) {

        





        $haberbasligi = $_POST['haber_basligi'];
        $habericerigi = $_POST['haber_icerigi'];
        $haberkategori = $_POST['haber_kategori'];
      

       $sa = mysqli_query($con,"INSERT INTO `slider`(`haber_basligi`, `haber_icerigi`, `haber_kategori`,`haber_resmi`) VALUES ('$haberbasligi', '$habericerigi', '$haberkategori','$yeni_ad' )");
        if (!$sa) {
            echo "başarısız";
        } else {
            echo "<p>Insert successfull";
        }

        header("Location:http://localhost/habersitesi/admin/slider.php");
    }


 ?>

<?php include "header.php" ?>

<?php include "sidebar.php" ?>




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
                           Yeni Haberin Özelliklerini Girebilirsiniz...
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form  method="post" role="form" action="sliderHaberEkleForm.php" enctype="multipart/form-data">
                                         
                                        <div class="form-group">
                                            <label>Haber Başlığı</label>
                                            <input style="width: 750px" class="form-control" name="haber_basligi" />
                                        </div>
                                         <div  class="form-group">
                                            <label>Haber İçeriği</label>
                                            <textarea style="height: 350px; width: 750px" class="form-control" name="haber_icerigi"></textarea>
                                        </div>
                                        <div  class="form-group">
                                            <label>Haber Kategori</label>
                                            <input style="width: 750px" class="form-control " name="haber_kategori" />
                                        </div>
                                         <div class="form-group" >   
                                           <label>Haber Görseli Ekle</label>
                                           <input type="file" name="resim"  class = "btn btn-default" />
                                        </div>

                                        <div  class="form-group" >   

                                             <button style="color: blue" type="submit" class = "btn btn-default" name="yayinla">Yayınla</button>
                                        </div>
                                    </form>
               
                             </div>
             
                        </div>
       
                    </div>

 <?php include "footer.php" ?>