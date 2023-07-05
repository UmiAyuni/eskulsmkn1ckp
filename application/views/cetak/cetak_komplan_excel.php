<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Pendaftar Ekstrakurikuler</center>
</h3>
<br>
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