<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <!-- <div id="particles-js"></div> -->
            <div class="page-header">
                <h1 class="page-title"><?php echo $title; ?></h1>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden admin">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Data Admin</h6>
                                            <h2 class="mb-0 number-font"><?= $admin ?></h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fe fe-user fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden karyawan">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Data Karyawan</h6>
                                            <h2 class="mb-0 number-font"><?= $karyawan ?></h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fe fe-users fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden jabatan">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Data Jabatan</h6>
                                            <h2 class="mb-0 number-font"><?= $jabatan ?></h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fe fe-briefcase fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden absensi">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Data Absensi</h6>
                                            <h2 class="mb-0 number-font"><?= $absensi ?></h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fe fe-layers fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-body mt-3">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="panel panel-primary">
                                        <div class="panel-body tabs-menu-body border-0 pt-0">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab5">
                                                    <div class="table-responsive">
                                                        <table id="data-table"
                                                            class="table table-bordered text-nowrap mb-0">
                                                            <thead class="border-top bg-primary-transparent">
                                                                <tr>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">No</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                        Nama</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                        Jabatan</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                        Tanggal Masuk</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                        Status</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                        Photo</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                        Hak Akses</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                        foreach ($data_karyawan as $k) { ?>
                                                                <tr>
                                                                    <td class="text-center"><?= $i++; ?></td>
                                                                    <td><?= $k->nama_karyawan; ?></td>
                                                                    <td><?= $k->nama_jabatan; ?></td>
                                                                    <td><?= $k->tanggal_masuk; ?></td>
                                                                    <td><?= $k->status; ?></td>
                                                                    <td><img src="<?= base_url('assets/images/profil/'.$k->img); ?>"
                                                                            alt=""></td>
                                                                    <td><?= $k->hak_akses; ?></td>
                                                                </tr> <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->

</div>