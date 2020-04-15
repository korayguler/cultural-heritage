<?php
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php';

$sql = "select * from events";
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
                     <h2>Etkinlik Düzenle</h2>   
                        
                       <?php
                      

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Etkinlikleri buradan ekleyip düzenleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
    </div>
    <!-- /. ROW  -->
    <hr />

    <div class="panel panel-default">

      <div class="panel-heading">
        Etkinlik Ekleyin, Silin
      </div>


      <div class="panel-body">

        <div class="table-responsive">

          <table class="table table-striped w-aut">
            <thead>
              <tr>
                <th scope="col">#</th>
            

                <th scope="col">Etkinlik Başlık</th>
                <th scope="col">Etkinlik Açıklama</th>
                <th scope="col">Slider Link</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>
              


              </tr>
            </thead>
            <tbody>
              <?php while ($row_event = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row_event["id"]; ?></td>


                  <td><?php echo $row_event["title"]; ?></td>
                  <td ><?php echo substr($row_event["description"],0,70); ?></td>
                  <td><img class="img-thumbnail" width="200px" src='../<?php echo $row_event["img"] ?>'/> </td> 
                  <td><a href="etkinlik-duzenle.php?event_id=<?php echo $row_event['id']; ?>" class="btn btn-success">Düzenle</a></td>
                  <td><a href="settings/islem.php?event_id=<?php echo $row_event['id']; ?>&event_delete=ok" class="btn btn-warning">Sil</a></td>
                  
                
                </tr>
              <?php } ?>
            </tbody>
          </table>


          <div class="col-md-2  float-right">
            <a href="etkinlik-ekle.php" class="btn btn-success form-control ">Etkinlik Ekle </a>


          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php'; ?>