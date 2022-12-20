<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white text-semibold">
                    Input Absensi Karyawan
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
                        <button type="submit" class="btn btn-primary ms-auto me-4"><i class="fe fe-eye fa-fw"></i>
                            Generate</button>
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
            <div class="alert alert-info">Input Kehadiran Karyawan Bulan : <span
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
                                                <form method="POST" action="">
                                                    <table id="data-table"
                                                        class="table table-bordered text-nowrap mb-0">
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
                                                                <!-- <th class="bg-transparent border-bottom-0"
                                                                    style="width: 5%;">
                                                                    Action</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $x = 1;
                                                            foreach ($inputabsensi as $ia) { ?>
                                                            <tr>
                                                                <input type="hidden" name="bulan[]" class="form-control"
                                                                    value="<?= $bulantahun ;?>">
                                                                <input type="hidden" name="nik[]" class="form-control"
                                                                    value="<?= $ia->nik ;?>">
                                                                <input type="hidden" name="nama_karyawan[]"
                                                                    class="form-control"
                                                                    value="<?= $ia->nama_karyawan ;?>">
                                                                <input type="hidden" name="jenis_kelamin[]"
                                                                    class="form-control"
                                                                    value="<?= $ia->jenis_kelamin ;?>">
                                                                <input type="hidden" name="nama_jabatan[]"
                                                                    class="form-control"
                                                                    value="<?= $ia->nama_jabatan ;?>">
                                                                <td class="text-center"><?= $x++; ?></td>
                                                                <td><?= $ia->nik; ?></td>
                                                                <td><?= $ia->nama_karyawan; ?></td>
                                                                <td><?= $ia->jenis_kelamin; ?></td>
                                                                <td><?= $ia->nama_jabatan; ?></td>
                                                                <td><input type="number" name="hadir[]"
                                                                        class="form-control" value="0">
                                                                </td>
                                                                <td><input type="number" name="sakit[]"
                                                                        class="form-control" value="0">
                                                                </td>
                                                                <td><input type="number" name="alpha[]"
                                                                        class="form-control" value="0">
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <button class="btn btn-primary mt-3 mb-3" type="submit"
                                                        name="submit" value="submit">Save</button>
                                                </form>
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