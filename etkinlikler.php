<?php include "header.php";

$sql = "select * from events";
$result = $conn->query($sql);

?>


<div class="bg navPad">



            <div class="container>"
      
<div class="p-3 mb-2 "><h1 class="bScoo text-center "><?php echo $lang["etkinlikler"] ?></h1></div>
<div class="row" style="margin-top:30px;">
</div>
<div class="container ">

<?php while($event_list=$result->fetch_assoc()){ ?>
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



<div class="p-3 mb-2 text-light"></div><h1 class="display-10 text-center"></h1></div>


</div>

</div>
</div>



<?php include "footer.php" ;?>