<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="<?= base_url('admin/dashboard'); ?>">
                <img src="../assets/images/brand/company.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="../assets/images/brand/brand.png" class="header-brand-img light-logo" alt="logo">
                <img src="../assets/images/brand/company.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Home</h3>
                </li>
                <ul>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide"
                            href="<?= base_url('admin/dashboard'); ?>"><i class="side-menu__icon fe fe-home"></i><span
                                class="side-menu__label">Dashboard</span></a>
                    </li>
                </ul>
                <li class="sub-category">
                    <h3><i class="fas fa-fw fa-database"> </i> Master Data</h3>
                </li>
                <ul>
                    <li class="slide">
                        <a class="side-menu__item has-link" href="<?= base_url('admin/dataAdmin'); ?>"
                            data-bs-toggle="slide"><i class="side-menu__icon fe fe-user"></i><span
                                class="side-menu__label">Data
                                Admin</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" href="<?= base_url('admin/dataKaryawan'); ?>"
                            data-bs-toggle="slide"><i class="side-menu__icon fe fe-users"></i><span
                                class="side-menu__label">Data
                                Karyawan</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" href="<?= base_url('admin/dataJabatan'); ?>"
                            data-bs-toggle="slide"><i class="side-menu__icon fe fe-zap"></i><span
                                class="side-menu__label">Data
                                Jabatan</span></a>
                    </li>
                </ul>
                <li class="sub-category">
                    <h3><i class="fas  fa-fw fa-money-check-alt"></i> Transaksi</h3>
                </li>
                <ul>
                    <li class="slide">
                        <a class="side-menu__item has-link" href="<?= base_url('admin/dataAbsensi'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-layers"></i><span
                                class="side-menu__label">Data
                                Absensi</span></a>
                    </li>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/potonganGaji'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-cpu"></i><span
                                class="side-menu__label">Potongan
                                Gaji
                            </span></a>
                    </li>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/dataGaji'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-folder"></i><span
                                class="side-menu__label">Data
                                Gaji</span></a>
                    </li>
                </ul>
                <li class="sub-category">
                    <h3><i class="far fa-fw fa-copy"></i> Laporan</h3>
                </li>
                <ul>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/laporanAbsensi'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-folder"></i><span
                                class="side-menu__label">Laporan
                                Absensi</span></a>
                    </li>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/laporanGaji'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-folder"></i><span
                                class="side-menu__label">Laporan
                                Gaji</span></a>
                    </li>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/slipGaji'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-folder"></i><span
                                class="side-menu__label">Slip
                                Gaji</span></a>
                    </li>
                </ul>
                <li class="sub-category">
                    <h3>Utility</h3>
                </li>
                <ul>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/profile'); ?>" target="_blank"><i
                                class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Profile
                            </span></a>
                    </li>
                    <li>
                        <a class=" side-menu__item has-link" href="<?= base_url('admin/dashboard'); ?>"
                            target="_blank"><i class="side-menu__icon fe fe-power"></i><span
                                class="side-menu__label">Log
                                Out</span></a>
                    </li>
                </ul>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>