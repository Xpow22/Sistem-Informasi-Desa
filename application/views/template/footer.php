<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sistem Informasi Pengolahan Data Terpadu dan Produk Unggulan Desa Kalitenga</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    
     
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->

  <script src="<?php base_url();?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php base_url();?>admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php base_url();?>admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php base_url();?>admin/vendor/php-email-form/validate.js"></script>
  <script src="<?php base_url();?>admin/vendor/simple-datatables/simple-datatables.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php base_url();?>admin/js/main.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
  <?php 
          if($this->session->userdata('ntf_swal')) {
          ?>
            <script>
                  Swal.fire({
                    icon:"<?= $_SESSION['ntf_color']?>",
                    title:"<?= $_SESSION['ntf_title']?>",
                    text:"<?= $_SESSION['ntf_body']?>",
                    showConfirmButton:false,
                    timer:5000
                  },)
            </script>
        <?php } ?>
</body>

</html>