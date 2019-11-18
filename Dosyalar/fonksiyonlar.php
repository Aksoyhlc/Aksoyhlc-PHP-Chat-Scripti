<?php 


function oturumkontrol($yol="login.php"){
	if (!isset($_SESSION['kul_mail']) OR !isset($_SESSION['kul_isim'])  OR !isset($_SESSION['kul_id'])) {
		session_destroy();
		header("location:$yol");
		exit;
	}
}

function guvenlik($gelen)
{
	$giden=strip_tags($gelen);
	$giden=htmlentities($giden);
	return $giden;
}


function yetkikontrol()
{
	if ($_SESSION['kul_yetki']==1) {
		return true;
	} else {
		return false;
	}
}















?>