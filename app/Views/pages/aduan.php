<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/aduan.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Kirimkan aduan anda dibawah ini</p>
                <hr>
                <?= form_open("aduan/store") ?>
                <div class="row g-3">
                    <div class="col">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" aria-label="Nama" required>
                    </div>
                    <div class="col">
                        <label for="name" class="form-label">Nama Organisasi</label>
                        <input type="text" class="form-control" name="nama_organisasi" aria-label="Nama Organisasi"
                            required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="telp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" name="no_telepon" aria-label="telp" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="keluhan" class="form-label">Judul Keluhan</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="isi"></textarea>
                            <label for="floatingTextarea2" required>Isi keluhan anda disini...</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>