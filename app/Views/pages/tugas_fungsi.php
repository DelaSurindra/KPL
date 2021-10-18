<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/visimisi.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Tugas Pokok Organisasi</p>
                <hr>
                <p class="font-italic text-justify">Kantor Kesatuan Bangsa dan Politik Kabupaten Semarang mempunyai tugas
                    Melaksanakan penyusunan dan pelaksanaan kebijakan Daerah dibidang kesatuan bangsa dan politik.</p>

                <p class="title">Fungsi Organisasi</p>
                <hr>
                <p>Kantor Kesatuan Bangsa dan Politik menyelenggarakan fungsi :</p>
                <p class="text-justify"> 1. Perumusan kebijakan teknis dibidang kesatuan bangsa dan politik. <br>
                    2. Pemberian dukungan atas penyelenggaraan pemerintahan daerah dibidang kesatuan bangsa dan organisasi
                    masyarakat dan organisasi politik. <br>
                    3. Pembinaan dan pelaksanaan tugas bidang kesatuan bangsa dan organisasi masyarakat dan organisasi
                    politik. <br>
                    4. Pelaksanaan tugas lain yang diberikan oleh Bupati.
                </p>
                <br><br>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>