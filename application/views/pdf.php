<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            top: 0;
            right: 0;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            margin: auto 250px;
            top: 10px;
            padding: 10px;
            font-size: 0.5em;
        }

        .cop .cop-body {
            height: 80px;
            width: 100%;
        }

        .cop .cop-body .text {
            position: absolute;
            left: 150px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }

        .title {
            display: flex;
            justify-content: center;
            font-weight: bold;
            text-align: center;
            font-size: 1.2em;
        }

        /* table style */
        .content .table table th {
            text-align: left;

        }


        .nomer table {
            border-collapse: collapse;
            padding: 20px;
            border: solid 1px black;
        }

        .nomer table tr {
            border: solid 1px black;
        }

        .nomer table th {
            border: solid 1px black;
        }

        .nomer table td {
            border: solid 1px black;
        }
    </style>
</head>

<body>

    <!-- COP -->
    <div class="cop">
        <div class="cop-body">
            <img src="<?= base_url(); ?>assets/img/cop.jpeg" alt="logo pemerintahan jawa tenggah">
        </div>
    </div>
    <div class="title">
        <p>DATA BIDANG TANAH DESA JATISABA</p>
    </div>

    <?php foreach ($inventory as $inv) : ?>
        <h3>I. Data Pemilik</h3>
        <div class="info">
            <p>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: <?= $inv['nik']; ?></p>
            <p>Nama &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $inv['nama']; ?></p>
            <p>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $inv['alamat']; ?></p>
            <p>Tempat, Tanggal lahir &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: <?= $inv['tempat_lahir']; ?>, <?= $inv['tanggal_lahir']; ?> </p>
            <p>Pekerjaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $inv['pekerjaan']; ?></p>
        </div>
        <h3>II. Data Tanah</h3>
        <div class="content">
            <div class="table">
                <table>
                    <tr>
                        <th>NIB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['nib']; ?></td>
                    </tr>
                    <tr>
                        <th>Nomer Berkas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['nomer_berkas']; ?></td>
                    </tr>
                    <tr>
                        <th>Blangko &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['blanko']; ?></td>
                    </tr>
                    <tr>
                        <th>Kluster &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['kluster']; ?></td>
                    </tr>
                    <tr>
                        <th>Alasan K3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['alasan_k3']; ?></td>
                    </tr>
                    <tr>
                        <th>No Alas Hak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['nomer_alas_hak']; ?></td>
                    </tr>
                    <tr>
                        <th>Luas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['luas']; ?></td>
                    </tr>
                    <tr>
                        <th>Desa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['desa']; ?></td>
                    </tr>
                    <tr>
                        <th>Kecamatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['kecamatan']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat Obyek &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['alamat_obyek']; ?></td>
                    </tr>
                    <tr>
                        <th>Blok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['alamat_tambahan']; ?></td>
                    </tr>
                    <tr>
                        <th>Surat Usaha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['su']; ?></td>
                    </tr>
                    <tr>
                        <th>No SHM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
                        <td>: <?= $inv['no_shm']; ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <br>

        <div class="nomer">
            <table>
                <tr>
                    <th>PBT</th>
                    <th>DI201B</th>
                    <th>TANGGAL DI201B</th>
                    <th>NO 202</th>
                    <th>TANGGAL NO 202</th>
                    <th>DI305</th>
                    <th>TANGGAL DI305</th>
                    <th>DI301</th>
                    <th>TANGGAL DI301</th>
                    <th>DI302</th>
                    <th>TANGGAL DI302</th>
                    <th>DI307 SU</th>
                    <th>TANGGAL DI307 SU</th>
                    <th>DI307 HAK</th>
                    <th>DI208</th>
                    <th>TANGGAL DI208</th>
                    <th>DI301A</th>
                    <th>TANGGAL DI301A</th>
                </tr>
                <tr>
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
            </table>
        </div>
    <?php endforeach; ?>
</body>