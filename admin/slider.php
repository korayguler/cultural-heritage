<?php
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php';

$sql = "select * from slider";
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
                     <h2>Slider Düzenle</h2>   
                        
                       <?php
                      

                       if($durum=="ok"){

                       ?>
                       <h5>İşlem Başarılı...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Sliderlerinizi buradan ekleyip düzenleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
    </div>
    <!-- /. ROW  -->
    <hr />

    <div class="panel panel-default">

      <div class="panel-heading">
        Slider Ekleyin, Silin
      </div>


      <div class="panel-body">

        <div class="table-responsive">

          <table class="table table-striped w-aut">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sıra</th>

                <th scope="col">Slider Başlık</th>
                <th scope="col">Slider Açıklama</th>
                <th scope="col">Slider Link</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>


              </tr>
            </thead>
            <tbody>
              <?php while ($row_slider = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row_slider["slider_id"]; ?></td>
                  <td><?php echo $row_slider["slider_sq"]; ?></td>

                  <td><?php echo $row_slider["slider_title"]; ?></td>
                  <td><?php echo $row_slider["slider_description"]; ?></td>
                  <td><img class="img-thumbnail" width="200px" src='../<?php echo $row_slider["slider_img_url"] ?>'/> </td> 
                  <td><a href="slider-duzenle.php?slider_id=<?php echo $row_slider['slider_id']; ?>" class="btn btn-success">Düzenle</a></td>
                  <td><a href="settings/islem.php?slider_id=<?php echo $row_slider['slider_id']; ?>&slider_delete=ok" class="btn btn-warning">Sil</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>


          <div class="col-md-2  float-right">
            <a href="slider-ekle.php" class="btn btn-success form-control ">Slider Ekle </a>


          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php'; ?>