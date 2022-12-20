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
                        <?php foreach ($karyawan as $k) { ?>
                        <form method="POST" action="<?= base_url('admin/dataKaryawan/updateDataAksi'); ?> "
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input class="form-control" type="hidden" name="id_karyawan"
                                    value="<?=  $k->id_karyawan ?>">
                                <input class="form-control" type="text" name="nik" value="<?=  $k->nik ?>">
                                <?= form_error('nik','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input class="form-control" type="text" name="nama_karyawan"
                                    value="<?=  $k->nama_karyawan ?>">
                                <?= form_error('nama_karyawan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="text" name="email" value="<?=  $k->email ?>">
                                <?= form_error('email','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input class="form-control" type="password" name="password"
                                    value="<?=  $k->password ?>">
                                <?= form_error('password','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="<?=  $k->jenis_kelamin ?>"><?=  $k->jenis_kelamin ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jabatan</label>
                                <select name="nama_jabatan" class="form-control">
                                    <option value="<?=  $k->nama_jabatan ?>"><?=  $k->nama_jabatan ?></option>
                                    <?php foreach ($jabatan as $j) { ?>
                                    <option value=" <?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                                    <?php } ?>
                                </select>
                                <?= form_error('nama_jabatan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Masuk</label>
                                <input class="form-control" type="date" name="tanggal_masuk"
                                    value="<?=  $k->tanggal_masuk ?>">
                                <?= form_error('tanggal_masuk','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="<?=  $k->status ?>"><?=  $k->status ?></option>
                                    <option value="Karyawan Tetap">Karyawan Tetap</option>
                                    <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
                                </select>
                                <?= form_error('status','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input class="form-control" type="file" name="img" value="<?= $k->img ?>">
                                <?= form_error('img','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hak Akses</label>
                                <select name="hak_akses" class="form-control">
                                    <option value="<?=  $k->hak_akses ?>"></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Karyawan</option>
                                </select>
                                <?= form_error('hak_akses','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTAINER END -->

</div>