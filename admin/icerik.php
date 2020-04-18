<?php
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php';

$sql = "select * from content";
$result = $conn->query($sql);
$durum=isset($_GET["durum"]);

$p_sql="select DISTINCT c_id from photos";
$r_img=$conn->query($p_sql);

if (!isset($_SESSION['admin_logged'])) {
  header('Location:login.php');
}


?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
    <div class="col-md-12">
                     <h2>İçerik Düzenle</h2>   
                        
                       <?php
                      

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>İçeriklerinizi buradan ekleyip düzenleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
    </div>
    <!-- /. ROW  -->
    <hr />

    <div class="panel panel-default">

      <div class="panel-heading">
        İçerik Ekleyin, Silin
      </div>


      <div class="panel-body">

  
        <div class="table-responsive">

          <table class="table table-striped w-aut">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Başlık</th>

                <th scope="col">Açıklama</th>
                <th scope="col">Tarih</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>


              </tr>
            </thead>
            <tbody>
              <?php while ($row_content = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row_content["c_id"]; ?></td>
                  <td><?php echo substr($row_content["c_title"],0,50); ?></td>

                  <td><?php echo substr($row_content["c_description"],0,80); ?></td>
                  <td><?php echo $row_content["c_date"]; ?></td>

                  
                  
                 
                  <td><a href="icerik-duzenle.php?c_id=<?php echo $row_content['c_id']; ?>" class="btn btn-success">Düzenle</a></td>

                  <td><a href="settings/islem.php?c_id=<?php echo $row_content['c_id']; ?>&content_delete=ok" class="btn btn-warning">Sil</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

          <div class="col-md-2">
            <a href="icerik-ekle.php" class="btn btn-success form-control float-right ">İçerik Ekle </a>
          </div>
         
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php'; ?>