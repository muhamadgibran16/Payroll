<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="<?= base_url('admin/dashboard'); ?>">
                <img src="<?=base_url('assets/') ?>images/brand/brand-dark.png" class="header-brand-img desktop-logo"
                    alt="logo" style="width: auto; height: 55px;">
                <img src="<?=base_url('assets/') ?>images/brand/logo-dark.png" class="header-brand-img toggle-logo"
                    alt="logo" style="width: auto; height: 40px;">
                <img src="<?=base_url('assets/') ?>images/brand/logo-light.png" class="header-brand-img light-logo"
                    alt="logo" style="width: auto; height: 40px;">
                <img src="<?=base_url('assets/') ?>images/brand/brand-light.png" class="header-brand-img light-logo1"
                    alt="logo" style="width: auto; height: 55px;">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu pt-3">
                <!-- <li class="sub-category">
                    <h3><i class="fe fe-home fa-fw"></i> Home</h3>
                </li> -->
                <ul>
                    <li class="slide ">
                        <a class="side-menu__item has-link" data-bs-toggle="slide"
                            href="<?= base_url('karyawan/dashboard'); ?>"><i
                                class="side-menu__icon fe fe-grid"></i><span
                                class="side-menu__label">Dashboard</span></a>
                    </li>
                </ul>
                <ul>
                    <li class="slide">
                        <a class=" side-menu__item has-link" href="<?= base_url('karyawan/dataGaji'); ?>"
                            data-bs-toggle="slide"><i class="side-menu__icon fa fa-money"></i><span
                                class="side-menu__label">Data
                                Gaji</span></a>
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