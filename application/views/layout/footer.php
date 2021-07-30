</main> <!-- main -->
</div> <!-- .wrapper -->
<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/moment.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/simplebar.min.js"></script>
    <script src='<?= base_url('assets/'); ?>js/daterangepicker.js'></script>
    <script src='<?= base_url('assets/'); ?>js/jquery.stickOnScroll.js'></script>
    <script src="<?= base_url('assets/'); ?>js/tinycolor-min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/config.js"></script>
    <script src='<?= base_url('assets/'); ?>js/jquery.dataTables.min.js'></script>
    <script src='<?= base_url('assets/'); ?>js/dataTables.bootstrap4.min.js'></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
</script>
<script>
  $(document).ready(function() {
    $("#StokMasuk").on('keydown keyup change blur', function() {
      var stok = $("#stok").val();
      var StokMasuk = $("#StokMasuk").val();

      var total = parseInt(stok) + parseInt(StokMasuk);
      $("#total").val(total);
    });
  });
</script>
</body>

</html>