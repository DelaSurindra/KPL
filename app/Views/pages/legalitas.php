<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/legalitas.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div>
                    <h3>Legalitas</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>