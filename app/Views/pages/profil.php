<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/profil.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Profil <?= $data_organisasi[0]['nama_organisasi']; ?></p>
                <hr>
                <table class="table table-striped w-50 m-auto table-responsive">
                    <tr>
                        <td>Pendiri</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['pendiri']; ?></td>
                    </tr>
                    <tr>
                        <td>Pembina</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['pembina']; ?></td>
                    </tr>
                    <tr>
                        <td>Penasihat</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['penasihat']; ?></td>
                    </tr>
                </table>
                <br>
                <table class="table table-striped w-50 m-auto table-responsive">
                    <tr>
                        <th class="text-center col-3">Ketua</th>
                        <th class="text-center col-3">Sekretaris</th>
                        <th class="text-center col-3">Bendahara</th>
                    </tr>
                    <tr>
                        <td class="col-3"><?= $data_organisasi[0]['ketua']; ?></td>
                        <td class="col-3"><?= $data_organisasi[0]['sekretaris']; ?></td>
                        <td class="col-3"><?= $data_organisasi[0]['bendahara']; ?></td>
                    </tr>
                </table>
                <br>
                <table class="table table-striped w-50 m-auto table-responsive">
                    <tr>
                        <th colspan="3">Organisasi</th>
                    </tr>
                    <tr>
                        <td>Asas</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['asas']; ?></td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['tujuan']; ?></td>
                    </tr>
                    <tr>
                        <td>Bidang Kegiatan</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['bidang_kegiatan']; ?></td>
                    </tr>
                    <tr>
                        <td>Ruang Lingkup</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['ruang_lingkup']; ?></td>
                    </tr>
                    <tr>
                        <td>Masa Bhakti</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['masa_bhakti']; ?></td>
                    </tr>
                    <tr>
                        <td>Keputusan Tertinggi</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['keputusan_tertinggi']; ?></td>
                    </tr>
                    <tr>
                        <td>Unit/Satuan/Otonom</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['unit_organisasi']; ?></td>
                    </tr>
                    <tr>
                        <td>Waktu Pendirian</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['waktu']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Kontak</td>
                        <td>:</td>
                        <td><?= $data_organisasi[0]['email']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?= $data_organisasi[0]['no_telepon']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>