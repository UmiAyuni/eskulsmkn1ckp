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