<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card">
                <div class="card-body mt-2">
                    <div class="mb-5">
                        <a class="btn btn-primary btn-sm ms-4"
                            href="<?= base_url('admin/potonganGaji/tambahData'); ?>"><i class="fe fe-plus fa-fw"></i>
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
                                                                style="width: 5%;">No
                                                            </th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Jenis Potongan</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Jenis Potongan</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 5%;">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($potongan_gaji as $p) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $i++; ?></td>
                                                            <td><?= $p->potongan; ?></td>
                                                            <td>Rp.
                                                                <?= number_format($p->jumlah_potongan,0,',','.') ; ?>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <div class="">
                                                                        <a href="<?= base_url('admin/potonganGaji/updateData/'.$p->id_potongan);?>"
                                                                            class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Edit"><span
                                                                                class="fe fe-edit fs-14"></span></a>
                                                                        <a onclick="return confirm('Yakin untuk Menghapus?')"
                                                                            href="<?= base_url('admin/potonganGaji/deleteData/'.$p->id_potongan);?>"
                                                                            class="btn text-danger btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete"><span
                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                    </div>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
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