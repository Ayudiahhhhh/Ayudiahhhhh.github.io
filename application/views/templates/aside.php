<?php

if ($this->session->userdata('role') == 'admin') { ?>
    <!-- Sidebar admin -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-book me-2"></i>CATATAN</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle"
                        src="<?php echo base_url('assets/foto/' . $this->session->userdata('image')) ?>"
                        alt="Profile Photo"
                        style="width: 40px; height: 40px;">


                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $this->session->userdata('username'); ?></h6>
                    <span><?= $this->session->userdata('role') ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="<?= base_url('dashboard'); ?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="<?= base_url('user/editpp'); ?>" class="nav-item nav-link"><i class="fa fa-user me-2"></i>My Profil</a>
                <a href="<?= base_url('catatan'); ?>" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Catatan Harian</a>
                <a href="<?= base_url('user'); ?>" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Management User</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

<?php } else { ?>
    <!-- Sidebar pengguna -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="#" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-book me-2"></i>YU-US</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle"
                        src="<?php echo base_url('assets/foto/' . $this->session->userdata('image')) ?>"
                        alt="Profile Photo"
                        style="width: 40px; height: 40px;">


                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?= $this->session->userdata('username'); ?></h6>
                    <span><?= $this->session->userdata('role') ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="<?= base_url('dashboard'); ?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="<?= base_url('user/editpp'); ?>" class="nav-item nav-link"><i class="fa fa-user me-2"></i>My Profil</a>
                <a href="<?= base_url('catatan'); ?>" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Catatan Harian</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
<?php } ?>