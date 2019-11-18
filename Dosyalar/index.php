<?php require 'header.php' ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center">
      <h5>Script şuanki hali ile sadece chat sistemini içerir bu alana ve diğer alanlara kendi istediğiniz içerikleri ekleyip kendinize göre düzenleyebilirsiniz.</h5>
      <h5>Scriptin yapım videolarına <a href="https://www.udemy.com/course/php-gelismis-script-yapimi-profesyonel-script-yazma-kursu/?referralCode=A3EB91AC3FE0D09E2282">BURAYA TIKLAYARAK</a> ulaşabilirsiniz.</h5>
    </div>
  </div>
</div>
<?php require 'footer.php' ?>

<?php 
if (@$_GET['durum']=="ok") { ?>
  <script type="text/javascript">
   Swal.fire({
    type: 'success',
    title: 'İşlem Başarılı',
    text: 'İşleminiz Başarıyla Gerçekleştirildi',
    confirmButtonText: "Tamam"
  })
</script>
<?php } ?>


<?php 
if (@$_GET['durum']=="no") { ?>
  <script type="text/javascript">
   Swal.fire({
    type: 'error',
    title: 'Hata',
    text: 'İşleminiz Başarısız Oldu Lütfen Tekrar Deneyin',
    confirmButtonText: "Tamam"
  })
</script>
<?php } ?>