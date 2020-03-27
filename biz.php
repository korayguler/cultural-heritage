<?php include 'header.php'; 
$result=$conn->query("select * from media order by id DESC")
?>
<div class="bg navPad">



            
<div class="container-fluid">
<div><h1 class="bScoo text-center "><?php echo $lang["medyada_biz"] ?></h1></div>
      <div class="row" style="margin-top:30px;">
      </div>
</div>

<div class="container ">
      <?php while($row=$result->fetch_assoc()){ ?>
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

<div class="p-3 mb-2 text-light"></div><h1 class="display-10 text-center"></h1></div>

</div>

</div>

</div>
</div>
<?php include 'footer.php'; ?>
