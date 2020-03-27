<?php include 'header.php'; 

$sql = "select * from content order by c_id DESC";
    $result = $conn->query($sql);
?>
<div class="bg navPad">




<div class="container-fluid">

    <h1 class="bScoo text-center "><?php echo $lang["envanter"] ?></h1>

      <div class="row" style="margin-top:30px;"> </div>
</div>

<div class="container">
            <div class="card-deck">
               
<?php while($row=$result->fetch_assoc()){ ?>
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
<?php include 'footer.php'; ?>
