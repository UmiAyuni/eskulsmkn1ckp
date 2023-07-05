
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Ekstrakurikuler</center>
</h3>
<br>
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
