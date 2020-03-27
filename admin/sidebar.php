<?php
if (!isset($_SESSION['admin_logged'])) {
    header('Location:login.php');
  }
  
?>
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/admin-logo.png" class="user-image img-responsive"/>
					</li>
				
                    <li>
                        <a  href="../index.php" target="_blank"><i class="fa fa-eye  fa-2x"></i>Siteyi Görüntüle</a>
                    </li>

                    <li>
                        <a  href="index.php"><i class="fa fa-desktop fa-2x"></i> Panel</a>
                    </li>

                    <li>
                        <a  href="ayarlar.php"><i class="fa fa-dashboard fa-2x"></i> Site Ayarları</a>
                    </li>
                    <li>

<a  href="icerik.php"><i class="fa fa-edit fa-2x"></i>Envanter (İçerik) </a>
</li>
                     <li>

                     <a  href="slider.php"><i class="fa fa-edit fa-2x"></i>Slider </a>
                     </li>
                     
                     
                     <li>

                     <a  href="etkinlik.php"><i class="fa fa-edit fa-2x"></i>Etkinlik </a>
                     </li>
                     
                     <li>

                     <a  href="galeri.php"><i class="fa fa-edit fa-2x"></i>Galeri</a>
                     </li>

                     <li>

                <a  href="haber.php"><i class="fa fa-edit fa-2x"></i>Haber</a>
                </li>
                </ul>
               
            </div>
            
        </nav>  
       