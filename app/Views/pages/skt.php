<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/dataperkec.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>Formulir berhasil dikirim. <br> Download SKT dibawah ini</p>
                <ul>
                    <li><a href="https://drive.google.com/file/d/1v2_yzSd_fGYentNMr-Y5H1UqrVrElM9k/view">Surat SKT</a>
                    </li>
                    <li><a href="/">Beranda</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>