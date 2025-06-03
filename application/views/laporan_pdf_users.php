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
            background-color: #f2f2f2;
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
    <h3>Laporan Data Users</h3>
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
                <td><?= htmlspecialchars($sers->username) ?></td>
                <td><?= htmlspecialchars($sers->role) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
