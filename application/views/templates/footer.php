<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">

</div>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/chart/chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- Template Javascript -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
<script>
    $('#editModal').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget);
        var id = button.data('id');
        var hari = button.data('hari');
        var tanggal = button.data('tanggal');
        var catatan = button.data('catatan');

        var modal = $(this);
        modal.find('#edit-id').val(id);
        modal.find('#edit-hari').val(hari);
        modal.find('#edit-tanggal').val(tanggal);
        modal.find('#edit-catatan').val(catatan);
    });
</script>

<script>
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var username = button.data('username');
        var password = button.data('password');
        var role = button.data('role');

        var modal = $(this);
        modal.find('#edit-id').val(id);
        modal.find('#edit-username').val(username);
        modal.find('#edit-password').val(password);
        modal.find('#edit-role').val(role);
    });
</script>

<!-- dashboard -->
<script>
    const ctx = document.getElementById('dashboardChart').getContext('2d');
    const dashboardChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pengguna', 'Catatan'],
            datasets: [{
                label: 'Jumlah',
                data: [<?= $total_users; ?>, <?= $total_catatan; ?>],
                backgroundColor: ['#0d6efd', '#198754'],
                borderColor: ['#0d6efd', '#198754'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
</script>


<script>
    $(document).ready(function() {
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

</html>