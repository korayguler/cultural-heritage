<?php 
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php'; 
if(isset($_GET["durum"])=="ok") echo "<script>alert('İşlem Başarılı');</script>";
if(isset($_GET["giris_engel"])=="t") echo"<script>alert('Giriş İznine Sahip Değilsiniz !!')</script>";
if(!isset($_SESSION['admin_logged'])){
    header('Location:login.php');
}


?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Kontrol Paneli   </h2>   
                        <h4>Hoşgeldin <?php echo $_SESSION['admin_logged'] ?> , seni görmek güzel</h4>
                       
                    </div>
                   
             </div>
             <hr />

             <div class="main-temp-back col-md-12 " style="margin-bottom:10px;">
          
              <div class="row bg-color-green ">
                <div class="col-xs-6 text-left"> <i class="fa fa-eye fa-2x " style="line-height:1.6;"></i> <span style="line-height:1.5; font-size:20px"> Ziyaretçiler</span> </div>
                <div class="col-xs-6 ">
                  <div class="text-temp"> <?php 
                  
                 
                    global $conn;
                    $query ='SELECT count(DISTINCT id) as total from sessions ';
                    $results = $conn->query($query);	
                   $row=$results->fetch_object();
                                            
                    echo $row->total;;          
                  
                  ?> </div>
                </div>      
            </div>
          </div>

          <div class="main-temp-back col-md-12" style="margin-bottom:10px;">
          
          <div class="row bg-color-blue">
            <div class="col-xs-6 text-left"> <i class="fa fa-edit  fa-2x" style="line-height:1.6;"></i> <span style="line-height:1.5; font-size:20px"> Slider</span> </div>
            <div class="col-xs-6">
              <div class="text-temp"> <?php 
              
             
                global $conn;
                $query ='SELECT count(*) as total from slider ';
                $results = $conn->query($query);	
               $row=$results->fetch_object();
            
               
                
                echo $row->total;;
         
              
              ?> </div>
            </div>
       
        </div>
      </div>

      <div class="main-temp-back col-md-12 " style="margin-bottom:10px;">
          
          <div class="row bg-color-blue">
            <div class="col-xs-6 text-left"> <i class="fa fa-edit  fa-2x " style="line-height:1.6;"></i> <span style="line-height:1.5; font-size:20px"> Envanter</span> </div>
            <div class="col-xs-6 ">
              <div class="text-temp"> <?php 
              
             
                global $conn;
                $query ='SELECT count(c_id) as total from content ';
                $results = $conn->query($query);	
               $row=$results->fetch_object();
                                        
                echo $row->total;;          
              
              ?> </div>
            </div>      
        </div>
      </div>    
      
      <div class="main-temp-back col-md-12 " style="margin-bottom:10px;">
          
          <div class="row bg-color-blue">
            <div class="col-xs-6 text-left"> <i class="fa fa-edit  ye fa-2x " style="line-height:1.6;"></i> <span style="line-height:1.5; font-size:20px"> Etkinlik</span> </div>
            <div class="col-xs-6 ">
              <div class="text-temp"> <?php 
              
             
                global $conn;
                $query ='SELECT count(id) as total from events ';
                $results = $conn->query($query);	
               $row=$results->fetch_object();
                                        
                echo $row->total;;          
              
              ?> </div>
            </div>      
        </div>
      </div>  

      <div class="main-temp-back col-md-12 " style="margin-bottom:10px;">
          
          <div class="row bg-color-blue">
            <div class="col-xs-6 text-left"> <i class="fa fa-edit  fa-2x " style="line-height:1.6;"></i> <span style="line-height:1.5; font-size:20px"> Galeri</span> </div>
            <div class="col-xs-6 ">
              <div class="text-temp"> <?php 
              
             
                global $conn;
                $query ='SELECT count(id) as total from gallery ';
                $results = $conn->query($query);	
               $row=$results->fetch_object();
                                        
                echo $row->total;;          
              
              ?> </div>
            </div>      
        </div>
      </div>  

      <div class="main-temp-back col-md-12  " style="margin-bottom:10px;">
          
          <div class="row bg-color-blue">
            <div class="col-xs-6 text-left"> <i class="fa fa-edit fa-2x " style="line-height:1.6;"></i> <span style="line-height:1.5; font-size:20px"> Haber</span> </div>
            <div class="col-xs-6 ">
              <div class="text-temp"> <?php 
              
             
                global $conn;
                $query ='SELECT count(id) as total from media ';
                $results = $conn->query($query);	
               $row=$results->fetch_object();
                                        
                echo $row->total;;          
              
              ?> </div>
            </div>      
        </div>
      </div>  

 <?php if($adminRank==0){ ?>

  <div class="panel-body">
                <form method="post" action="settings/islem.php" enctype="multipart/form-data" class="form-horizonal row-border">

                    <div class="form-group col-md-6 ">
                        <label>Yönetici Giriş Adı</label>
                        <input type="text" required="" class="form-control" name="admin_username" placeholder="yönetici giriş adını yazınız">
                    </div>

                    <div class="form-group col-md-6 ">
                        <label>Yönetici Mail</label>
                        <input type="text" required="" class="form-control" name="admin_mail" placeholder="yönetici maili giriniz">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label>Yönetici Rank</label>
                        <input type="text" value ="1"required="" class="form-control" name="admin_rank" placeholder="yönetici Rank [0] ise  yönetici ekler site ayarlarını yapabilir. ">
                        <b class="text-primary"><small>Rankları 1 veya 0 olarak ekleyin 0:tam admin 1:içerik admin</small></b>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label>Yönetici Şifre</label>
                        <input type="text" required="" class="form-control" name="admin_pass" placeholder="yönetici şifre">
                    </div>

                    <div class="form-group col-md-5">
                           <button type="submit" class="btn btn-success form-control  col-sm" name="admin_add">Ayarları Kaydet </button>
                            </div>

                    </form>
                    </div>

                    <table class="table table-striped w-aut">
            <thead>
              <tr>
    
                <th scope="col">Username</th>

           
                <th scope="col">MAIL</th>
               
                <th scope="col">Sil</th>


              </tr>
            </thead>
            <tbody>
              <?php 
              
              $fsql="select * from admins";
              $result=$conn->query($fsql);
              while ($row_adm = $result->fetch_assoc()) { ?>
                <tr>
                  
                  <td><?php echo substr($row_adm["admin_username"],0,50); ?></td>

                  <td><?php echo substr($row_adm["admin_mail"],0,80); ?></td>
                 

  
              
                 <td><a href="settings/islem.php?id=<?php echo $row_adm['admin_id']; ?>&admin_delete=ok" class="btn btn-warning">Sil</a></td>
                
                </tr>
              <?php }  ?>
            </tbody>
          </table>


 <?php } ?>
    </div>
           
            </div>

<?php include 'footer.php'; ?>