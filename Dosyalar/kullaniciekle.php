<?php require_once 'header.php'; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="font-weight-bold text-primary">Kullanıcı Ekle</h5>
				</div>
				<div class="card-body">
					<form action="islemler/ajax.php" method="POST" accept-charset="utf-8">
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>İsim Soyisim</label>
								<input type="text" name="kul_isim" placeholder="İsim Soyisim" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Mail Adresi</label>
								<input type="email" name="kul_mail" placeholder="Mail Adresi" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Telefon</label>
								<input type="text" name="kul_telefon" placeholder="Telefon" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Şifre</label>
								<input type="text" name="kul_sifre" placeholder="Şifre" class="form-control">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary" name="kulekle">Kaydet</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once 'footer.php'; ?>