<?php include 'header.php'; 

if(isset($_POST["mesaj"])){

$konu=$_POST["subject"];
$mesaj="<p>".$_POST["message"]."</p>";
$baslik="From:" .$_POST["name"]. "<".$_POST["mail"].">\r\n";
$baslik="Reply-to:".$row["c_email"]."\r\n";
$baslik.="Content-type: text/html\r\n";


if(mail($row["c_email"],$konu,$mesaj,$baslik)){
    Header("Location:iletisim.php?durum=ok ");
}else{
    Header("Location:iletisim.php?durum=error ");
    error_reporting(1);

}



}



?>
<div class="bg navPad">

<div class="container-fluid">
<div><h1 class="bScoo text-center "><?php echo $lang["iletisim"] ?></h1></div>
      <div class="row" style="margin-top:30px;">
      </div>
</div>
      
    

<div class="container ">



<div class="row">
<!-- Material form contact -->
<div class="mForm col-md-6">
<div class="card ">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong><?php echo $lang["c_send_message"]?></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5
 pt-0">

        <!-- Form -->
        <form class="text-left" style="color: #757575;" method="post" action="">

            <!-- Name -->
            <div class="md-form mt-3 ">
            <label for="materialContactFormName"><?php echo $lang["c_name"]?></label>

                <input name="name"  required=""type="text" id="materialContactFormName" class="form-control">
            </div>


  <!-- E-mail -->
  <div class="md-form">
            <label for="materialContactFormEmail"><?php echo $lang["c_konu"]?></label>

                <input name="subject" required="" type="text" id="materialContactFormEmail" class="form-control">
            </div>

            <!-- E-mail -->
            <div class="md-form">
            <label for="materialContactFormEmail"><?php echo $lang["c_mail"]?></label>

                <input name="mail" required="" type="email" id="materialContactFormEmail" class="form-control">
            </div>

        
        

            <!--Message-->
            <div class="md-form">
            <label for="materialContactFormMessage"><?php echo $lang["c_mesaj"]?></label>

                <textarea required=""name="message" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
            </div>

     
            <!-- Send button -->
            <button class="btn btn-rounded btn-block z-depth-0 my-4 waves-effect" name="mesaj" type="submit"><?php echo $lang["c_gonder"]?></button>

        </form>
        <!-- Form -->

    </div>

</div>


</div>


<div class="mInfo col-md-6 col-xs-12 location about-text text-white">
                    <h5 class="mt-lg-0 mt-sm-4"><?php echo $lang["iletisim"]; ?></h5>
                    <p><?php echo $lang["adres"] ?></p>
                    <p><i class="fa fa-envelope-o mr-3"></i><?php echo $lang["email"] ?></p>
                    <p class=""><i class="fa fa-phone mr-3"></i><?php echo $lang["telefon"]?></p>
                    
                    </div>   


</div>
</div>
</div>
<?php include 'footer.php'; ?>
