<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Catatan Harian</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/jpeg" href="<?php echo base_url() ?>assets/foto/logocatatan.jpeg">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-..."
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #4A90E2;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 500;
    }

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 60px 20px;
      background: #EAF3FC;
    }

    .hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .cta-buttons button {
      padding: 12px 24px;
      margin: 0 10px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .cta-buttons .primary {
      background-color: #4A90E2;
      color: white;
    }

    .cta-buttons .secondary {
      background-color: white;
      border: 2px solid #4A90E2;
      color: #4A90E2;
    }

    .features {
      padding: 60px 20px;
      text-align: center;
    }

    .features h2 {
      margin-bottom: 40px;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .feature-item {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .feature-item i {
      font-size: 30px;
      color: #4A90E2;
      margin-bottom: 10px;
    }

    footer {
      background-color: #4A90E2;
      color: white;
      text-align: center;
      padding: 30px 20px;
      margin-top: 60px;
    }


    @media (max-width: 600px) {
      .hero h1 {
        font-size: 28px;
      }
    }

    /* Section Catatan Publish */
    #catatan-publish {
      padding: 60px 20px;
      background-color: #fff;
      max-width: 1000px;
      margin: 40px auto;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    #catatan-publish h2 {
      text-align: center;
      margin-bottom: 40px;
      color: #4A90E2;
    }

    .catatan-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    .catatan-item {
      background: #f0f6fc;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;
    }

    .catatan-item:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .catatan-item h3 {
      margin-top: 0;
      color: #333;
    }

    .catatan-item p {
      color: #666;
      font-size: 14px;
      line-height: 1.5;
    }

    .button-link {
      display: inline-block;
      padding: 12px 24px;
      font-size: 16px;
      border-radius: 5px;
      text-decoration: none;
      cursor: pointer;
    }

    .button-link.primary {
      background-color: #4A90E2;
      color: white;
      border: none;
    }

    .button-link.primary:hover {
      background-color: #357ABD;
    }
  </style>
</head>

<body>
  <header style="display: flex; align-items: center; justify-content: space-between; padding: 10px 20px; background-color: #4A90E2; color: white;">
  <!-- Logo dan Tulisan -->
  <div style="display: flex; align-items: center; gap: 10px;">
    <iframe
      src="https://lottie.host/embed/ec34c294-6896-4852-8f81-fd6001f58d10/fcHr7c7Lwj.lottie"
      style="border: none; width: 80px; height: 80px;"></iframe>
    <span style="font-size: 20px; font-weight: bold;">CatatanKu</span>
  </div>

  <!-- Navbar -->
  <nav>
    <a href="<?php echo base_url(); ?>" style="color: white; margin: 0 10px; text-decoration: none;">Beranda</a>
    <a href="#fitur" style="color: white; margin: 0 10px; text-decoration: none;">Fitur</a>
    <a href="#catatan-publish" style="color: white; margin: 0 10px; text-decoration: none;">Catatan yang Dipublish</a>
  </nav>
</header>


  <section class="hero">
    <h1>Catat Harimu, Jalani Hidup Lebih Teratur</h1>
    <p>Simpan aktivitas harianmu dengan mudah dan cepat.</p>
    <div class="cta-buttons">
      <a href="<?php echo base_url('login'); ?>" class="primary button-link">Mulai Mencatat</a>
    </div>
  </section>

  <section class="features" id="fitur">
    <h2>Fitur Unggulan</h2>
    <div class="feature-grid">
      <div class="feature-item"><i class="fas fa-pen-nib"></i>Catatan Harian Otomatis</div>
      <div class="feature-item"><i class="fas fa-bell"></i>Pengingat & To-do List</div>
      <!-- <div class="feature-item"><i class="fas fa-cloud-upload-alt"></i>Sinkronisasi Cloud</div> -->
      <div class="feature-item"><i class="fas fa-lock"></i>Privasi Aman</div>
      <!-- <div class="feature-item"><i class="fas fa-adjust"></i>Tema Gelap/Terang</div> -->
      <div class="feature-item"><i class="fas fa-file-pdf"></i>Export ke PDF</div>
    </div>
  </section>

  <section id="catatan-publish">
    <h2>Daftar catatan yang Dipublish</h2>
    <div class="catatan-list">
      <?php if (!empty($catatan_kegiatan)): ?>
        <?php foreach ($catatan_kegiatan as $catatan): ?>
          <div class="catatan-item">
            <h3><?= htmlspecialchars($catatan->hari) ?></h3>
            <p><?= nl2br(htmlspecialchars($catatan->catatan)) ?></p>
            <p><?= nl2br(htmlspecialchars($catatan->tanggal)) ?></p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Tidak ada catatan yang dipublish.</p>
      <?php endif; ?>
    </div>
  </section>

  <footer>
    &copy; 2025 CatatanKu. Hak Cipta Dilindungi.
  </footer>

</body>

</html>