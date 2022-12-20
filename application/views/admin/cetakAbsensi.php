<div class="container-xxl pt-5 pb-5">
    <div class="card">
        <div class="card-body">
            <div class="head">
                <h1 class="display-4 text-center">UBSI Payroll Application</h1>
                <h1 class="display-6 text-center">Data Absensi Karyawan</h1>
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
            }
            ?>
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
                                    Hadir</th>
                                <th class="bg-transparent border-bottom-0">
                                    Sakit</th>
                                <th class="bg-transparent border-bottom-0">
                                    Alpha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($laporan_absensi as $lap) { ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td><?= $lap->nik; ?></td>
                                <td><?= $lap->nama_karyawan; ?></td>
                                <td><?= $lap->jenis_kelamin; ?></td>
                                <td><?= $lap->nama_jabatan; ?></td>
                                <td><?= $lap->hadir; ?></td>
                                <td><?= $lap->sakit; ?></td>
                                <td><?= $lap->alpha; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
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