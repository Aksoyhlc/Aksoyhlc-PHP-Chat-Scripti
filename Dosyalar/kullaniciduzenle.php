<?php require_once 'header.php';
if (!yetkikontrol()) {
  header("location:index.php");
}
$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_id=:kul_id");
$sorgu->execute(array(
'kul_id' => $_POST['kul_id']
));
$kullanicibilgisi=$sorgu->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="font-weight-bold text-primary">Kullanıcı Düzenle</h5>
				</div>
				<div class="card-body">
					<form action="islemler/ajax.php" method="POST" accept-charset="utf-8">
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>İsim Soyisim</label>
								<input value="<?php echo $kullanicibilgisi['kul_isim'] ?>" type="text" name="kul_isim" placeholder="İsim Soyisim" class="form-control">
							</div>
						</div>
						<input type="hidden" name="kul_id" value="<?php echo $_POST['kul_id'] ?>">
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Mail Adresi</label>
								<input value="<?php echo $kullanicibilgisi['kul_mail'] ?>" type="email" name="kul_mail" placeholder="Mail Adresi" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Telefon</label>
								<input value="<?php echo $kullanicibilgisi['kul_telefon'] ?>" type="text" name="kul_telefon" placeholder="Telefon" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Şifre <small>Boş Bırakırsanız Şifre Değişmez</small></label>
								<input type="text" name="kul_sifre" placeholder="Şifre" class="form-control">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary" name="kulduzenle">Kaydet</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once 'footer.php'; ?>