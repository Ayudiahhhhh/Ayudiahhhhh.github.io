<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Catatan Mahasiswa</title>
    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><strong>DETAIL CATATAN </strong></h4>
        </div>

        <div class="card text-center mt-3">
            <div class="card-header bg-light">
                <strong>DETAIL CATATAN USER</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title text-primary"><?= $cttan->username ?></h5>
                <p class="card-text">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-start">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Hari:</strong> <?= $cttan->hari ?></li>
                                <li class="list-group-item"><strong>Tanggal:</strong> <?= $cttan->tanggal ?></li>
                                <li class="list-group-item"><strong>Catatan:</strong> <?= $cttan->catatan ?></li>
                                <li class="list-group-item">
                                    <strong>Status:</strong>
                                    <?php if($cttan->status == 'public'): ?>
                                        <span class="badge bg-success">Public</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Private</span>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </p>
                <a href="<?= base_url('catatan/index'); ?>" class="btn btn-primary mt-4">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
            <div class="card-footer text-muted">
                <?= date('d M Y') ?>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Bootstrap JS Bundle (Popper.js included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
