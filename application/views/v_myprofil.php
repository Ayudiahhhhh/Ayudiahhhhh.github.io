<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>

      

       <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item ">
                        <a href="<?= base_url('login/logout'); ?>" class="nav-link">
                            <span class="d-none d-lg-inline-flex"> Logout 
                                </span>
                                <i class="fas fa-arrow-right"></i>
                        </a>
                      
                    </div>
                </div>
    </nav>
    <!-- Navbar End -->

    <!-- Card Start -->
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">My Profil</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo form_open_multipart('user/updateuserpp'); ?>
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" value="<?= $this->session->userdata('username') ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password1" name="password" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password2" name="password2" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?php echo base_url('assets/foto/profill.jpeg'); ?>" alt="Preview" class="img-thumbnail" style="max-width: 100%;">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="image" name="image">
                                            <label class="input-group-text" for="image">Upload</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" id="submit" class="btn btn-primary" disabled>Simpan</button>

                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card End -->
