<?php 
include 'connect_db.php';

if (!isset($_SESSION['admin_logged'])) {
    header('Location:../login.php');
  }
  

if(isset($_POST['gallery_add'])){

    @$name=$_FILES['upload_images']['name'];
    $uploads_dir="../../assets/uploads/gallery";
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['upload_images']['tmp_name'];

    $r1=rand(20000,32000);
    $r2=rand(20000,32000);

    $img_name= $r1.$r2;
    $dirr=substr($uploads_dir,6)."/".$img_name.".".$f_type;


$add_photo=$conn->query("insert into gallery(url,date)values(
    '".$dirr."',
    '".time()."')");
    $count = $add_photo->affected_rows;


    if($add_photo){
        @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
        Header('Location:../galeri-ekle.php?durum=ok');
    }else
        Header('Location:../galeri-ekle.php?durum=error');


  }

if(isset($_POST['update_settings'])){
    $uploads_dir="../../assets/img/static";
    $id=0;
    if($_FILES['c_logo']['size'] != 0){

    @$name=$_FILES['c_logo']['name'];
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['c_logo']['tmp_name'];
    $img_name= "logo";
    $c_logo=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    if(file_exists($uploads_dir."/".$img_name.".jpg"))
    unlink($uploads_dir."/".$img_name.".jpg");
    elseif(file_exists($uploads_dir."/".$img_name.".png"))
    unlink($uploads_dir."/".$img_name.".png");
    @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
    $update = $conn->query("update control set c_logo='".$c_logo."' where c_id='$id'");
}
if($_FILES['c_logo_en']['size'] != 0){
    @$name=$_FILES['c_logo_en']['name'];
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['c_logo_en']['tmp_name'];
    $img_name= "logo-en";
    $c_logo_en=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    if(file_exists($uploads_dir."/".$img_name.".jpg"))
    unlink($uploads_dir."/".$img_name.".jpg");
    elseif(file_exists($uploads_dir."/".$img_name.".png"))
    unlink($uploads_dir."/".$img_name.".png");
    @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
    $update = $conn->query("update control set c_logo_en='".$c_logo_en."' where c_id='$id'");

}

if($_FILES['c_icon']['size'] != 0){
    @$name=$_FILES['c_icon']['name'];
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['c_icon']['tmp_name'];
    $img_name= "site-ico";
    $c_icon=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    if(file_exists($uploads_dir."/".$img_name.".jpg"))
    unlink($uploads_dir."/".$img_name.".jpg");
    elseif(file_exists($uploads_dir."/".$img_name.".png"))
    unlink($uploads_dir."/".$img_name.".png");
    @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
    $update = $conn->query("update control set c_icon='".$c_icon."' where c_id='$id'");

}


if($_FILES['c_bg']['size'] != 0){
    @$name=$_FILES['c_bg']['name'];
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['c_bg']['tmp_name'];
    $img_name= "site-bg";
    $c_bg=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    if(file_exists($uploads_dir."/".$img_name.".jpg"))
    unlink($uploads_dir."/".$img_name.".jpg");
    elseif(file_exists($uploads_dir."/".$img_name.".png"))
    unlink($uploads_dir."/".$img_name.".png");
    @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
    $update = $conn->query("update control set c_bg='".$c_bg."' where c_id='$id'");

}


if($_FILES['c_about_p']['size'] != 0){
    @$name=$_FILES['c_about_p']['name'];
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['c_about_p']['tmp_name'];
    $img_name= "about";
    $c_about_p=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    if(file_exists($uploads_dir."/".$img_name.".jpg"))
    unlink($uploads_dir."/".$img_name.".jpg");
    elseif(file_exists($uploads_dir."/".$img_name.".png"))
    unlink($uploads_dir."/".$img_name.".png");
    @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
    $update = $conn->query("update control set c_about_p='".$c_about_p."' where c_id='$id'");

}

    $update_c =  $conn->prepare("update control set 
    c_title='".addslashes($_POST["c_title"])."',
    c_title_en='".$_POST["c_title_en"]."',
    c_description='".addslashes($_POST["c_description"])."',
    c_keywords='".addslashes($_POST["c_keywords"])."',
    c_telefon='".$_POST["c_telefon"]."',
    c_email='".$_POST["c_email"]."',
    c_adres='".$_POST["c_adres"]."',
    c_adres_en='".$_POST["c_adres_en"]."',
    c_instagram='".$_POST["c_instagram"]."',
    c_facebook='".$_POST["c_facebook"]."',
    c_twitter='".$_POST["c_twitter"]."',
    c_footer_social='".$_POST["c_footer_social"]."',
    c_footer_social_en='".$_POST["c_footer_social_en"]."',
    c_atif='".$_POST["c_atif"]."',
    c_about='".$_POST["c_about"]."',
    c_about_en='".$_POST["c_about_en"]."',
    c_atif_en='".$_POST["c_atif_en"]."'
    where c_id='".$id."'");

    
    if($update_c->execute())
{
    Header("Location:../ayarlar.php?durum=ok");

}else{
    Header("Location:../ayarlar.php?durum=error");
}


}


if(isset($_POST["admin_login"])){

    $admin_username=$_POST["admin_username"];
    $admin_pass=md5($_POST["admin_pass"]);
    if($admin_username && $admin_pass){
    $mysql =$conn->query("select * from admins where admin_username='$admin_username' and admin_pass='$admin_pass'");
    $count = $mysql->num_rows;
if($count>0){
    $_SESSION["admin_logged"]= $admin_username;
    Header("Location:../index.php");
}else{
    Header("Location:../login.php?login=error");
}
}}

if(isset($_POST['slider_add'])){

    @$name=$_FILES['slider_img']['name'];
    $uploads_dir="../../assets/uploads/slider";
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['slider_img']['tmp_name'];

    $r1=rand(20000,32000);
    $r2=rand(20000,32000);

    $img_name= $r1.$r2;
    $dirr=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    $mysql_add_slider=$conn->query("insert into slider(slider_title,slider_title_en,slider_description,slider_description_en,slider_link,slider_img_url,slider_sq)values(

        '".$_POST["slider_title"]."',
        '".$_POST["slider_title_en"]."',
        '".$_POST["slider_description"]."',
        '".$_POST["slider_description_en"]."',
        '".$_POST["slider_link"]."',
        '".$dirr."',
        '".$_POST["slider_sq"]."')");
        $count = $mysql_add_slider->affected_rows;


        if($mysql_add_slider){
         @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
            Header('Location:../slider-ekle.php?durum=ok');
        }else
            Header('Location:../slider-ekle.php?durum=error');
        
    }
    if(isset($_POST['content_add'])){ 
    $mysql_add_content=$conn->prepare("insert into content(c_title,c_title_en,c_description,c_description_en,c_date)values(

        '".$_POST["c_title"]."',
        '".$_POST["c_title_en"]."',
        '".addslashes($_POST["c_description"])."',
        '".addslashes($_POST["c_description_en"])."',
        '".$_POST["c_date"]."')");
    
        if($mysql_add_content->execute()){
             $last_id = $conn->insert_id;
            

             Header("Location:../icerik-ekle.php?durum=ok");
               
                $r1=rand(20000,32000);
                $r2=rand(20000,32000);
              
                $uploaded_images = array();
                foreach($_FILES['upload_images']['name'] as $key=>$val){
                $upload_dir = "../../assets/uploads/content/";
                $upload_file = $upload_dir.$r1.$_FILES['upload_images']['name'][$key];
                $filename = $r1.$_FILES['upload_images']['name'][$key];
                if(@move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
                $uploaded_images[] = $upload_file;
                $insert_sql = "INSERT INTO photos(c_id, url, upload_time)
                VALUES('$last_id', '".$filename."', '".time()."')";
                
                $run=$conn->prepare($insert_sql);
                if($run->execute()){
                Header("Location:../icerik-ekle.php?durum=ok");

                }else
                Header("Location:../icerik-ekle.php?durum=error");

                }
                }
                

            }
          

   }



if(isset($_GET["slider_delete"])=="ok"){

$get_data=(int) $_GET["slider_id"];
$search_sql = $conn->query("select slider_img_url from slider where slider_id=$get_data");
$delete_sql=$conn->query("delete from slider where slider_id='$get_data'"); 
$row = $search_sql->fetch_assoc();

$slider_link ="../../".$row["slider_img_url"];
if($search_sql){
unlink("$slider_link");
Header("Location:../slider.php?durum=ok");
}else
Header("Location:../slider.php?durum=error");

}

if(isset($_GET["gallery_delete"])=="ok"){

    $get_data=(int) $_GET["photo_id"];
    $search_sql = $conn->query("select url from gallery where id=$get_data");
    $delete_sql=$conn->query("delete from gallery where id='$get_data'"); 
    $row = $search_sql->fetch_assoc();
    
    $gallery_url ="../../".$row[url];
    if($search_sql){
    unlink("$gallery_url");
    Header("Location:../galeri.php?durum=ok");
    }else
    Header("Location:../galeri.php?durum=error");
    
    }

    if(isset($_GET["event_delete"])=="ok"){

        $get_data=(int) $_GET["event_id"];
        $search_sql = $conn->query("select img from events where id=$get_data");
        $delete_sql=$conn->query("delete from events where id='$get_data'"); 
        $row = $search_sql->fetch_assoc();
        $event_img ="../../".$row[img];
        if($search_sql){
        unlink("$event_img");
        Header("Location:../etkinlik.php?durum=ok");
        }else
        Header("Location:../etkinlik.php?durum=error");
        
        

    }

    
    if(isset($_POST['event_add'])){ 

        @$name=$_FILES['img']['name'];
        $uploads_dir="../../assets/uploads/events";
        $f_type=substr($name,-3);
        @$tmp_name =$_FILES['img']['tmp_name'];
    
        $r1=rand(20000,32000);
        $r2=rand(20000,32000);
    
        $img_name= $r1.$r2;
        $dirr=substr($uploads_dir,6)."/".$img_name.".".$f_type;
    
        $event_add=$conn->prepare("insert into events(title,title_en,description,description_en,img,date)values(
    
            '".$_POST["title"]."',
            '".$_POST["title_en"]."',
            '".addslashes($_POST["description"])."',
            '".addslashes($_POST["description_en"])."',
            '".$dirr."',
            '".$_POST["date"]."')");
    
            if($event_add->execute()){
             @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
                Header('Location:../etkinlik-ekle.php?durum=ok');
            }else
                Header('Location:../etkinlik-ekle.php?durum=error');
            
    }

    if(isset($_GET["content_delete"])=="ok"){
        $id=$_GET["c_id"];
    

        
       
        $photo_list=$conn->query("select * from photos where c_id=$id");

      

            while($row=$photo_list->fetch_assoc()){
               $dict="../../assets/uploads/content/".$row["url"];
               unlink($dict);}
             
          if($photo_list){

            $delete_sql=$conn->query("delete from content where c_id=$id");
            $delete_photos=$conn->query("delete from photos where c_id=$id");

            Header("Location:../icerik.php?durum=ok");
          } else
            Header("Location:../icerik.php?durum=error");
        
        
    }


    if(isset($_POST['media_add'])){

        $media_add=$conn->prepare("insert into media(title,title_en,url)values(
    
            '".$_POST["title"]."',
            '".$_POST["title_en"]."',
            '".$_POST["url"]."')");
           
    
    
            if($media_add->execute()){
     
                Header('Location:../haber-ekle.php?durum=ok');
            }else
                Header('Location:../haber-ekle.php?durum=error');
            
     }

    if(isset($_GET["media_delete"])=="ok"){

        $id=$_GET["id"];
        $sql="delete from media where id=$id";
        $result=$conn->prepare($sql);

        if($result->execute()){
     
            Header('Location:../haber.php?durum=ok');
        }else
            Header('Location:../haber.php?durum=error');

    }

    if(isset($_POST["event_update"])){
         $uploads_dir="../../assets/uploads/events";
         $id=$_POST["id"]; 
         $title=addslashes($_POST["title"]);
         $title_en=addslashes($_POST["title_en"]);
         $description=addslashes($_POST["description"]);
         $description_en=addslashes($_POST["description_en"]);
         $date=addslashes($_POST["date"]);
         
         $sql="update events set 
         title='$title',
         title_en='$title_en',
         description='$description',
         description_en='$description_en',
         date='$date' where id=$id"; 
         

        if(file_exists($_FILES["img"]["tmp_name"])){
           
        $srsq="select * from events where id=$id";
        $srs=$conn->query($srsq);
        $r=$srs->fetch_assoc();
        $img_u= "../../".$r["img"];
        if(file_exists($img_u)) unlink($img_u);
        
        @$name=$_FILES['img']['name'];
        $uploads_dir="../../assets/uploads/events";
        $f_type=substr($name,-3);
        @$tmp_name =$_FILES['img']['tmp_name'];  
        $r1=rand(20000,32000);
        $r2=rand(20000,32000);
        $img_name= $r1.$r2;
        $dirr=substr($uploads_dir,6)."/".$img_name.".".$f_type;
        @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
    

        $sql="update events set 
        title='$title',
        title_en='$title_en',
        description='$description',
        description_en='$description_en',
        date='$date',
        img='$dirr' where id=$id";
        echo "<script>console.log('file selected')</script>";
        }

        $res=$conn->prepare($sql);

        if($res->execute()){
            Header('Location:../etkinlik.php?durum=ok');
        }else
            Header('Location:../etkinlik.php?durum=error');
       
    }

    if(isset($_POST["media_edit"])){
      $id=$_POST["id"];
      $title=addslashes($_POST["title"]);
      $title_en=addslashes($_POST["title_en"]);
      $url=addslashes($_POST["url"]);
      $sql="update media set title='$title', title_en='$title_en', url='$url' where id=$id";

      $res=$conn->prepare($sql);
      if($res->execute()){
        Header('Location:../haber.php?durum=ok');
    }else
        Header('Location:../haber.php?durum=error');

    }

    if(isset($_POST["content_edit"])){

        $id=$_POST["id"];
        $title=$_POST["c_title"];
        $title_en=$_POST["c_title_en"];
        $description=$_POST["c_description"];
        $description_en=$_POST["c_description_en"];
        $date=$_POST["c_date"];
        $sql="update content set c_title='$title', c_title_en='$title_en', c_description='$description', c_description_en='$description_en', c_date='$date' where c_id=$id";
        

        if(file_exists($_FILES["upload_images"]["tmp_name"][0])){
            //delete
            $photo_list=$conn->query("select * from photos where c_id=$id");
            $delete_sql="delete from photos where c_id=$id";
            $runned=$conn->prepare($delete_sql); //veritabanından eski resimleri sil

            while($row=$photo_list->fetch_assoc()){
                $dict="../../assets/uploads/content/".$row["url"]; //dosya sisteminden sil
                unlink($dict);}
            
            if($runned->execute()){

          //upload
                $r1=rand(20000,32000);
                $r2=rand(20000,32000);    
                $uploaded_images = array();
                foreach($_FILES['upload_images']['name'] as $key=>$val){
                $upload_dir = "../../assets/uploads/content/";
                $upload_file = $upload_dir.$r1.$_FILES['upload_images']['name'][$key];
                $filename = $r1.$_FILES['upload_images']['name'][$key];
                if(@move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
                $uploaded_images[] = $upload_file;
                $insert_sql = "INSERT INTO photos(c_id, url, upload_time)
                VALUES('$id', '".$filename."', '".time()."')";
            }
          
            $run=$conn->prepare($insert_sql);
            if($run->execute())
            $yes=TRUE;
                else
            $yes=FALSE;
            
        }}
      
    }
         
       $res=$conn->prepare($sql);

        if($res->execute() && $yes){
            Header('Location:../icerik.php?durum=ok');
        }else
            Header('Location:../icerik.php?durum=error');

    }

if(isset($_POST["gallery_edit"])){

    $id=$_POST["id"];
    $sql ="select * from gallery where id=$id";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $dUrl="../../".$row["url"];

    if(file_exists($_FILES["upload_images"]["tmp_name"])){
    if(file_exists($dUrl)) unlink($dUrl);


    @$name=$_FILES['upload_images']['name'];
    $uploads_dir="../../assets/uploads/gallery";
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['upload_images']['tmp_name'];

    $r1=rand(20000,32000);
    $r2=rand(20000,32000);

    $img_name= $r1.$r2;
    $dirr=substr($uploads_dir,6)."/".$img_name.".".$f_type;


$add_photo=$conn->prepare("update gallery set url='$dirr' where id=$id");

    if($add_photo->execute()){
        @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
        Header('Location:../galeri-duzenle.php?durum=ok');
    }else
        Header('Location:../galeri-duzenle.php?durum=error');

}}

if(isset($_POST["slider_edit"])){
$id=$_POST["id"];
$title=$_POST["slider_title"];
$title_en=$_POST["slider_title"];
$description=$_POST["slider_description"];
$description_en=$_POST["slider_description_en"];
$slider_link=$_POST["slider_link"];
$slider_sq=$_POST["slider_sq"];
echo "$title <br> $title_en <br> $description <br> $description_en <br> $slider_sq";


$sql="update slider set 
slider_title='$title', 
slider_title_en='$title_en', 
slider_description='$description', 
slider_description_en='$description_en',
slider_link='$slider_link', 
slider_sq='$slider_sq' where slider_id=$id";


if(file_exists($_FILES["slider_img"]["tmp_name"])){
    $sqlSearch ="select * from slider where slider_id=$id";
    $result=$conn->query($sqlSearch);
    $row=$result->fetch_assoc();
    $dUrl="../../".$row["slider_img_url"];

    if(file_exists($dUrl)) unlink($dUrl);

@$name=$_FILES['slider_img']['name'];
    $uploads_dir="../../assets/uploads/slider";
    $f_type=substr($name,-3);
    @$tmp_name =$_FILES['slider_img']['tmp_name'];

    $r1=rand(20000,32000);
    $r2=rand(20000,32000);

    $img_name= $r1.$r2;
    $dirr=substr($uploads_dir,6)."/".$img_name.".".$f_type;

    $sql="update slider set 
        slider_title='$title', 
        slider_title_en='$title_en', 
        slider_description='$description', 
        slider_description_en='$description_en',
        slider_link='$slider_link', 
        slider_img_url='$dirr',
        slider_sq='$slider_sq' where slider_id=$id";
}
$result=$conn->prepare($sql);

if($result->execute()){
    @move_uploaded_file($tmp_name,"$uploads_dir/$img_name.$f_type");
       Header('Location:../slider.php?durum=ok');
   }else
       Header('Location:../slider.php?durum=error');


}