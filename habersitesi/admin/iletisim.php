

<?php include 'baglan.php'; ?>
<?php 


   
     if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  $sql =mysqli_query($con,"SELECT * FROM iletisim ");
  $bilgicek = mysqli_fetch_array($sql);


    if (isset($_POST['iletisim_save'])) {
        $iletisimicerigi = $_POST['iletisim_icerigi'];
        
       $sa = mysqli_query($con,"UPDATE `iletisim` SET `iletisim_icerigi`=[$iletisimicerigi] WHERE iletisim_id=0 ");
        if (!$sa) {
            echo "başarısız";
        } else {
            echo "<p>Insert successfull";
        }

      //  header("Location:http://localhost/habersitesi/admin/haberForm.php");
    }


 ?>

<?php include "header.php" ?>

<?php include "sidebar.php" ?>




 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Sayfa Yönetimi</h2>   
                        
                       
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           İletişim Bilgilerini Güncelleyebilirsiniz..
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form  method="post" role="form" action="iletisim.php">
                                         
                                       
                                         <div  class="form-group">
                                            <label>İletişim Bilgileri</label>
                                            <textarea style="height: 350px; width: 750px" class="form-control" name="iletisim_icerigi" ><?php echo $bilgicek['iletisim_icerigi']; ?></textarea>
                                        </div>
                                       
                                       

                                        <div  class="form-group" >   

                                             <button style="color: blue" type="submit" class = "btn btn-default" name="iletisim_save">Yayınla</button>
                                        </div>
                                    </form>
               
                             </div>
             
                        </div>
       
                    </div>

 <?php include "footer.php" ?>