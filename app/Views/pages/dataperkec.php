<?= $this->extend('layout/page_layout') ?>

<?= $this->section('style') ?>

<?= $this->endSection() ?>

<?= $this->section('popup') ?>
<div id="popup-delete" class="hide"
    style="background-color: rgba(0, 0, 0, 0.5); width: 100vw; height: 100vh; position: fixed; z-index: 10;">
    <div class="card center-object text-center align-middle"
        style="top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 16px; position: absolute; width: 36rem">
        <div class="card-body">
            <p>Apakah anda yakin ingin menghapus data ini?</p>
            <div class="row g-3">
                <div class="col">
                    <a id="confirm-delete" class="btn btn-danger btn-block">Delete</a>
                </div>
                <div class="col">
                    <button class="btn btn-warning btn-block" onclick="batal_hapus()">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-body" style="padding: 48px;">
                <p class="title">Data Perkecamatan</p>
                <hr>
                <div class="form-group">
                    <form action="data-kecamatan">
                        <b>Kecamatan</b>
                        <select class="form-control" name="select-kecamatan">
                            <?php foreach($list_kecamatan as $list){ ?>
                            <option value=<?= $list['id']; ?> <?php if ($list['id'] == $select_kecamatan) { echo 'selected="selected"'; } ?>><?= $list['nama']; ?> </option>
                            <?php } ?>
                        </select>
                        <br>
                        <button class="btn btn-success">Lihat</button>
                    </form>

                    <br>

                    <?php if (isset($select_kecamatan)) : ?>
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center align-middle">No.</th>
                                    <th scope="col" class="text-center align-middle">Nama Organisasi</th>
                                    <th scope="col" class="text-center align-middle">Nama Kegiatan</th>
                                    <th scope="col" class="text-center align-middle">Alamat</th>
                                    <th scope="col" class="text-center align-middle">Detail</th>
                                    <th scope="col" colspan="2" class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-data">
                                <?php $i = 1;
                                foreach ($data_kecamatan as $data) : ?>
                                <form action="/data-kecamatan/update/" method="POST">
                                    <tr>
                                        <th scope="row" class="text-center align-middle">
                                            <input type="text" class="form-control hide" name="id"
                                                value="<?= $data["id"]; ?>">
                                            <input type="text" class="form-control hide" name="kecamatan"
                                                value="<?= $data["kecamatan"]; ?>">
                                            <p><?= $i; ?></p>
                                        </th>
                                        <td class="col-sm-4 align-middle">
                                            <input id=<?= "edit-nama-" . $data["id"]; ?> type="text"
                                                class="form-control hide" name="nama_organisasi"
                                                value="<?= $data["nama_organisasi"]; ?>">
                                            <p id=<?= "nama-" . $data["id"]; ?>>
                                                <?= $data["nama_organisasi"]; ?></p>
                                        </td>
                                        <td class="col-sm-2 align-middle">
                                            <input id=<?= "edit-bidang-" . $data["id"]; ?> type="text"
                                                class="form-control hide" name="bidang_kegiatan"
                                                value="<?= $data["bidang_kegiatan"]; ?>">
                                            <p id=<?= "bidang-" . $data["id"]; ?>>
                                                <?= $data["bidang_kegiatan"]; ?></p>
                                        </td>
                                        <td class="col-sm-3 align-middle">
                                            <input id=<?= "edit-alamat-" . $data["id"]; ?> type="text"
                                                class="form-control hide" name="alamat" value="<?= $data["alamat"]; ?>">
                                            <p id=<?= "alamat-" . $data["id"]; ?>>
                                                <?= $data["alamat"]; ?></p>
                                        </td>
                                        <td class="col-sm-1 text-center align-middle" id=<?= "detail-" . $data["id"]; ?>><a
                                                href=<?= "/data-kecamatan/detail/" . $data["id"]; ?> class="btn btn-success btn-action">Detail</a></td>
                                        <td class="col-sm-1 text-center align-middle" id=<?= "edit-" . $data["id"]; ?>><a
                                                class="btn btn-warning btn-action"
                                                onclick="edit(<?= $data['id']; ?>)">Edit</a></td>
                                        <td class="text-center align-middle col-sm-1 hide" id=<?= "apply-" . $data["id"]; ?>><button
                                                class="btn btn-success btn-action">Apply</button></td>
                                        <td class="text-center align-middle col-sm-1"><a class="btn btn-danger btn-action"
                                                onclick="hapus(<?= $data['id'] . ',' . $data['kecamatan']; ?>)">Delete</a>
                                        </td>
                                    </tr>
                                </form>
                                <?php $i++; endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$id_organisasi;
$id_kecamatan;

function edit(id) {
    $("#nama-" + id).addClass("hide");
    $("#edit-nama-" + id).removeClass("hide");
    $("#bidang-" + id).addClass("hide");
    $("#edit-bidang-" + id).removeClass("hide");
    $("#alamat-" + id).addClass("hide");
    $("#edit-alamat-" + id).removeClass("hide");
    $("#edit-" + id).addClass("hide");
    $("#apply-" + id).removeClass("hide");
}

function hapus($id, $kecamatan) {
    $id_organisasi = $id;
    $id_kecamatan = $kecamatan;

    $('#confirm-delete').attr("href", "/data-kecamatan/delete/" + $id_kecamatan + "/" + $id_organisasi);

    $('#popup-delete').removeClass("hide");
}

function batal_hapus() {
    $('#popup-delete').addClass("hide");
}
</script>
<?= $this->endsection() ?>