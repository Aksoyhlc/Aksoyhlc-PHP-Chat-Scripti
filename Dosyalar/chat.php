<?php require 'header.php'; ?>

<div class="container-fluid mb-5">
	<div class="row justify-content-center">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body mesaj-alani">
					<?php include_once 'liste.php' ?>
				</div>
				<div class="card-footer p-2">
					<div class="d-flex">
						<textarea id="mesaj-giris" name="mesaj" class="form-control" style="min-height: 7rem"></textarea>
						<div class="flex-row align-items-center text-center">
							<button type="button" class="btn btn-primary ml-3" onclick="mesajgonder()">Gönder</button>
							<div class="mt-2">
								<input type="radio" id="son50" class="mesaj-sayisi" checked="" name="mesaj_sayisi" value="son50"> <label for="son50">Son 50</label>
							</div>
							<div>
								<input type="radio" id="son100" class="mesaj-sayisi" name="mesaj_sayisi" value="son100"> <label for="son100">Son 100</label>
							</div>
							<div>
								<input type="radio" id="hepsi" class="mesaj-sayisi" name="mesaj_sayisi" value="hepsi"> <label for="hepsi">Hepsi</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>

