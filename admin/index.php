<?php 
include 'settings/connect_db.php';
include 'header.php';
include 'sidebar.php'; 

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

      <div class="main-temp-back col-md-12 " style="margin-bottom:10px;">
          
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

    </div>
           
            </div>

<?php include 'footer.php'; ?>