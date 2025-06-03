<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 class="text-center">SROG DAFTAR</h3>
                        </div>
                        <form action="<?= base_url() ?>register/proses_register" method="post">
                            <!-- Username Input -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Enter your username" required>
                                <label for="floatingInput">Username</label>
                            </div>

                            <!-- Password Input -->
                             <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password1" name="password"  required>
                                <label for="password1">Password</label>
                            </div>
                             <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password2" name="password2"  required>
                                <label for="password2">Password konfirmasi</label>
                            </div>

                            <!-- Level (Role) Dropdown -->
                            <!-- <div class="mb-3">
                                <label for="role" class="form-label">Level</label>
                                <select name="role" class="form-select" id="role" required>
                                    <option value="pengguna">Pengguna</option>
                                </select>
                            </div> -->
                            <input type="hidden" name="role" value="pengguna">

                            <!-- Submit Button -->
                            <button type="submit" id="submit" disabled class="btn btn-primary py-3 w-100 mb-4">Daftar</button>
                        </form>
                        <p class="text-center mb-0">uwiss due akun tah? <a href="<?= base_url('login'); ?>">Manjing</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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

<script>
$(document).ready(function () {
    function validatePassword() {
        let password = $('#password1').val();
        let confirm = $('#password2').val();

        if (password !== '' && confirm !== '') {
            if (password === confirm) {
                $('#password1, #password2')
                    .removeClass('is-invalid')
                    .addClass('is-valid');

                $('#submit').prop('disabled', false);
            } else {
                $('#password1, #password2')
                    .removeClass('is-valid')
                    .addClass('is-invalid');

                $('#submit').prop('disabled', true);
            }
        } else {
            $('#password1, #password2').removeClass('is-valid is-invalid');
            $('#submit').prop('disabled', true);
        }
    }

    $('#password1, #password2').on('input', validatePassword);
});
</script>

</body>