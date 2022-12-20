<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title"><?= $title; ?></h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="grid-margin">
                        <form method="POST" action="<?= base_url('admin/dataKaryawan/tambahDataAksi'); ?>"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input class="form-control" type="text" name="nik">
                                <?= form_error('nik','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input class="form-control" type="text" name="nama_karyawan">
                                <?= form_error('nama_karyawan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="text" name="email">
                                <?= form_error('email','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input class="form-control" type="password" name="password">
                                <?= form_error('password','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jabatan</label>
                                <select name="nama_jabatan" class="form-control">
                                    <option value="">-- Jabatan --</option>
                                    <?php foreach ($jabatan as $j) { ?>
                                    <option value=" <?= $j->nama_jabatan ?>"><?= $j->nama_jabatan ?></option>
                                    <?php } ?>
                                </select>
                                <?= form_error('jabatan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Masuk</label>
                                <input class="form-control" type="date" name="tanggal_masuk">
                                <?= form_error('tanggal_masuk','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">-- Status --</option>
                                    <option value="Karyawan Tetap">Karyawan Tetap</option>
                                    <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
                                </select>
                                <?= form_error('status','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Photo</label>
                                <input class="form-control" type="file" name="img">
                                <?= form_error('status','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hak Akses</label>
                                <select name="hak_akses" class="form-control">
                                    <option value="">-- Hak Akses --</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Karyawan</option>
                                </select>
                                <?= form_error('hak_akses','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>