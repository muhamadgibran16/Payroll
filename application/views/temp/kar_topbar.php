<!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="<?= base_url('admin/dashboard'); ?>">
                <img src="<?=base_url('assets/') ?>images/brand/company1.png" class="header-brand-img desktop-logo"
                    alt="logo" style="width: auto; height: 35px;">
                <img src="<?=base_url('assets/') ?>images/brand/logobrand.png" class="header-brand-img light-logo1"
                    alt="logo" style="width: auto; height: 35px;">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="d-flex country">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-minimize fullscreen-button"></i>
                                </a>
                            </div>
                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="#" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <img src="<?=base_url('assets/images/profil/').$this->session->userdata('img'); ?>"
                                        alt="" class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                                <?= $this->session->userdata('nama_karyawan'); ?></h5>
                                            <small class="text-muted"> <?= $this->session->userdata('nama_jabatan'); ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item fs-12" href="<?= base_url('karyawan/gantiPassword') ?>">
                                        <i class="dropdown-icon fe fe-feather"></i> Change Password
                                    </a>
                                    <a class="dropdown-item fs-12" href="<?= base_url('auth/logout') ?>">
                                        <i class="dropdown-icon fe fe-power"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>