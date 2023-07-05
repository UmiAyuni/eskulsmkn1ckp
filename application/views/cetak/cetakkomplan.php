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
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>

    <h3>
        <center>Laporan Data Komplain Siswa</center>
    </h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Ekstrakurikuler</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Status Komplain</th>
                <th>Keluhan</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($komplan as $k) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $k['eskul']; ?></td>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['kelas']; ?></td>
                    <td><?= $k['status']; ?></td>
                    <td><?= $k['keluhan']; ?></td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>