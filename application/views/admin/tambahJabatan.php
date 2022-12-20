<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- <div id="particles-js"></div> -->
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="grid-margin">
                        <form method="POST" action="<?= base_url('admin/dataJabatan/tambahDataAksi'); ?>">
                            <div class="form-group">
                                <label for="">Nama Jabatan</label>
                                <input class="form-control" type="text" name="nama_jabatan">
                                <?= form_error('nama_jabatan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input class="form-control" type="text" name="gaji_pokok">
                                <?= form_error('gaji_pokok','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Transportasi</label>
                                <input class="form-control" type="text" name="transport">
                                <?= form_error('transport','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Uang Makan</label>
                                <input class="form-control" type="text" name="uang_makan">
                                <?= form_error('uang_makan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>