<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white text-semibold">
                    Filter Data Gaji Karyawan
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
                        <button type="submit" class="btn btn-primary ms-auto me-4">Show Data</button>
                        <?php if(count($gaji) > 0) { ?>
                        <a href="<?=base_url('admin/dataGaji/cetakGaji?bulan='.$bulan),'&tahun='.$tahun; ?>"
                            class=" btn btn-success">Cetak Data
                            Gaji
                        </a>
                        <?php } else { ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Cetak Data Gaji
                        </button>
                        <?php } ?>

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
            <div class="alert alert-info">Data Penggajian Karyawan Bulan : <span
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
                                            <?php $jumlah_data = count($gaji);
                                            if ($jumlah_data > 0) { ?>
                                            <div class="table-responsive">
                                                <table id="data-table" class="table table-bordered text-nowrap mb-0">
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
                                                        <?php $i = 1; foreach ($gaji as $g) { ?>
                                                        <?php $potongan = $g->alpha * $alpha ?>
                                                        <tr>
                                                            <td class="text-center"><?= $i++; ?></td>
                                                            <td><?= $g->nik; ?></td>
                                                            <td><?= $g->nama_karyawan; ?></td>
                                                            <td><?= $g->jenis_kelamin; ?></td>
                                                            <td><?= $g->nama_jabatan; ?></td>
                                                            <td>Rp. <?= number_format($g->gaji_pokok,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($g->transport,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($g->uang_makan,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($potongan,0,',','.'); ?></td>
                                                            <td>Rp. <?= number_format($g->gaji_pokok + $g->transport 
                                                            + $g->uang_makan - $potongan,0,',','.'); ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } else { ?>
                                            <span class="badge badge-danger text-danger"><i
                                                    class="fe fe-info-circle"></i>Data Absensi
                                                Masih Kosong, Silahkan Input Kehadiran pada bulan dan tahun yang
                                                dipilih
                                            </span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Data Gaji Masih Kosong, Silahkan input absensi terlebih dahulu pada bulan dan tahun yang
                            anda pilih
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>