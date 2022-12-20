<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>
            <div class="card">
                <div class="card-body mt-3">
                    <div class="mb-5">
                        <?= $this->session->flashdata('pesan');?>
                        <a class="btn btn-primary btn-sm ms-4"
                            href="<?= base_url('admin/dataKaryawan/tambahData'); ?>"><i class="fe fe-plus fa-fw"></i>
                            Tambah Data</a>
                    </div>
                    <div class="grid-margin">
                        <div class="">
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="table-responsive">
                                                <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top bg-primary-transparent">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 5%;">No</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                NIK</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Nama</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Email</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Jenis Kelamin</th>
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
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 5%;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($karyawan as $k) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $i++; ?></td>
                                                            <td><?= $k->nik; ?></td>
                                                            <td><?= $k->nama_karyawan; ?></td>
                                                            <td><?= $k->email; ?></td>
                                                            <td><?= $k->jenis_kelamin; ?></td>
                                                            <td><?= $k->nama_jabatan; ?></td>
                                                            <td><?= $k->tanggal_masuk; ?></td>
                                                            <td><?= $k->status; ?></td>
                                                            <td><img src="<?= base_url('assets/images/profil/'.$k->img); ?>"
                                                                    alt=""></td>
                                                            <td><?= $k->hak_akses ?></td>
                                                            <td>
                                                                <center>
                                                                    <div class="">
                                                                        <a href="<?= base_url('admin/dataKaryawan/updateData/'.$k->id_karyawan);?>"
                                                                            class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a onclick="return confirm('Yakin untuk Menghapus?')"
                                                                            href="<?= base_url('admin/dataKaryawan/deleteData/'.$k->id_karyawan);?>"
                                                                            class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </center>
                                                            </td>
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

</div>