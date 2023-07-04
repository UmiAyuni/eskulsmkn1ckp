<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;

            padding: 10px 10px 10px 10px;
        }
    </style>
    <h3>
        <center>Laporan Data Ekstrakurikuler</center>
    </h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Ekstrakurikuler</th>
                <th>Pembina</th>
                <th>Tempat</th>
                <th>Jadwal</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_eskul as $es) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $es['nama']; ?></td>
                    <td><?= $es['Pembina']; ?></td>
                    <td><?= $es['Tempat']; ?></td>
                    <td><?= $es['Jadwal']; ?></td>
                    <td><?= $es['Deskripsi']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>