<footer class="page-footer font-small pt-4">
    <div class="container-fluid text-center text-md-left footers">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-6">
                <p class="text-center tex-md-center font-weight-bold">
                    &copy; My Company <?php echo date("Y") ?>
                </p>
            </div>
            <div class="col-md-6 col-lg-6">
                <p class="text-center tex-md-center font-weight-bold">
                    Powered By CodeIgniter Framework
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url(); ?>resources/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>resources/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>resources/js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url(); ?>resources/js/popper.min.js"></script>
<script>
    $(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 10) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
</script>
</body>

</html>