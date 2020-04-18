
    <?php include 'header.php';
    $sql = "select * from slider order by slider_id DESC";
    $result = $conn->query($sql);
    kimOnline(session_id());

    ?>
    <header>


<!--Carousel Wrapper-->
<div id="carousel_nexty" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <?php $x=0; while($row_slider = $result->fetch_assoc()) { ?>
    <div class="carousel-item <?=$x==0?' active':''?>"">
      <div class="view">
        <img class="d-block w-100" src="<?php echo $row_slider['slider_img_url']?>"
          alt="">
        <div class="mask rgba-black-light"></div>
      </div>
      
      <?php if($row_slider["slider_link"]!=null){  ?>
      <div class="carousel-caption">
        <h3 class="h3-responsive mHeads"><?php if($_SESSION["lang"]=="tr") echo $row_slider["slider_title"]; else echo $row_slider["slider_title_en"];  ?></h3>
        <p class="lead"><?php echo $row_slider["slider_description"]; ?></p>
        <a target="_blank" href='<?php echo $row_slider["slider_link"]; ?>'type="button" class="btn btn-secondary btn-lg mButton"><?php echo $lang["devamini_gor_button"];  ?></a>
      </div>
  
      <?php } ?>
 
    </div>
  <?php $x++; } ?>
    
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev slider-controller" href="#carousel_nexty" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next  slider-controller" href="#carousel_nexty" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

 
    <div class="bg">

<div class="blank-wrap"></div>
    
       

        <div class="container-fluid hScoo">
            <h3 class="display-10 text-center"><?php echo $lang["etkinlikler"]; ?></h3>

            <div class="container ">
            <?php
            $event_list_q=$conn->query("select * from events limit 1");
            
            while($event_list=$event_list_q->fetch_assoc()){ ?>
<div class="card mb-3" style="background: rgba(0, 0, 0, 0.5)!important;">
  <div class="row">
    <div class="col-md-4" >
      <img src="<?php echo $event_list["img"] ?>" style="height:250px;width:300px" class="card-img" alt="...">
    </div>
    <div class="col-md-8" >
      <div class="card-body " >
        <h4 class="card-title text-light"><?php if($_SESSION["lang"]=="tr") echo substr($event_list["title"],0,48); else echo substr($event_list["title_en"],0,48);?></h4>
        <p class="card-text"  text-light><small class=" text-light"><?php echo $event_list["date"] ?></small></p>
        <p class="card-text  text-light"><?php if($_SESSION["lang"]=="tr") echo ($event_list["description"]); else echo ($event_list["description_en"]);?></p>
      
      </div>
    </div>
  </div>

</div>
<?php } ?>

            </div>
        



        
            <h3 class="display-10 text-center"><?php echo $lang["envanter"] ?></h3>
       
        <!--CARD SLIDER AREA-->

        
        <div class="container">
        <div class="card-deck">
               
               <?php 
               $result=$conn->query("select * from content order by c_id DESC limit 6");
               
               while($row=$result->fetch_assoc()){ ?>
                               <div class="col-sm-6 col-md-4 col-lg-4 ">
                                   <div class="card text-left mb-5"style="background: rgba(0, 0, 0, 0.5)!important;">
               
                                      <a  href="detay.php?id=<?php echo $row["c_id"] ?>" class="img-link"><img style="height:250px; "src="assets/uploads/content/<?php
                                      $id=$row["c_id"];
                                      $sql_im="select url from photos where c_id=$id order by rand()";
                                      $result2 = $conn->query($sql_im);
                                      $row2=$result2->fetch_assoc();
                                      echo $row2["url"];
                                      
                                      ?>" class="card-img-top" alt="..."></a>
                                          <div class="card-body">
                                   <h6 class="card-title text-light"><?php if($_SESSION["lang"]=="tr") echo substr($row["c_title"],0,48); else echo substr($row["c_title_en"],0,48);?></h6>
                                   <p class="card-text text-light"><?php if($_SESSION["lang"]=="tr") echo substr($row["c_description"],0,120)." ..."; else echo substr($row["c_description_en"],0,120)."...";?></p>
               </div>   
                                   <div class="card-footer">
                                           <small class="text-muted text-center ml-3">İnceleme Tarihi:  <?php echo "  ".str_replace("-"," / ",$row["c_date"]);?></small>
                                           <a class="card-link float-right" href="detay.php?id=<?php echo $row["c_id"] ?>"><?php  echo $lang["detaylar"];?> </a>
                                       </div>
                                   </div>
                               </div>
               <?php } ?>
                              
               </div>
               
               </div>


               <h3 class="display-10 text-center"><?php echo $lang["medyada_biz"] ?></h3>
                <div class="container ">

                
               <?php
               
               $result=$conn->query("select * from media order by id desc limit 1");
               while($row=$result->fetch_assoc()){ ?>
<div class="card mb-4 " style="background: rgba(0, 0, 0, 0.5)!important;">
 
    <div class="col-md-12 text-center biz " >
      <div class="card-body " >
      <i>  <h4 class="card-title text-light"><?php if($_SESSION["lang"]=="tr") echo ($row["title"]); else echo ($row["title_en"]);?></h4>
           </i>
        <a class="biz-link" target="_blank" href="<?php echo $row["url"] ?>"><i class="card-text"  ><h5 class=""><?php echo $row["url"] ?></h5></p></a>
        
      
      </div>
    </div>


</div>
      <?php } ?>
                </div>

        </div>



    </div>


    <?php include 'footer.php' ?>



