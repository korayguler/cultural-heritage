<?php
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php';

$sql = "select * from media";
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
                     <h2>Haber Ekle/Sil</h2>   
                        
                       <?php
                      

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Haberleri buradan ekleyip düzenleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
    </div>
    <!-- /. ROW  -->
    <hr />

    <div class="panel panel-default">

      <div class="panel-heading">
        Haber Ekleyin, Silin
      </div>


      <div class="panel-body">

  
        <div class="table-responsive">

          <table class="table table-striped w-aut">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Başlık</th>

                <th scope="col">URL</th>
                <th scope="col">Düzenle</th>
               
                <th scope="col">Sil</th>


              </tr>
            </thead>
            <tbody>
              <?php while ($row_content = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row_content["id"]; ?></td>
                  <td><?php echo substr($row_content["title"],0,50); ?></td>

                  <td><?php echo substr($row_content["url"],0,80); ?></td>
                 

                  
                  
                 
                  <td><a href="haber-duzenle.php?id=<?php echo $row_content['id']; ?>&media_edit=ok" class="btn btn-success">Düzenle</a></td>

                  <td><a href="settings/islem.php?id=<?php echo $row_content['id']; ?>&media_delete=ok" class="btn btn-warning">Sil</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

          <div class="col-md-2">
            <a href="haber-ekle.php" class="btn btn-success form-control float-right ">Haber Ekle </a>
          </div>
         
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php'; ?>