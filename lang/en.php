<?php

$sql= "select * from control";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$lang = array(
"ico" => "assets/img/static/site-ico.png",
"logo" => $row["c_logo_en"],
"dil" => "Türkçe",
"medyada_biz" => "On The Media",
"projeler" => "Project",
"etkinlikler" =>"Events",
"galeri" =>"Gallery",
"hakkimizda" =>"About Us",
"iletisim" => "Contact",
"envanter" => "Inventory",
"sosyal_medya" =>"Social Media",
"sosyal_medya_bilgi" =>$row["c_footer_social_en"],
"devamini_gor_button" =>"See More",
"atif" =>$row["c_atif_en"],
"hizli_menu" =>"Quick Menu",
"detaylar" => "Details",
"email"=>$row["c_email"],
"adres"=>$row["c_adres"],
"telefon"=>$row["c_telefon"],
"facebook"=>$row["c_facebook"],
"twitter" =>$row["c_twitter"],
"instagram"=>$row["c_instagram"],
"hakkimizda_aciklama"=>$row["c_about_en"],
"hakkimizda_p"=>$row["c_about_p"],
"c_bg"=>$row["c_bg"],
"sonraki"=>"Next",
"onceki"=>"Previous",




"c_send_message"=>"Send Message",
"c_name"=>"Name",
"c_mail"=>"Mail Adress",
"c_mesaj"=>"Message",
"c_gonder"=>"Send",
"c_konu" =>"Subject",
"eklenme_tarihi"=>"Date Of Assesment",

);
?>
