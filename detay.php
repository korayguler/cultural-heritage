<?php include "header.php"; 
$id=$_GET["id"];
$sql_data="select * from content where c_id='$id'";
$result=$conn->query($sql_data);
$row=$result->fetch_assoc();



?>
<style>
    .carousel-item{
        width:100%;
        height:500px;
        min-height:0;
    }
</style>

<div class="bg navPad">
<div class="container-fluid">
<div><h1 class="bScoo text-center "><?php if($_SESSION["lang"]=="tr") echo ($row["c_title"]); else echo substr($row["c_title_en"],0,48);?></h1></div>
      <div class="row" style="margin-top:30px;">
      </div>
</div>
<div class="container mt-3">

<div class="row">
  <div class=" col-md-6 ">

<div id="carousel-id" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    <?php 
    $sql_img="select * from photos where c_id=$id";
    $img_c=$conn->query($sql_img);
    $x=0;
    while($run_im=$img_c->fetch_assoc()){ ?>
    <div class="carousel-item detay <?=$x==0?' active':''?>"" >
      <img style="width:600px;height:400px"src="<?php echo "assets/uploads/content/".$run_im["url"]; ?>" alt="First slide" class="img-fluid">


     

    </div>
    <?php $x++;} ?>


    <p class="detay-next">
    <a class="detay-n" href="#carousel-id" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span> <?php echo $lang['onceki']?>
    </a>&emsp;
    <a class="detay-n" href="#carousel-id" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span> <?php echo $lang['sonraki']?>
    </a>
  </p>

  </div>
 
</div>

</div>
<div class=" col-md-6 more"><p><?php if($_SESSION["lang"]=="tr") echo ($row["c_description"]); else echo ($row["c_description_en"]);?></p></div>

</div>
</div>

<?php include "footer.php" ?>