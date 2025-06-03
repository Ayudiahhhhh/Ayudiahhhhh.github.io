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
<h3 style="text-align: center;">Laporan Data Users</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($users as $sers): ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= $sers->username ?></td>
                <td><?= $sers->role?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
