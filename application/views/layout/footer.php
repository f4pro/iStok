</main> <!-- main -->
</div> <!-- .wrapper -->
<script src="<?php base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?php base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?php base_url('assets/'); ?>js/moment.min.js"></script>
<script src="<?php base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php base_url('assets/'); ?>js/simplebar.min.js"></script>
<script src='<?php base_url('assets/'); ?>js/daterangepicker.js'></script>
<script src='<?php base_url('assets/'); ?>js/jquery.stickOnScroll.js'></script>
<script src="<?php base_url('assets/'); ?>js/tinycolor-min.js"></script>
<script src="<?php base_url('assets/'); ?>js/config.js"></script>
<script src="<?php base_url('assets/'); ?>js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-56159088-1');

 </script>
<script>
  $(document).ready(function() {
    $("#StokMasuk").on('keydown keyup change blur', function() {
      var stok = $("#stok").val();
      var StokMasuk = $("#StokMasuk").val();

      var StokHitungM = parseInt(stok) + parseInt(StokMasuk);
      $("#StokHitungM").val(StokHitungM);
      reset();
      // if (parseInt($('input[name="stok"]').val()) <= parseInt(StokMasuk)) {
      //   alert('stok tidak tersedia! stok tersedia :' + parseInt($('input[name="stok"]').val()))
      //   reset()
      // }
    });

    function reset() {
      $('input[name="StokMasuk"]').val('')
      $('input[name="StokHitungM"]').val('')

    }
  });
</script>
</body>

</html>