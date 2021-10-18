<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/visimisi.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Visi</p>
                <hr>
                <p class="font-italic text-center">"PENEGUHAN KABUPATEN SEMARANG YANG MAJU, MANDIRI, TERTIB DAN SEJAHTERA"</p>

                <p class="title">Misi</p>
                <hr>
                <p> 1. Meningkatkan kualitas SDM yang beriman dan bertaqwa kepada Tuhan YME, berbudaya serta menguasai ilmu
                    pengetahuan dan teknologi. <br>
                    2. Mengembangkan produk unggulan berbasis potensi lokal (INTANPARI) yang sinergi dan berdaya saing
                    serta berwawasan lingkungan untuk menciptakan lapangan kerja dan peningkatan pendapatan. <br>
                    3. Menciptakan pemerintahan yang katalistik dan dinamis dengan mengedepankan prinsip good governance
                    didukung kelembagaan yang efektif dan kinerja aparatur yang kompeten, serta pemanfaatan teknologi
                    informasi. <br>
                    4. Menyediakan infrastruktur daerah yang merata guna mendukung peningkatan kualitas pelayanan dasar dan
                    percepatan pembangunan. <br>
                    5. Mendorong terciptanya partisipasi dan kemandirian masyarakat, kesetaraan dan keadilan gender serta
                    perlindungan anak disemua bidang pembangunan. <br>
                    6. Mendorong terciptanya pengelolaan sumber daya alam dan lingkungan hidup dengan tetap menjaga
                    kelestariannya.
                </p>
                <br><br>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>