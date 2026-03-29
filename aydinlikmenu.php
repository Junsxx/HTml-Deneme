<div class="menuyazı" id="aydınlıkmenu">
		<ul id="menu1">
 			<li><a href="index.php?sayfa&tema=aydinlik"><i class="fa-solid fa-house"></i> Anasayfa</a></li>
 			<li><a href="index.php?sayfa=bilgilendirme&tema=aydinlik"><i class="fa-solid fa-circle-info"></i> Bilgilendirme</a></li>
 			<li><a href="#footer"><i class="fa-solid fa-phone"></i> İletişim</a></li>
 			<li><a href="index.php?sayfa=hakkında&tema=aydinlik"><i class="fa-solid fa-address-card"></i> Hakkında</a></li>
 		</ul>	
        <ul id="menu2">
			<?php 
			if (@$_SESSION['ad'])
			{
				
			echo	'<li><a class="icon-aydinlik" href="index.php?sayfa=ayarlar&tema=aydinlik"><i class="fa-solid fa-gear"></i></a></li>
			<li><a class="icon-aydinlik" href=""><i class="fa-solid fa-user"></i></a></li>
			<li><a class="icon-aydinlik" href="index.php?sayfa=cikis&tema=aydinlik"><i class="fa-solid fa-right-to-bracket"></i></a></li>';
			
			if($_SESSION['yetki']=="1")
			{
			echo '<li><a class="icon-aydinlik" href="index.php?sayfa=panel&tema=aydinlik"><i class="fa-solid fa-screwdriver-wrench"></i></a></li>';	
			}
			
			
			
			}else{
				
			
				echo '<li><a class="button" href="giris.php?tema=aydinlik">Giriş Yap</a></li>
				<li><a class="button" href="kayıt.php?tema=aydinlik">Kayıt Ol</a></li>';
				
			}
			?>
			
 		</ul>
</div><!--MenuYazı Div Bitişi -->



