
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Undur Diri Siswa</center>
</h3>
<br>
<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Ekstrakurikuler</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Status Undur Diri</th>
            <th>Alasan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($undur as $u) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $u['eskul']; ?></td>
                <td><?= $u['nama']; ?></td>
                <td><?= $u['kelas']; ?></td>
                <td><?= $u['status']; ?></td>
                <td><?= $u['alasan']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>

</table>