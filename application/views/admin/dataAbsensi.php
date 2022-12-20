<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white text-semibold">
                    Filter Data Absensi Karyawan
                </div>
                <div class="card-body">
                    <form class="form-inline">
                        <div class="row">
                            <div class="form-group col-auto">
                                <label for="staticEmail2">Bulan</label>
                                <select class="form-control ms-2" name="bulan" id="">
                                    <option value="">-- Bulan --</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="form-group col-auto ms-4">
                                <label for="staticEmail2">Tahun</label>
                                <select class="form-control ms-2" name="tahun" id="">
                                    <option value="">-- Tahun --</option>
                                    <?php $tahun = date('Y') ;
                                    for($i=2022;$i<$tahun+10;$i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ms-auto me-4">Show Data</button>
                        <a href="<?=base_url('admin/dataAbsensi/inputAbsensi'); ?>" class=" btn btn-success">Input
                            Kehadiran</a>
                    </form>
                </div>
            </div>

            <?php if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $bulantahun = $bulan.$tahun;
            }else{
                $bulan = date('m');
                $tahun = date('Y');
                $bulantahun = $bulan.$tahun;
            }
            ?>
            <div class="alert alert-info">Data Kehadiran Karyawan Bulan : <span
                    class="text-semibold"><?= $bulan ?></span> Tahun : <span class="text-semibold"><?= $tahun ?></span>
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
                                                <?php $jml_data = count($absensi);
                                                if($jml_data > 0) { ?>
                                                <table id="data-table"
                                                    class="table datatable table-bordered text-nowrap mb-0">
                                                    <thead class="border-top bg-primary-transparent">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 5%;">No
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
                                                        <?php $i = 1;
                                                        foreach ($absensi as $a) { ?>
                                                        <tr>
                                                            <td class="text-center"><?= $i++; ?></td>
                                                            <td><?= $a->nik; ?></td>
                                                            <td><?= $a->nama_karyawan; ?></td>
                                                            <td><?= $a->jenis_kelamin; ?></td>
                                                            <td><?= $a->nama_jabatan; ?></td>
                                                            <td><?= $a->hadir; ?></td>
                                                            <td><?= $a->sakit; ?></td>
                                                            <td><?= $a->alpha; ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <?php } else { ?>
                                                <span class="badge badge-danger text-danger"><i
                                                        class="fe fe-info-circle"></i>Data
                                                    Masih Kosong, Silahkan Input Kehadiran pada bulan dan tahun yang
                                                    dipilih</span>
                                                <?php } ?>
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