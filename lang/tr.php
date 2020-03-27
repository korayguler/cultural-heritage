<?php

$sql= "select * from control";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    
$lang = array(
"ico" => "assets/img/static/site-ico.png",
"logo" => $row["c_logo"],
"dil" => "English",
"medyada_biz" => "Medyada Biz",
"projeler" => "Projeler",
"etkinlikler" =>"Etkinlikler",
"galeri" =>"Galeri",
"hakkimizda" =>"Hakkımızda",
"iletisim" => "İletişim",
"envanter" => "Envanter",
"sosyal_medya" =>"Sosyal Medya",
"sosyal_medya_bilgi" =>$row["c_footer_social"],
"devamini_gor_button" =>"Devamını Gör",
"atif" =>$row["c_atif"],
"hizli_menu" =>"Hızlı Menü",
"detaylar" => "Detaylar",
"email"=>$row["c_email"],
"adres"=>$row["c_adres"],
"telefon"=>$row["c_telefon"],
"facebook"=>$row["c_facebook"],
"twitter" =>$row["c_twitter"],
"instagram"=>$row["c_instagram"],
"hakkimizda_aciklama"=>$row["c_about"],
"hakkimizda_p"=>$row["c_about_p"],
"c_bg"=>$row["c_bg"],
"c_send_message"=>"Mesaj Gönder",
"c_name"=>"Adınız",
"c_mail"=>"Mail Adresiniz",
"c_mesaj"=>"Mesajınız",
"c_gonder"=>"Gönder",
"c_konu" =>"Konu",
"sonraki"=>"Sonraki",
"onceki"=>"Önceki",

"eklenme_tarihi"=>"Eklenme Tarihi",



);
?>
