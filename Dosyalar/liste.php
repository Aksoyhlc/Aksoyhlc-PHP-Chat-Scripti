<?php 
require_once 'islemler/baglan.php';
require_once 'fonksiyonlar.php';
oturumkontrol();

if (isset($_GET['sayi'])) {
	if ($_GET['sayi']=="son50") {
		$eksorgu=50;
	} elseif ($_GET['sayi']=="son100") {
		$eksorgu=100;
	} else {
		$eksorgu=10000000000;
	}
} else {
	$eksorgu=50;
}

$sorgu=$db->prepare("SELECT mesajlar.*,kullanicilar.kul_isim FROM mesajlar LEFT JOIN kullanicilar ON kullanicilar.kul_id=mesajlar.mesaj_gonderen ORDER BY mesaj_id DESC LIMIT 0,$eksorgu");
$sorgu->execute();
$mesajlar=$sorgu->fetchAll(PDO::FETCH_ASSOC);

?>


<?php foreach ($mesajlar as $key => $mesaj): ?>
	<div 
	<?php if ($mesaj['mesaj_gonderen']==$_SESSION['kul_id']): ?>
		style="background-color: #4e73df; color: white; font-size: 14px;"
		class="mesaj ml-auto"
		<?php else: ?>
			class="mesaj"
		<?php endif ?>
		>
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-md-12">
					<div style="border-bottom: 1px solid lightgray; margin-bottom: 10px">
						<span>
							<b><?php echo $mesaj['kul_isim'] ?></b>
						</span>
						<span class="ml-1 tarih-alani">
							<?php echo $mesaj['mesaj_eklenme_tarih'] ?>
							
						</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="mb-0">
						<?php echo $mesaj['mesaj_detay'] ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach ?>