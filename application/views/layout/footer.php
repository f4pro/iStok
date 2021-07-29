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

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>

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
    $("#jumlah").on('keydown keyup change blur', function() {
      var stokA = $("#stokA").val();
      var jumlah = $("#jumlah").val();

      var stokAk = parseInt(harga) * parseInt(jumlah);
      $("#total").val(total);
      if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
        alert('stok tidak tersedia! stok tersedia :' + parseInt($('input[name="stok"]').val()))
        reset()
      }
    });

    function reset() {
      $('input[name="jumlah"]').val('')
      $('input[name="total"]').val('')

    }
  });
</script>
</body>

</html>