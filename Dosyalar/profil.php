<?php include 'header.php';
$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_id=:kul_id");
$sorgu->execute(array(
	'kul_id' => $_SESSION['kul_id']
));
$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="font-weight-bold text-primary">Profil</h5>
				</div>
				<div class="card-body">
					<form action="islemler/ajax.php" method="POST" accept-charset="utf-8">
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>İsim</label>
								<input type="text" name="kul_isim" class="form-control" value="<?php echo $kullanici['kul_isim'] ?>" placeholder="İsminizi Girin">
							</div>
							<div class="col-md-6 form-group">
								<label>Mail</label>
								<input type="text" name="kul_mail" class="form-control" value="<?php echo $kullanici['kul_mail'] ?>" placeholder="Mail Adresinizi Girin">
							</div>
						</div>


						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Şifre <small>(Boş Bırakırsanız Şifre Değişmez)</small></label>
								<input type="password" name="kul_sifre" class="form-control" placeholder="Şifrenizi Girin">
							</div>
							<div class="col-md-6 form-group">
								<label>Telefon</label>
								<input type="text" name="kul_telefon" class="form-control" value="<?php echo $kullanici['kul_telefon'] ?>" placeholder="Telefonunuzu Girin">
							</div>
						</div>
						<button type="submit" name="profilkaydet" class="btn btn-primary">Kaydet</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>