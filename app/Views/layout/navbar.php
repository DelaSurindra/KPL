<nav class="navbar-expand-sm bg-nav">
    <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/LOGO_KABUPATEN_SEMARANG.png" alt="" width="30"
            height="45" style="float: left;">
        <span>Kantor Kesatuan Bangsa dan Politik<br> </span>
        <span>Kabupaten Semarang</span>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse bg-nav-button" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-center mt-2 mt-lg-0">
            <li><a class="nav-link menu" href="/">Beranda</a></li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link menu dropdown-toggle" data-toggle="dropdown">Pelayanan</a>
                <ul class="dropdown-menu sm-menu">
                    <li><a class="dropdown-item sub-menu" href="/pendaftaran">Pendaftaran</a></li>
                    <li><a class="dropdown-item sub-menu" href="/aduan">Aduan Ormas</a></li>
                    <li><a class="dropdown-item sub-menu" href="/laporan">Laporan Ormas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link menu dropdown-toggle" data-toggle="dropdown">Profil</a>
                <ul class="dropdown-menu sm-menu">
                    <li><a class="dropdown-item sub-menu" href="/struktur-pegawai">Struktur Pegawai</a></li>
                    <li><a class="dropdown-item sub-menu" href="/visi-misi">Visi dan Misi</a></li>
                    <li><a class="dropdown-item sub-menu" href="/tugas-fungsi">Tugas Pokok dan Fungsi</a></li>
                </ul>
            </li>
            <?php if (session()->get("logged_in")) : ?>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link menu dropdown-toggle" data-toggle="dropdown">Data</a>
                <ul class="dropdown-menu sm-menu">
                    <li><a class="dropdown-item sub-menu" href="/data-kecamatan">Kecamatan</a></li>
                </ul>
            </li>
            <?php endif ?>
        </ul>
        <ul class="navbar-nav navbar-right mt-2 mt-lg-0">
            <?php if (session()->get("logged_in")) : ?>
            <li class="nav-item dropdown dmenu user-profile">
                <a class="navbar-brand" style="color: black;"
                    data-toggle="dropdown"><?= session()->get("username"); ?></a>
                <ul class="dropdown-menu sm-menu">
                    <li><a class="dropdown-item sub-menu" href="/logout">Log Out</a></li>
                </ul>
            </li>
            <?php else : ?>
            <li><a class="nav-link user-profile" style="color: black;" href="/login">Login</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>