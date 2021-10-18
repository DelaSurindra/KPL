<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/beranda.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-beranda">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active background-image-1">
                <div class="carousel-caption"> </div>
            </div>

            <div class="item background-image-2">
                <div class="carousel-caption"> </div>
            </div>

            <div class="item background-image-3">
                <div class="carousel-caption"> </div>
            </div>
            
        </div>
        
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="proker">
        <h4>Program Kerja</h4>
        <hr>
    </div>

    <div>
        <div class="text-form">
            <h4 id="text-form">Kegiatan Kami</h4>
            <hr>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <img class="keg-kiri" src=<?= base_url('img/Kegiatan Bimtek Bantuan Keuangan Partai Politik.jpeg') ?>
                    width="300px" height="200px;">
                <p class="text-center">Kegiatan Bimtek Bantuan Keuangan Partai Politik.</p>
            </div>

            <div class="col-sm-4">
                <img class="keg-tengah" src=<?= base_url('img/Kegiatan Pendidikan Partai Politik.jpeg') ?> width="300px"
                    height="200px;">
                <p class="text-center">Kegiatan Pendidikan Partai Politik.</p>

            </div>

            <div class="col-sm-4">
                <img src=<?= base_url('img/Program Pembinaan Organisasi Masyarakat.jpeg') ?> width="300px"
                    height="200px;">
                <p class="text-center">Program Pembinaan Organisasi Masyarakat.</p>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>