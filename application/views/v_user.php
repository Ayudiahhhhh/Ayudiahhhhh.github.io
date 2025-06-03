<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

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

                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>

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

            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="card">
                            <h5 class="card-header text-center">USER CATATAN AKTIVITAS SEHARI-HARI</h5>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa fa-plus"></i> Tambah user
                                        </button>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button onclick="window.print()" class="btn btn-secondary">
                                            <i class="fa fa-print"></i> Print Halaman
                                        </button>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-success table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
                                                <th scope="col">USERNAME</th>
                                                <th scope="col">ROLE</th>
                                                <th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($users as $sers) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $sers->username; ?></td>
                                                    <td><?= $sers->role; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                                            data-id="<?= $sers->id ?>"
                                                            data-username="<?= $sers->username ?>"
                                                            data-password="<?= $sers->password ?>"
                                                            data-role="<?= $sers->role ?>">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <a href="<?= base_url('user/hapus/' . $sers->id); ?>" onclick="return confirm('temenan tah pen diapuskuh???')">
                                                            <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <?php echo form_open_multipart('user/tambahuser'); ?>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Level</label>
                                <select name="role" class="form-select" id="role" required>
                                    <option value="pengguna">Pengguna</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Aktivitas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <?php echo form_open_multipart('user/updateuser'); ?>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="edit-id">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" id="edit-username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" id="edit-password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Level</label>
                                <select name="role" class="form-select" id="edit-role" required>
                                    <option value="pengguna">Pengguna</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

