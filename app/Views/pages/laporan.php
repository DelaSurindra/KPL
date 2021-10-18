<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/aduan.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Laporan Ormas</p>
                <hr>
                <?= form_open_multipart("laporan/store") ?>
                <div class="row g-3">
                    <div class="col">
                        <label for="name" class="form-label">Nama Organisasi</label>
                        <input type="text" class="form-control" name="nama_organisasi" aria-label="Nama" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="telp" class="form-label">Judul Kegiatan</label>
                        <input type="text" class="form-control" name="judul" aria-label="Judul" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="lokasi" class="form-label">Lokasi Kegiatan</label>
                        <input type="text" class="form-control" name="lokasi" aria-label="lokasi" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="tanggal" class="form-label">Tanggal Kegiatan</label>
                        <input type="date" class="form-control" name="tanggal" aria-label="tanggal" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea2" name="deskripsi" style="height: 100px"
                                required></textarea>
                            <label for="floatingTextarea2">Deskripsi Kegiatan</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-3">
                        <label for="name" class="form-label">Upload Foto Kegiatan <br> Size : < 1MB, Type : .png, .jpg, .jpeg</label>
                        <input type="file" id="myFile" name="foto" style="color: blue;" required>
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