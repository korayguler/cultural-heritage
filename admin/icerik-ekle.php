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
                     <h2>İçerik Ekle</h2>   
                        
                       <?php
                      $durum=isset($_GET["durum"]);

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Buradan içerik ekleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
        </div>

        <hr />


        <div class="panel panel-default ">
            <div class="panel-heading ">İçerik Ekleyin</div>
            <div class="panel-body ">
                <form method="post" action="settings/islem.php" enctype="multipart/form-data" class="form-horizonal row-border">

                    <div class="form-group col-md-7 ">
                        <label>İçerik Başlık</label>
                        <input type="text" required="" class="form-control" name="c_title" placeholder="İçerik için başlığı giriniz">
                    </div>

                    <div class="form-group col-md-7 ">
                        <label>İçerik Başlık : İngilizce</label>
                        <input type="text" required="" class="form-control" name="c_title_en" placeholder="İçerik için başlığı giriniz">
                    </div>

                    <div class="form-group col-md-7">
                        <label>İçerik Açıklama</label>
                        <textarea  required="" class="form-control" name="c_description" placeholder="İçerik açıklamasını giriniz"></textarea>
                    </div>

                    <div class="form-group col-md-7">
                        <label>İçerik Açıklama : İngilizce</label>
                        <textarea  required="" class="form-control" name="c_description_en" placeholder="İçerik açıklamasını giriniz : ingilizce"></textarea>
                    </div>

                    <div class="form-group col-md-7">
                        <label>İçerik Tarih Url</label>
                        <input type="date" class="form-control" name="c_date" placeholder="tarihi seçiniz">
                    </div>

                   
                        <div class="form-group col-md-7">
                            <label>Görselleri Seçiniz </label>
                            <input  type="file" multiple="multiple" id="image_file[]" name="upload_images[]" accept=".png,.jpg">
                        </div>
                       
                       
                    </div>
                    
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-success form-control  col-sm" name="content_add">İçerik Ekle </button>
                    </div>
<br><br>
                    
                </form>
            </div>
        </div>

    </div>

</div>
<?php include 'footer.php'; ?>