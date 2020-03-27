<?php
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php'; 

if (!isset($_SESSION['admin_logged'])) {
    header('Location:login.php');
  }
  
?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
        <div class="col-md-12">
                     <h2>Fotoğraf Yükleyin</h2>   
                        
                       <?php
                      $durum=isset($_GET["durum"]);

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Buradan Fotoğraf Yükleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
        </div>

        <hr />


        <div class="panel panel-default ">
            <div class="panel-heading ">Galeriye Fotoğraf Yükleyin</div>
            <div class="panel-body ">
                <form method="post" action="settings/islem.php" enctype="multipart/form-data" class="form-horizonal row-border">
                   
                        <div class="form-group col-md-7">
                            <label>Görsel Seçiniz</label>
                            <input  type="file" id="image_file" name="upload_images" accept=".png,.jpg">
                        </div>
                       
                       
                    </div>
                    
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-success form-control  col-sm" name="gallery_add">Fotoğraf Yükle</button>
                    </div>
<br><br>
                    
                </form>
            </div>
        </div>

    </div>

</div>
<?php include 'footer.php'; ?>