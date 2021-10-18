<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/profil.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Struktur Pegawai</p>
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="align-middle text-center">No</th>
                            <th scope="col" class="align-middle text-center">Nama Lengkap <br> Tempat Tanggal Lahir</th>
                            <th scope="col" class="align-middle text-center">NIP <br> NIP Lama</th>
                            <th scope="col" class="align-middle text-center">Golongan <br> TMT</th>
                            <th scope="col" class="align-middle text-center">ESL</th>
                            <th scope="col" class="align-middle text-center">Jabatan <br> Unit Kerja <br> TMT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($list_pegawai as $list) : ?>
                        <tr>
                            <th scope="row" class="align-middle text-center"><?= $i ?></th>
                            <td class="align-middle col-3"><?= $list["nama"] ?> <br> <?= $list["tempat_lahir"] ?>, <?= $list["tanggal_lahir"] ?></td>
                            <td class="align-middle col-2"><?= $list["nip"] ?> <br> <?= $list["nip_lama"] ?></td>
                            <td class="align-middle col-1"><?= $list["golongan"] ?> <br> <?= $list["tmt_golongan"] ?></td>
                            <td class="align-middle text-center col-1"><?= $list["esl"] ?></td>
                            <td class="align-middle col-6"><?= $list["jabatan"] ?> <br> <?= $list["unit_kerja"] ?> <br> <?= $list["tmt_jabatan"] ?></td>
                        </tr>
                        <?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>