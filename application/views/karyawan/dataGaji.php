<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>

            <div class="card">
                <div class="card-body mt-2">
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
                                                                style="width: 5%;">
                                                                Bulan/Tahun
                                                            </th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Gaji Pokok</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Transport</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Uang Makan</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Potongan</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Total Gaji</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Slip Gaji</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($potongan as $p) {
                                                            $alpha = $p->jumlah_potongan;
                                                        } ?>
                                                        <?php foreach ($gaji as $g) { ?>
                                                        <?php $potongan = $g->alpha * $alpha ?>
                                                        <tr>
                                                            <td><?= $g->bulan; ?></td>
                                                            <td>Rp. <?= number_format($g->gaji_pokok,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($g->transport,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($g->uang_makan,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($potongan,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($g->gaji_pokok + $g->transport 
                                                            + $g->uang_makan - $potongan,0,',','.'); ?></td>
                                                            <td>
                                                                <center>
                                                                    <div class="">
                                                                        <a href="<?= base_url('karyawan/dataGaji/cetakSlip/'.$g->id_absensi);?>"
                                                                            class="btn text-primary btn-sm"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Print"><span
                                                                                class="fe fe-printer fs-14"></span></a>
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