<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?php echo base_url('css/formpendaftaran.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card center-object">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Formulir Isian Pendaftaran Ormas</p>
                <hr>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                <?php endif; ?>
                <?= form_open_multipart("pendaftaran/store") ?>
                <div id="popup-simpan" class="hide">
                    <div class="card align-middle">
                        <div class="card-body px-5">
                            <p class="title" id="review-nama-organisasi"></p>
                            <hr>
                            <table class="table table-striped table-borderless m-auto table-responsive">
                                <tr>
                                    <td>Pendiri</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-pendiri"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pembina</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-pembina"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penasihat</td>
                                    <td>:</td>
                                    <td id="review-penasihat"></td>
                                </tr>
                            </table>
                            <br>
                            <table class="table table-striped table-borderless m-auto table-responsive">
                                <tr>
                                    <th class="text-center col-3">Ketua</th>
                                    <th class="text-center col-3">Sekretaris</th>
                                    <th class="text-center col-3">Bendahara</th>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <p id="review-ketua"></p>
                                    </td>
                                    <td class="col-3">
                                        <p id="review-sekretaris"></p>
                                    </td>
                                    <td class="col-3">
                                        <p id="review-bendahara"></p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table class="table table-striped table-borderless m-auto table-responsive">
                                <tr>
                                    <th colspan="3">Organisasi</th>
                                </tr>
                                <tr>
                                    <td class="col-2">Asas</td>
                                    <td class="col-auto">:</td>
                                    <td>
                                        <p id="review-asas"></p>
                                    </td>
                                    <td class="col-2">Unit/Satuan/Otonom</td>
                                    <td class="col-auto">:</td>
                                    <td>
                                        <p id="review-unit"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tujuan</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-tujuan"></p>
                                    </td>
                                    <td>Waktu Pendirian</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-waktu"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bidang Kegiatan</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-bidang-kegiatan">
                                    </td>
                                    <td>Alamat Kantor</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-alamat"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ruang Lingkup</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-ruang-lingkup"></p>
                                    </td>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-kecamatan"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Masa Bhakti</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-masa-bhakti"></p>
                                    </td>
                                    <td>Kontak</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-email"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keputusan Tertinggi</td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-keputusan-tertinggi"></p>
                                    </td>
                                    <td></td>
                                    <td>:</td>
                                    <td>
                                        <p id="review-no-telepon"></p>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-group">
                                <label for="" class="text-danger form-label align-middle">Silahkan Download Form
                                    Persyaratan Sebelum
                                    Submit</label>
                            </div>
                            <a class="btn btn-success w-auto" id="form_download"
                                href=<?= base_url('document/pendaftaran/Form Persyaratan SKT.docx') ?>>Download Form
                                Persyaratan</a>
                            <button type="submit" id="submit" class="btn btn-primary disabled"
                                style="float: right;">Submit</button>
                            <a class="btn btn-danger" style="float: right; margin-right: 12px;"
                                onclick="batal_simpan()">Batal</a>
                        </div>
                    </div>
                </div>
                <div id="page-one">
                    <table class="table table-striped table table-bordered">
                        <thead class="thead">
                            <tr>
                                <th scope="col" class="text-center align-middle">NO</th>
                                <th scope="col" class="text-center align-middle">SYARAT - SYARAT</th>
                                <th scope="col" class="text-center align-middle col-4">UPLOAD <br> Size : < 2MB <br>
                                        Type : .pdf, .png, .jpg, .jpeg</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-center align-middle">1.</td>
                                <td class="align-middle">Surat Pemberitahuan Keberadaan Ormas di Kabupaten Semarang yang
                                    ditandatangani
                                    Pendiri dan Pengurus Ormas Kepada Kepala Kesatuan Bangsa dan Politik
                                    Kabupaten
                                    Semarang</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="surat_pemberitahuan"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">2.</td>
                                <td class="align-middle">Surat Keputusan dari Kemenkum dan Ham bagi Ormas yang Telah
                                    Berbadan
                                    Hukum /
                                    SKT
                                    dari Ditjen Polpum Kemendagri bagi Ormas yang Tidak Berbadan Hukum</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="sk_kemenkumham"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">3.</td>
                                <td class="align-middle">Surat Keputusan Kepengurusan Ormas di Kabupaten Semarang</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="sk_kepengurusan"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">4.</td>
                                <td class="align-middle">Salinan / Foto Copy Akte pendirian Ormas (dari Notaris)</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="akte"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">5.</td>
                                <td class="align-middle">AD dan ART</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="ad_art"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">6.</td>
                                <td class="align-middle">Program Kerja Organisasi</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="program_kerja"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">7.</td>
                                <td class="align-middle">Biodata Pengurus Organisasi yaitu Ketua, Sekretaris, Bendahara
                                    atau
                                    Sebutan
                                    lainnya, dilampiri Pas Foto Berwarna Pengurus organisasi (ketua,
                                    Sekretaris,
                                    Bendahara atau sebutan lainnya) Ukuran 4x6 Terbaru dalam 3 (tiga) bulan
                                    terakhir
                                    sebanyak 1 lembar</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="biodata"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input id="next-two" class="btn btn-primary" style="float: right;" value="Next">
                </div>
                <div id="page-two" style="display: none;">
                    <table class="table table-striped table table-bordered">
                        <thead class="thead">
                            <tr>
                                <th scope="col" class="text-center align-middle">NO</th>
                                <th scope="col" class="text-center align-middle">SYARAT - SYARAT</th>
                                <th scope="col" class="text-center align-middle col-4">UPLOAD <br> Size : < 2MB <br>
                                        Type : .pdf, .png, .jpg, .jpeg</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-center align-middle">8.</td>
                                <td class="align-middle">Foto Copy e-KTP Pengurus Organisasi
                                    (Ketua,Sekretaris,Bendahara)</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="ktp"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">9.</td>
                                <td class="align-middle">Formulir Isian Data Ormas</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="formulir"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">10.</td>
                                <td class="align-middle">Surat keterangan Domisili Sekretariat Organisasi dari Lurah
                                    Setempat
                                </td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="surat_keterangan"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">11.</td>
                                <td class="align-middle">NPWP</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="npwp"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">12.</td>
                                <td class="align-middle">Foto Kantor atau Sekretariat Ormas, Tampak Depan yang Memuat
                                    Papan Nama
                                </td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="foto"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center align-middle">13.</td>
                                <td class="align-middle">Keabsahan Kantor atau Sekretariat berupa Bukti Kepemilikan,
                                    atau Surat
                                    Perjanjian Kontrak / Ijin Pakai dari Pemilik / Pengelola</td>
                                <td scope="row" class="align-middle">
                                    <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                                    <input type="file" name="keabsahan"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input id="back-one" class="btn btn-primary" style="float: left;" value="Back">
                    <input id="next-three" class="btn btn-primary" style="float: right;" value="Next">
                </div>
                <div id="page-three" style="display: none;">
                    <div class="row g-3">
                        <div class="col">
                            <label for="validation01" id="name" class="form-label">Nama
                                Organisasi</label>
                            <input type="text" class="form-control" name="nama_organisasi" id="validation01" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label id="ciri" name="ciri" class="form-label"> Asas Ciri Organisasi</label>
                            <input type="text" class="form-control" name="asas" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="name" class="form-label"> Tujuan Organisasi</label>
                            <input type="text" class="form-control" name="tujuan" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label id="bidang" name="bidang" class="form-label"> Bidang Kegiatan</label>
                            <input type="text" class="form-control" name="bidang_kegiatan" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="email" class="form-label"> Ruang Lingkup</label>
                            <input type="text" class="form-control" name="ruang_lingkup" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="name" class="form-label"> Nama Pendiri</label>
                            <input type="text" class="form-control" name="pendiri" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label"> Nama Pembina</label>
                            <input type="text" class="form-control" name="pembina" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label">Nama Penasihat</label>
                            <input type="text" class="form-control" name="penasihat" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="keluhan" class="form-label"> Alamat Kantor</label>
                            <input type="text" class="form-control" name="alamat" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for="keluhan" class="form-label">Kecamatan</label><br>
                            <select class="form-control" name="kecamatan" id="select-kecamatan">
                                <?php foreach($list_kecamatan as $list){ ?>
                                <option value=<?= $list['id'] ?>><?= $list['nama']; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="keluhan" class="form-label"> Waktu Pendirian</label>
                            <input type="date" class="form-control" name="waktu" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3">
                    </div>
                    <input id="back-two" class="btn btn-primary" style="float: left;" value="Back">
                    <input id="next-four" class="btn btn-primary" style="float: right;" value="Next">
                </div>
                <div id="page-four" style="display: none;">
                    <div class="row g-3 pt-3">
                        <div class="col">
                            <label for="keluhan" class="form-label">Nama Ketua</label>
                            <input type="text" class="form-control" name="ketua" placeholder="Ketua/Sederajat" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label">Nama Sekretaris</label>
                            <input type="text" class="form-control" name="sekretaris" placeholder="Sekretaris" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label">Nama Bendahara</label>
                            <input type="text" class="form-control" name="bendahara" placeholder="Bendahara" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3 pt-3">
                        <div class="col">
                            <label for="keluhan" class="form-label">Masa Bhakti Kepengurusan (Tahun)</label>
                            <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" name="masa_bhakti" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for=" name" class="form-label">Keputusan Tertinggi Organisasi</label>
                            <input type="text" class="form-control" name="keputusan_tertinggi" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col">
                            <label for=" name" class="form-label">Unit/Satuan/Otonom Organisasi</label>
                            <input type="text" class="form-control" name="unit_organisasi" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3 pt-3">
                        <div class="col-4">
                            <label for="keluhan" class="form-label">Email</label>
                            <label for="name" class="form-label"> </label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                        <div class="col-4">
                            <label for="name" class="form-label">Telepon</label>
                            <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" name="no_telepon" placeholder="No. Telp" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi field berikut...</p>
                        </div>
                    </div>
                    <div class="row g-3 pt-3">
                        <div class="col">
                            <label for="name" class="form-label">Lambang / Logo Organisasi <br> Size : < 2MB, Type :
                                    .pdf, .png, .jpg, .jpeg</label>
                                    <input type="file" id="myFile" style="color: blue;" name="logo"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg" required>
                            <p class="text-danger hide" id="text-warning">Mohon lengkapi lampiran berikut...</p>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label">Bendera Organisasi (jika ada) <br> Size : < 2MB, Type :
                                    .pdf, .png, .jpg, .jpeg</label>
                                    <input type="file" id="myFile" style="color: blue;" name="bendera"
                                        accept="application/pdf, image/png, image/jpg, image/jpeg">
                        </div>
                    </div>
                    <input id="back-three" class="btn btn-primary" style="float: left;" value="Back">
                    <a class="btn btn-primary" id="btn-simpan" style="float: right;" onclick="simpan()">Submit</a>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$('#form_download').click(function() {
    $('#submit').removeClass('disabled');
    $('#form_download').addClass('disabled');
});

$('#back-one').click(function() {
    $('#page-one').show();
    $('#page-two').hide();
    $('#page-three').hide();
    $('#page-four').hide();
});

$('input[type="file"]').change(function() {
    var size = $(this)[0].files[0].size;
    var extension = $(this).val().replace(/^.*\./, '');
    var pattern = ['pdf', 'png', 'jfif', 'pjpeg', 'jpg', 'pjp', 'jpeg'];

    if (size > 2048000 || $.inArray(extension, pattern) == -1) {
        $(this).val(null);
        $(this).parent().children().first().text("Ukuran file terlalu besar atau type file tidak sesuai...");
        $(this).parent().children().first().removeClass('hide');
    } else {
        $(this).parent().children().first().addClass('hide');
    }
});

$('#next-two').click(function() {
    var allFilled = false;

    document.getElementById('page-one').querySelectorAll('[required]').forEach(function(i) {
        if (!i.value) {
            i.parentElement.firstElementChild.innerHTML = "Mohon lengkapi lampiran berikut...";
            i.parentElement.firstElementChild.classList.remove('hide');
            allFilled = false;
        } else {
            i.parentElement.firstElementChild.classList.add('hide');
            allFilled = true;
        }
    });

    if (allFilled) {
        $('#page-one').hide();
        $('#page-two').show();
        $('#page-three').hide();
        $('#page-four').hide();
    }
});

$('#back-two').click(function() {
    $('#page-one').hide();
    $('#page-two').show();
    $('#page-three').hide();
    $('#page-four').hide();
});

$('#next-three').click(function() {
    var allFilled = false;

    document.getElementById('page-two').querySelectorAll('[required]').forEach(function(i) {
        if (!i.value) {
            i.parentElement.firstElementChild.innerHTML = "Mohon lengkapi lampiran berikut...";
            i.parentElement.firstElementChild.classList.remove('hide');
            allFilled = false;
        } else {
            i.parentElement.firstElementChild.classList.add('hide');
            allFilled = true;
        }
    });

    if (allFilled) {
        $('#page-one').hide();
        $('#page-two').hide();
        $('#page-three').show();
        $('#page-four').hide();
    }
});

$('#back-three').click(function() {
    $('#page-one').hide();
    $('#page-two').hide();
    $('#page-three').show();
    $('#page-four').hide();
});


$('#next-four').click(function() {
    var allFilled = false;

    document.getElementById('page-three').querySelectorAll('[required]').forEach(function(i) {
        if (!i.value) {
            i.parentElement.lastElementChild.innerHTML = "Mohon lengkapi field berikut...";
            i.parentElement.lastElementChild.classList.remove('hide');
            allFilled = false;
        } else {
            i.parentElement.lastElementChild.classList.add('hide');
            allFilled = true;
        }
    });

    if (allFilled) {
        $('#page-one').hide();
        $('#page-two').hide();
        $('#page-three').hide();
        $('#page-four').show();
    }
});

function simpan() {
    var allFilled = false;

    document.getElementById('page-four').querySelectorAll('[required]').forEach(function(i) {
        if (!i.value) {
            i.parentElement.lastElementChild.innerHTML = "Mohon lengkapi field berikut...";
            i.parentElement.lastElementChild.classList.remove('hide');
            allFilled = false;
        } else {
            i.parentElement.lastElementChild.classList.add('hide');
            allFilled = true;
        }
    });

    if (allFilled) {
        $('#review-nama-organisasi').html($('input[name="nama_organisasi"]').val());
        $('#review-pendiri').html($('input[name="pendiri"]').val());
        $('#review-pembina').html($('input[name="pembina"]').val());
        $('#review-penasihat').html($('input[name="penasihat"]').val());
        $('#review-ketua').html($('input[name="ketua"]').val());
        $('#review-sekretaris').html($('input[name="sekretaris"]').val());
        $('#review-bendahara').html($('input[name="bendahara"]').val());
        $('#review-asas').html($('input[name="asas"]').val());
        $('#review-tujuan').html($('input[name="tujuan"]').val());
        $('#review-bidang-kegiatan').html($('input[name="bidang_kegiatan"]').val());
        $('#review-ruang-lingkup').html($('input[name="ruang_lingkup"]').val());
        $('#review-masa-bhakti').html($('input[name="masa_bhakti"]').val());
        $('#review-keputusan-tertinggi').html($('input[name="keputusan_tertinggi"]').val());
        $('#review-unit').html($('input[name="unit_organisasi"]').val());
        $('#review-waktu').html($('input[name="waktu"]').val());
        $('#review-alamat').html($('input[name="alamat"]').val());
        $('#review-kecamatan').html($('select[name="kecamatan"] :selected').text());
        $('#review-email').html($('input[name="email"]').val());
        $('#review-no-telepon').html($('input[name="no_telepon"]').val());
        $('#popup-simpan').removeClass("hide");

        $('#page-four').hide();
    }
}

function batal_simpan() {
    $('#page-four').show();
    $('#popup-simpan').addClass("hide");
}
</script>
<?= $this->endSection() ?>