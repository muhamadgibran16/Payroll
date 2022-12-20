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
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header text-white fw-semibold bg-primary">
                            Profil Anda
                        </div>
                        <?php foreach ($karyawan as $k) { ?>
                        <div class="card-body mt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/profil/').$k->img ?>" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="grid-margin">
                                        <div class="">
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab5">
                                                            <div class="table-responsive">
                                                                <table id="data-table" class="table text-nowrap mb-0">
                                                                    <tr>
                                                                        <td>NIK </td>
                                                                        <td> : </td>
                                                                        <td><?= $k->nik; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nama </td>
                                                                        <td> : </td>
                                                                        <td><?= $k->nama_karyawan; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jabatan </td>
                                                                        <td> : </td>
                                                                        <td><?= $k->nama_jabatan; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email </td>
                                                                        <td> : </td>
                                                                        <td><?= $k->email; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tanggal Masuk </td>
                                                                        <td> : </td>
                                                                        <td><?= $k->tanggal_masuk; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status </td>
                                                                        <td> : </td>
                                                                        <td><?= $k->status?></td>
                                                                    </tr>
                                                                </table>
                                                                <div class="btn btn-primary ml-3 my-3"> <a
                                                                        href="<?=base_url('admin/profile/ubahprofil/'.$k->id_karyawan); ?>"
                                                                        class="text text-white"><i
                                                                            class="fe fe-edit"></i> Ubah Profil</a>
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
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTAINER END -->
</div>
</div>
<!--app-content close-->