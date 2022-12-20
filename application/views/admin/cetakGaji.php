<div class="container-xxl pt-5 pb-5">
    <div class="card">
        <div class="card-body">
            <div class="head">
                <h1 class="display-4 text-center">UBSI Payroll Application</h1>
                <h1 class="display-6 text-center">Data Gaji Karyawan</h1>
            </div>
            <?php
            if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $bulantahun = $bulan.$tahun;
            }else{
                $bulan = date('m');
                $tahun = date('Y');
                $bulantahun = $bulan.$tahun;
            } ?>
            <table class="mb-3">
                <tr>
                    <td>Bulan </td>
                    <td> : </td>
                    <td> <?= $bulan ?></td>
                </tr>
                <tr>
                    <td>Tahun </td>
                    <td> : </td>
                    <td> <?= $tahun ?></td>
                </tr>
            </table>
            <div class="grid-margin">
                <?php $jumlah_data = count($cetakgaji);
                if ($jumlah_data > 0) { ?>
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered mb-0">
                        <thead class="border-top bg-primary-transparent">
                            <tr>
                                <th class="bg-transparent border-bottom-0">No
                                </th>
                                <th class="bg-transparent border-bottom-0">
                                    NIK</th>
                                <th class="bg-transparent border-bottom-0">
                                    Nama Karyawan</th>
                                <th class="bg-transparent border-bottom-0">
                                    Jenis Kelamin</th>
                                <th class="bg-transparent border-bottom-0">
                                    Jabatan</th>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($potongan as $p) {
                            $alpha = $p->jumlah_potongan;
                            } ?>
                            <?php $i = 1; foreach ($cetakgaji as $g) { ?>
                            <?php $potongan = $g->alpha * $alpha ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td><?= $g->nik; ?></td>
                                <td><?= $g->nama_karyawan; ?></td>
                                <td><?= $g->jenis_kelamin; ?></td>
                                <td><?= $g->nama_jabatan; ?></td>
                                <td>Rp.<?= number_format($g->gaji_pokok,0,',','.'); ?></td>
                                <td>Rp.<?= number_format($g->transport,0,',','.'); ?></td>
                                <td>Rp.<?= number_format($g->uang_makan,0,',','.'); ?></td>
                                <td>Rp.<?= number_format($potongan,0,',','.'); ?></td>
                                <td>Rp.<?= number_format($g->gaji_pokok + $g->transport 
                                + $g->uang_makan - $potongan,0,',','.'); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php } else { ?>
                <span class="badge badge-danger text-danger"><i class="fe fe-info-circle"></i>Data
                    Absensi Masih Kosong, Silahkan Input Kehadiran pada bulan dan tahun yang
                    dipilih
                </span>
                <?php } ?>
            </div>
        </div>
    </div>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Purwokerto, <?= date("d M Y"); ?> <br>Staff Finance</p>
                <br><br><br>
                <p>_________________</p>
            </td>
        </tr>
    </table>
</div>
</div>