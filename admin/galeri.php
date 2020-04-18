<?php
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php';

$sql = "select * from gallery";
$result = $conn->query($sql);
$durum=isset($_GET["durum"]);

if (!isset($_SESSION['admin_logged'])) {
  header('Location:login.php');
}


?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
    <div class="col-md-12">
                     <h2>Galeri Düzenle</h2>   
                        
                       <?php
                      

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Fotoğrafları galeriye buradan ekleyip düzenleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
    </div>
    <!-- /. ROW  -->
    <hr />

    <div class="panel panel-default">

      <div class="panel-heading">
        Fotoğraf Ekleyin, Silin
      </div>


      <div class="panel-body">

        <div class="table-responsive">

          <table class="table table-striped w-aut">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Eklenme Tarihi</th>

                <th scope="col">Görsel</th>
                <th scope="col">Düzenle</th>

                <th scope="col">Sil</th>


              </tr>
            </thead>
            <tbody>
              <?php while ($row_gallery = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row_gallery["id"]; ?></td>
                  <td><?php $timestamp = strtotime( time());
                        echo date("Y-m-d H:i:s", $row_gallery["date"]); ?></td>
                  <td><img class="img-thumbnail" width="200px" src='../<?php echo $row_gallery["url"] ?>'/> </td> 
                  <td><a href="galeri-duzenle.php?photo_id=<?php echo $row_gallery['id']; ?>" class="btn btn-success">Düzenle</a></td>
                  <td><a href="settings/islem.php?photo_id=<?php echo $row_gallery['id']; ?>&gallery_delete=ok" class="btn btn-warning">Sil</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>


          <div class="col-md-2  float-right">
            <a href="galeri-ekle.php" class="btn btn-success form-control ">Fotoğraf Ekle </a>


          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php'; ?>