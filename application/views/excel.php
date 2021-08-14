<?php
header("Content-type:application/octet-stream/");
header("Content-Disposition:attactment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomer Berkas</th>
            <th>Blanko</th>
            <th>Kluster</th>
            <th>alasan K3</th>
            <th>Nomer Alas Hak</th>
            <th>NIB</th>
            <th>Luas</th>
            <th>Alamat Obyek</th>
            <th>Alamat Tambahan</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>SU</th>
            <th>No SHM</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Tempat Lahir</th>
            <th>PBT</th>
            <th>DI201b</th>
            <th>tanggal DI201b</th>
            <th>Nomor 202</th>
            <th>Tanggal Nomor 202</th>
            <th>DI305</th>
            <th>Tanggal DI305</th>
            <th>DI301</th>
            <th>Tanggal DI301</th>
            <th>DI302</th>
            <th>Tanggal DI302</th>
            <th>DI307 SU</th>
            <th>Tanggal DI307 SU</th>
            <th>DI307 HAK</th>
            <th>Tanggal DI307 HAK</th>
            <th>DI208</th>
            <th>Tanggal DI208</th>
            <th>DI301A</th>
            <th>Tanggal DI301A</th>
        </tr>
    </thead>
    <?= $i = 1;
    foreach ($inventory as $inv) :
    ?>
        <tbody>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $inv['nomer_berkas']; ?></td>
                <td><?= $inv['blanko']; ?></td>
                <td><?= $inv['kluster']; ?></td>
                <td><?= $inv['alasan_k3']; ?></td>
                <td><?= $inv['nomer_alas_hak']; ?></td>
                <td><?= $inv['nib']; ?></td>
                <td><?= $inv['luas']; ?></td>
                <td><?= $inv['alamat_obyek']; ?></td>
                <td><?= $inv['alamat_tambahan']; ?></td>
                <td><?= $inv['desa']; ?></td>
                <td><?= $inv['kecamatan']; ?></td>
                <td><?= $inv['su']; ?></td>
                <td><?= $inv['no_shm']; ?></td>
                <td><?= $inv['nama']; ?></td>
                <td><?= $inv['nik']; ?></td>
                <td><?= $inv['alamat']; ?></td>
                <td><?= $inv['pekerjaan']; ?></td>
                <td><?= $inv['tempat_lahir']; ?></td>
                <td><?= $inv['tanggal_lahir']; ?></td>
                <td><?= $inv['pbt']; ?></td>
                <td><?= $inv['di201b']; ?></td>
                <td><?= $inv['tgl_di201b']; ?></td>
                <td><?= $inv['no_202']; ?></td>
                <td><?= $inv['tgl_202']; ?></td>
                <td><?= $inv['di305']; ?></td>
                <td><?= $inv['tgl_di305']; ?></td>
                <td><?= $inv['di301']; ?></td>
                <td><?= $inv['tgl_di301']; ?></td>
                <td><?= $inv['di302']; ?></td>
                <td><?= $inv['tgl_di302']; ?></td>
                <td><?= $inv['di307_su']; ?></td>
                <td><?= $inv['tgl_di307_su']; ?></td>
                <td><?= $inv['di307_hak']; ?></td>
                <td><?= $inv['tgl_di307_hak']; ?></td>
                <td><?= $inv['di208']; ?></td>
                <td><?= $inv['tgl_di208']; ?></td>
                <td><?= $inv['di301a']; ?></td>
                <td><?= $inv['tgl_di301a']; ?></td>
            </tr>
        </tbody>
    <?php endforeach; ?>
</table>