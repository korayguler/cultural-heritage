<?php include 'settings/connect_db.php'; 
include 'header.php';
include 'sidebar.php';

if(!isset($_SESSION['admin_logged'])){
    header('Location:login.php');
}

if(!$adminRank==0) {header('Location:index.php?giris_engel=t');
    
}

$sql= "select * from control";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
$durum=isset($_GET["durum"]);
?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Site Ayarları</h2>   
                        
                       <?php if($durum=="ok"){ ?>
                        <h5> İşlem Başarılı!!...</h5>
                    <?php }elseif($durum=="error"){  ?>
                        <h5>Hatalı İşlem!! </h5>
                    <?php }else{ ?>

                        <h5>Sitenizin temel ayarlarını buradan düzenleyebilirsiniz. </h5>

                    <?php } ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="panel panel-default ">
                <div class="panel-heading ">Ayarları Yönetin</div>
                <div class="panel-body ">
                 <form method="post"  action="settings/islem.php"  enctype="multipart/form-data" class="form-horizonal row-border">
                 
                             <div class="form-group col-md-6">
                            <label>Başlık : Türkçe</label>
                            <input type="text"  required="" class="form-control" name="c_title"  value="<?php echo $row['c_title'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Başlık : İngilizce</label>
                            <input type="text"  required="" class="form-control" name="c_title_en"  value="<?php echo $row['c_title_en'] ?>">
                            </div>

                            <div class="form-group col-md-12">
                            <label>Site Açıklaması</label>
                            <input type="text"  required="" class="form-control" name="c_description"  value="<?php echo $row['c_description'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Hakkımızda</label>
                            <textarea type="text"  required="" rows="7" class="form-control" name="c_about"  value=""><?php echo $row['c_about'] ?></textarea>
                            </div>
                                 
                            <div class="form-group col-md-6">
                            <label>Hakkımızda : İngilizce</label>
                            <textarea type="text"  required="" rows="7" class="form-control" name="c_about_en"  value=""><?php echo $row['c_about_en'] ?></textarea>
                            </div>
                                 
                            <div class="form-group col-md-12">
                            <label># Etiketler (etiketleri virgül ile ayırınız)</label>
                            <input type="text"  required="" class="form-control" name="c_keywords"  value="<?php echo $row['c_keywords'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Telefon Numarası</label>
                            <input type="text"  required="" class="form-control" name="c_telefon"  value="<?php echo $row['c_telefon'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Mail Adresi</label>
                            <input type="text"  required="" class="form-control" name="c_email"  value="<?php echo $row['c_email'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Adres : Türkçe</label>
                            <input type="text"  required="" class="form-control" name="c_adres"  value="<?php echo $row['c_adres'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Adres : İngilizce</label>
                            <input type="text"  required="" class="form-control" name="c_adres_en"  value="<?php echo $row['c_adres_en'] ?>">
                            </div>

                            <div class="form-group col-md-4">
                            <label>Instagram</label>
                            <input type="text"  required="" class="form-control" name="c_instagram"  value="<?php echo $row['c_instagram'] ?>">
                            </div>
                            
                            <div class="form-group col-md-4">
                            <label>Facebook</label>
                            <input type="text"  required="" class="form-control" name="c_facebook"  value="<?php echo $row['c_facebook'] ?>">
                            </div>
                            
                            <div class="form-group col-md-4">
                            <label>Twitter</label>
                            <input type="text"  required="" class="form-control" name="c_twitter"  value="<?php echo $row['c_twitter'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Footer : Türkçe</label>
                            <input type="text"  required="" class="form-control" name="c_footer_social"  value="<?php echo $row['c_footer_social'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Footer : İngilizce</label>
                            <input type="text"  required="" class="form-control" name="c_footer_social_en"  value="<?php echo $row['c_footer_social_en'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Atif : Türkçe</label>
                            <input type="text"  required="" class="form-control" name="c_atif"  value="<?php echo $row['c_atif'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                            <label>Atif : İngilizce</label>
                            <input type="text"  required="" class="form-control" name="c_atif_en"  value="<?php echo $row['c_atif_en'] ?>">
                            </div>

                            <div class="form-group col-md-4">
                            <label><i class="fa fa-rocket"> </i> Site İkon Seç (100px 100px)</label>
                            <input name="c_icon" type="file" accept=".png,.jpg" >
                             </div>

                            <div class="form-group col-md-4">
                            <label><i class="fa fa-qrcode "></i> Logo Seç  (Önerilen Boyut : ?? )</label>
                            <input name="c_logo" type="file"  accept=".png,.jpg" >
                             </div>

                             <div class="form-group col-md-4">
                            <label><i class="fa fa-qrcode "></i> Logo Seç : İngilizce  (Önerilen Boyut : ?? )</label>
                            <input name="c_logo_en" type="file"  accept=".png,.jpg">
                             </div>

                         
                        
                             <div class="form-group col-md-4">
                            <label><i class="fa fa-windows"> </i> Arkaplan Seç (Önerilen Boyut : 16:9 )</label>
                            <input name="c_bg" type="file" accept=".png,.jpg">
                             </div>

                             <div class="form-group col-md-4">
                            <label><i class="fa fa-windows"> </i> Hakkımızda Görsel (Önerilen Boyut : ? )</label>
                            <input name="c_about_p" type="file" accept=".png,.jpg">
                             </div>



                            <div class="form-group col-md-5">
                           <button type="submit" class="btn btn-success form-control  col-sm" name="update_settings">Ayarları Kaydet </button>
                       
                            </div>

                            <div class="form-group col-md-5 ">
                     
                            <button type="reset" class="btn btn-danger form-control">Geriye Al</button>

                            </div>

                </form>
</div>
</div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>

<?php include 'footer.php' ?>