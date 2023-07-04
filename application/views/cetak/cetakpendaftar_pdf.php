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
        <center>Laporan Data Pendaftar</center>
    </h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Ekstrakurikuler</th>
                <th>Nama</th>
                <th>Tempat</th>
                <th>Tanggal lahir</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>No Whatsapp</th>
                <th>Status Pendaftaran</th>
                <th>Alasan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pendaftar as $fd) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $fd['ekskul']; ?></td>
                    <td><?= $fd['nama']; ?></td>
                    <td><?= $fd['tempat']; ?></td>
                    <td><?= $fd['tgl_lahir']; ?></td>
                    <td><?= $fd['jenkel']; ?></td>
                    <td><?= $fd['kelas']; ?></td>
                    <td><?= $fd['no_wa']; ?></td>
                    <td><?= $fd['status']; ?> </td>
                    <td><?= $fd['alasan']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>