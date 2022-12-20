<div class="container-xxl pt-5 pb-5">
    <div class="card">
        <div class="card-body">
            <div class="head">
                <h1 class="display-4 text-center">UBSI Payroll Application</h1>
                <h1 class="display-6 text-center">Slip Gaji Karyawan</h1>
            </div>

            <?php foreach ($potongan as $pot) { 
                $potongan=$pot->jumlah_potongan;
            }  ?>
            <?php foreach ($print as $p) { ?>
            <?php ($potongan_gaji=$p->alpha * $potongan) ?>
            <table class="mb-3" width="100%">
                <tr>
                    <td width="20%">NIK </td>
                    <td width="2%"> : </td>
                    <td> <?= $p->nik ?></td>
                </tr>
                <tr>
                    <td>Nama Karyawan </td>
                    <td> : </td>
                    <td> <?= $p->nama_karyawan ?></td>
                </tr>
                <tr>
                    <td>Jabatan </td>
                    <td> : </td>
                    <td> <?= $p->nama_jabatan ?></td>
                </tr>
                <tr>
                    <td>Bulan </td>
                    <td> : </td>
                    <td> <?= substr($p->bulan, 0, 2) ?></td>
                </tr>
                <tr>
                    <td>Tahun </td>
                    <td> : </td>
                    <td> <?= substr($p->bulan, 2, 4) ?></td>
                </tr>
            </table>
            <div class="grid-margin">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered mb-0">
                        <thead class="border-top bg-primary-transparent">
                            <tr>
                                <th class="bg-transparent border-bottom-0" width="3%">No
                                </th>
                                <th class="bg-transparent border-bottom-0">
                                    Keterangan</th>
                                <th class="bg-transparent border-bottom-0">
                                    Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Gaji Pokok</td>
                                <td>Rp. <?= number_format($p->gaji_pokok,0,',','.'); ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Transport</td>
                                <td>Rp. <?= number_format($p->transport,0,',','.'); ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Uang Makan</td>
                                <td>Rp. <?= number_format($p->uang_makan,0,',','.'); ?></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Potongan</td>
                                <td>Rp. <?= number_format($potongan_gaji,0,',','.'); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center fw-bold">Total Gaji</td>
                                <td class="fw-bold">Rp. <?= number_format($p->gaji_pokok + $p->transport 
                                + $p->uang_makan - $potongan_gaji,0,',','.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <table class="mt-3" width="100%">
            <tr>
                <td></td>
                <td width="">
                    <p>Karyawan</p>
                    <br><br><br>
                    <p class="text-semibold"><?= $p->nama_karyawan ;?></p>
                </td>
                <td width="200px">
                    <p>Purwokerto, <?= date("d M Y"); ?> <br>Staff Finance</p>
                    <br><br><br>
                    <p>_________________________</p>
                </td>
            </tr>
        </table>
        <?php } ?>
    </div>
</div>
</div>