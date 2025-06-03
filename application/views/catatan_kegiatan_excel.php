<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=catatan_kegiatan.xls");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Export Catatan Kegiatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        thead th {
            background-color: #d3d3d3;
            text-align: center;
            font-weight: bold;
        }
        td {
            vertical-align: top;
            padding: 5px;
        }
    </style>
</head>
<body>
<h3 style="text-align: center;">Laporan Catatan Kegiatan</h3>
    <table>
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
            <?php $no = 1; foreach ($catatan_kegiatan as $row): ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= $row->hari ?></td>
                <td><?= date('d-m-Y', strtotime($row->tanggal)) ?></td>
                <td><?= $row->catatan ?></td>
                <td style="text-align: center;"><?= $row->status ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
