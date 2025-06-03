<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 style="text-align: center;">SROG LOGIN</h3>
                        </div>
                        <form action="<?= base_url() ?>login/proses_login" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Manjing</button>
                        </form>
                        <p class="text-center mb-0">Ira ws due akun durung? <a href="<?= base_url('register'); ?>">daftar</a></p>
                        <p class="text-center mb-0"><a href="<?= base_url('landing'); ?>">kembali</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/chart/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <!-- alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?= $this->session->flashdata('message'); ?>
    
</body>

</html>