

<?php include "header.php" ?>

<?php include "sidebar.php" ?>
<?php include 'baglan.php'; ?>
<?php

   

    mysqli_query($con, "SET NAMES UTF8");



    $id = $_GET["haber_id"];

    $haber = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM slider WHERE haber_id = $id"));
    echo $haber["haber_basligi"];
    if(!isset($haber)){
        header("Location:/habersitesi/");
    }

     if (isset($_POST['save'])) {
        $haberbasligi = $_POST['haberBasligi'];
        $habericerigi = $_POST['haberIcerigi'];
        $haberkategori = $_POST['haberKategori'];

       $sa = mysqli_query($con,"UPDATE `slider` SET `haber_basligi`=[$haberBasligi],`haber_icerigi`=[habericerigi],`haber_kategori`=[haberkategori] WHERE $id");
        if (!$sa) {
            echo "başarısız";
        } else {
            echo "<p>Insert successfull";
        }
        header("Location:/index.php/");
    }




?>






 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Haber Yönetimi</h2>   
                        <h5>Haber düzenleme, ekleme, silme bölümüne hoşgeldiniz... </h5>
                       <div  class="form-group" >
                                             
                        <label>Yeni Haber Ekle</label><br>
                        <button type="button" onclick="location.href='yeniHaberEkle.php'" class="btn btn-default">Yeni Ekle</button>

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
                                    <form action="sliderHaberDuzenleForm.php" role="form">
                                        <div  class="form-group">
                                            <label>Haber Başlığı</label>
                                            <input style="width: 750px" class="form-control" name="haberBasligi" value="<?php echo $haber['haber_basligi']; ?>" />
                                        </div>
                                         <div  class="form-group">
                                            <label>Haber İçeriği</label>
                                            <textarea style="height: 350px; width: 750px" name="haberIcerigi" class="form-control"><?php echo $haber['haber_icerigi']; ?></textarea>
                                        </div>
                                        <div  class="form-group">
                                            <label>Haber Kategori</label>
                                            <input style="width: 750px" class="form-control" name="haberKategori" value="<?php echo $haber['haber_kategori']; ?>"/>
                                        </div>


                                          <div  class="form-group" >   

                                             <button style="color: blue" type="submit" name="save" class = "btn btn-default">Kaydet</button>
                                        </div>
                                        <div class="form-group" >   
                                           <label>Haber Görseli Ekle</label>
                                           <input type="file" name=""  class = "btn btn-default" />
                                        </div>
                                    </form>
               
                             </div>
             
                        </div>
       
                    </div>


<?php include "footer.php" ?>