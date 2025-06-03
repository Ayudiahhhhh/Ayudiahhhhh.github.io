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

                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->

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
                <div class="row g-4">
                    <div class="col-md-6 col-xl-6">
                        <div class="card shadow border-0 h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-users fa-3x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">Total Pengguna</h5>
                                    <h3 class="card-text"><?= $total_users; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-6">
                        <div class="card shadow border-0 h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-book fa-3x text-success"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">Total Catatan</h5>
                                    <h3 class="card-text"><?= $total_catatan; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>