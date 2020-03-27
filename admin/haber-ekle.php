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
                     <h2>Haber Ekle</h2>   
                        
                       <?php
                      $durum=isset($_GET["durum"]);

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Buradan haber ekleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
        </div>

        <hr />


        <div class="panel panel-default ">
            <div class="panel-heading ">Haber Ekleyin</div>
            <div class="panel-body ">
                <form method="post" action="settings/islem.php"  class="form-horizonal row-border">

                    <div class="form-group col-md-7 ">
                        <label>Haber Başlık</label>
                        <input type="text" required="" class="form-control" name="title" placeholder="Haber için başlığı giriniz">
                    </div>

                    <div class="form-group col-md-7 ">
                        <label>Haber Başlık : İngilizce</label>
                        <input type="text" required="" class="form-control" name="title_en" placeholder="Haber için başlığı giriniz">
                    </div>

                 

                    <div class="form-group col-md-7">
                        <label>Haber Kaynak Url</label>
                        <input type="text" class="form-control" name="url" placeholder="Kaynağı Giriniz...">
                    </div>

                   
                       
                    </div>
                    
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-success form-control  col-sm" name="media_add">Haber  Ekle </button>
                    </div>
<br><br>
                    
                </form>
            </div>
        </div>

    </div>

</div>
<?php include 'footer.php'; ?>