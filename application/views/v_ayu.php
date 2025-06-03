<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Diri</title>
  <link rel="icon" type="image/jpeg" href="assets/foto/logo.jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: "Arial Black", sans-serif;
      margin: 30px;
      background-color: rgb(225, 124, 238);
    }

    h1.custom-title {
      text-align: center;
      font-family: 'Segoe Script', cursive;
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: black;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: rgb(247, 134, 213);
      color: #000;
    }

    td {
      background-color: beige;
    }

    .btn-custom {
      background-color: rgb(247, 134, 213);
      color: black;
      padding: 10px 15px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <?= $this->session->flashdata('message'); ?>
  <h1 class="custom-title">Data Diri Pengguna</h1>
  <!-- Button trigger modal -->
  <div class="text-end">
    <button type="button" class="btn btn-custom mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah</button>
  </div>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Anak Ke</th>
        <th>Hobi</th>
        <th>Warna Kesukaan</th>
        <th>Cita-Cita</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($profil as $bdta) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $bdta->nama; ?></td>
          <td>
            <img src="<?= base_url('assets/foto/' . $bdta->foto); ?>" alt="Foto <?= $bdta->nama; ?>" style="width:80px; height:80px; object-fit:cover; border-radius:8px;">
          </td>
          <td><?= $bdta->jk; ?></td>
          <td><?= $bdta->tempat; ?></td>
          <td><?= $bdta->tgl_lahir; ?></td>
          <td><?= $bdta->anak_ke; ?></td>
          <td><?= $bdta->hobi; ?></td>
          <td><?= $bdta->warna_kesukaan; ?></td>
          <td><?= $bdta->cita_cita; ?></td>
          <td><?= $bdta->alamat; ?></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open_multipart('ayu/tambah'); ?>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jk" class="form-control" required>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Anak Ke</label>
            <input type="text" name="anak_ke" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Hobi</label>
            <input type="text" name="hobi" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Warna Kesukaan</label>
            <input type="text" name="warna_kesukaan" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Cita-Cita</label>
            <input type="text" name="cita_cita" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Foto</label>
            <input type="file" name="foto" class="form-control">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script>
  setTimeout(() => {
    const alertNode = document.querySelector('.alert');
    if (alertNode) {
      alertNode.classList.remove('show');
    }
  }, 3000); 
</script> -->

</body>

</html>