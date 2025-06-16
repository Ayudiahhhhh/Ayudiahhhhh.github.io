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
                            <h5 class="card-header text-center">CATATAN AKTIVITAS SEHARI-HARI</h5>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="row mb-3">
                                    <div class="col">
                                        <?php if ($this->session->userdata('role') == "pengguna") { ?>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-plus"></i> Tambah aktivitas
                                            </button>
                                        <?php } ?>
                                    </div>
                                    <div class="col text-end d-flex justify-content-end gap-2">
                                        <!-- Tombol Print -->
                                        <button onclick="window.print()" class="btn btn-secondary">
                                            <i class="fa fa-print"></i> Print Halaman
                                        </button>

                                        <!-- Tombol Dropdown Export -->
                                        <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-download"></i> Export
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu1">
                                                <li><a class="dropdown-item" href="<?= base_url('catatan/pdf'); ?>">PDF</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url('catatan/excel_html'); ?>">EXCEL</a></li>
                                            </ul>
                                        </div>

                                        <!-- Tombol Filter Catatan -->
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-filter"></i>filter
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu1">
                                                <li><a class="dropdown-item" href="<?= base_url('catatan') ?>">All Data</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url('catatan?status=public') ?>">Publish</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url('catatan?status=private') ?>">Private</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table table-success table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
                                                <?php if ($this->session->userdata('role') == "admin") { ?>
                                                    <th scope="col">NAMA</th>
                                                <?php } ?>
                                                <th scope="col">HARI</th>
                                                <th scope="col">TANGGAL</th>
                                                <th scope="col">CATATAN</th>
                                                <?php if ($this->session->userdata('role') == "pengguna") { ?>
                                                    <th scope="col">STATUS</th>
                                                <?php } ?>
                                                <th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($catatan_kegiatan as $cttan) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <?php if ($this->session->userdata('role') == "admin") { ?>
                                                        <td><?= $cttan->username; ?></td>
                                                    <?php } ?>
                                                    <td><?= $cttan->hari; ?></td>
                                                    <td><?= $cttan->tanggal; ?></td>
                                                    <td><?= $cttan->catatan; ?></td>
                                                    <?php if ($this->session->userdata('role') == "pengguna") { ?>
                                                        <td><?= $cttan->status; ?></td>
                                                    <?php } ?>
                                                    <td>
                                                        <?php if ($this->session->userdata('role') == "pengguna") { ?>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                                                data-id="<?= $cttan->id ?>"
                                                                data-hari="<?= $cttan->hari ?>"
                                                                data-tanggal="<?= $cttan->tanggal ?>"
                                                                data-catatan="<?= $cttan->catatan ?>">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        <?php } ?>

                                                        <?php if ($this->session->userdata('role') == "admin") { ?>
                                                            <?php echo anchor('catatan/detail/' . $cttan->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                                                        <?php } ?>

                                                        <a href="<?= base_url('catatan/hapus/' . $cttan->id); ?>" onclick="return confirm('temenan tah pen diapuskuh???')">
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

            <!-- Modal tambah-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <?php echo form_open_multipart('catatan/tambahcatatan'); ?>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Hari</label>
                                <select name="hari" class="form-control" required>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Catatan</label>
                                <input type="text" name="catatan" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select" id="status" required>
                                    <option value="private">Private</option>
                                    <option value="public">Publish</option>
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
                        <?php echo form_open_multipart('catatan/updatecatatan'); ?>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="edit-id">
                            <div class="mb-3">
                                <label class="form-label">Hari</label>
                                <select name="hari" id="edit-hari" class="form-control" required>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" id="edit-tanggal" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Catatan</label>
                                <input type="text" name="catatan" id="edit-catatan" class="form-control" required>
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