 <div id="chat-sag" class="shadow-lg">
  <style type="text/css">
    .sag-alt-mesajlar{
      display: none;
    }
  </style>
  <div class="d-flex justify-content-between" style="margin: -15px;">
    <div class="mb-3 mesaj-gorunurluk" style="width: 100%; height: 100%; padding: 15px;">Canlı Cheat</div>
    <div class="sag-alt-mesajlar" style="padding: 15px;">
      <button type="button" class="btn btn-default mesaj-secenek-buton"><i class="fa fa-bars"></i></button>
    </div>
  </div>


  <div class="sag-alt-mesajlar">
    <div class="mesaj-alani">
      <?php include_once 'liste.php' ?>
    </div>
    <div class="card-footer p-1 my-3">
      <div class="d-flex">
        <textarea id="mesaj-giris" name="mesaj" class="form-control"></textarea>
        <div class="d-flex align-items-center">
          <button type="button" class="btn btn-primary ml-3" onclick="mesajgonder()">Gönder</button>
        </div>

      </div>

      <div id="mesaj-sayisi-alani" style="display: none;">
       <hr>
       <div class="d-flex justify-content-center text-center">
        <div class="">
          <input type="radio" id="son50" class="mesaj-sayisi" checked="" name="mesaj_sayisi" value="son50"> <label for="son50">Son 50</label>
        </div>

        <div class="mx-2">
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

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Ökkeş Aksoy 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#sidebarToggle").trigger("click");
  });
</script>


<script type="text/javascript">
  function mesajgonder() {
    var mesaj = $("#mesaj-giris").val();
    if(mesaj.length==0){
      alert("Mesaj Alanı Boş Olamaz");
    } else {
     $.ajax({
      type: "POST",
      url:"islemler/ajax.php",
      data: "mesajekle=mesajekle&mesaj_detay="+mesaj
    })

     $("#mesaj-giris").val("");
   }


   
 }


 $(document).ready(function() {

  setInterval(function () {
    var mesajsayisi = $(".mesaj-sayisi[type=radio]:checked").val();
    $(".mesaj-alani").load("liste.php?sayi="+mesajsayisi);      
  },1750);

  $(document).keydown(function (tus) {
    if (tus.keyCode==13) {
      event.preventDefault();
      mesajgonder() 
    }
  });
});


 $(".mesaj-secenek-buton").click(function() {
  $("#mesaj-sayisi-alani").toggle('fast')
});

 $(".mesaj-gorunurluk").click(function() {
  $(".sag-alt-mesajlar").toggle('fast');
});

</script>
</body>

</html>
