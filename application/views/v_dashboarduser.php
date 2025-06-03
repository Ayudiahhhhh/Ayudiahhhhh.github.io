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

            <!--total catatan dan pengguna-->
            <div class="container-fluid mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/img/book.gif') ?>" alt="" width="300px">
                            <h1><?= $total_catatan ?> Catatan</h1>


                        </div>
                        <ul class="list-group">
                            <?php foreach ($catatan as $c) : ?>
                                <li class="list-group-item">
                                    <h5><?= $c->catatan ?></h5>
                                    <small><?= $c->hari . ". " . $c->tanggal ?></small>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>