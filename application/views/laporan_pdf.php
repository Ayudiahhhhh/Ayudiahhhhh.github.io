<!DOCTYPE html>
<html>
<head>
    <title>Laporan Catatan Kegiatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
        }

        table, th, td {
            border: 1px solid #555;
        }

        th {
            background-color:rgb(79, 147, 236);
            text-align: center;
            padding: 8px;
        }

        td {
            padding: 8px;
            vertical-align: top;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h3>Laporan Catatan Kegiatan</h3>
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
                <td><?= htmlspecialchars($row->hari) ?></td>
                <td><?= htmlspecialchars($row->tanggal) ?></td>
                <td><?= htmlspecialchars($row->catatan) ?></td>
                <td><?= htmlspecialchars($row->status) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
