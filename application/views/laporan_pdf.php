<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h3><?= $title ?></h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Catatan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($catatan_kegiatan as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->hari ?></td>
                <td><?= $row->tanggal ?></td>
                <td><?= $row->catatan ?></td>
                <td><?= $row->status ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
