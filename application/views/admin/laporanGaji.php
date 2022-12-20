<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>
            <div class="card mx-auto" style="width:400px;">
                <div class="card-header bg-primary text-white text-semibold">
                    Filter Laporan Gaji Karyawan
                </div>
                <form action="<?= base_url('admin/laporanGaji/cetakGaji');?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputPassword6" class="col-form-label">Bulan</label>
                                </div>
                                <div class="col-9">
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
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row g-3 align-items-center">
                                <div class="col-3">
                                    <label for="inputPassword6" class="col-form-label">Tahun</label>
                                </div>
                                <div class="col-9">
                                    <select class="form-control ms-2" name="tahun" id="">
                                        <option value="">-- Tahun --</option>
                                        <?php $tahun = date('Y') ;
                                    for($i=2022;$i<$tahun+10;$i++) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Cetak
                                Laporan Gaji</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>