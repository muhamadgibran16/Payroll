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
                        <form method="POST" action="<?php echo base_url('admin/profile/action'); ?>"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">NIK </label>
                                <input class="form-control" type="hidden" name="id_karyawan"
                                    value="<?=  $k->id_karyawan ?>">
                                <!-- <input class="form-control" type="text" name="nik" value="<?=  $k->nik ?>" readonly> -->
                            </div>
                            <div class="form-group">
                                <label for="">Nama </label>
                                <input class="form-control" type="text" name="nama_karyawan"
                                    value="<?=  $k->nama_karyawan ?>">
                                <?= form_error('nama_karyawan','<div class="text-small text-danger"></div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="text" name="email" value="<?=  $k->email ?>">
                                <?= form_error('email','<div class="text-small text-danger"></div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input class="form-control" type="text" name="nama_jabatan"
                                    value="<?=  $k->nama_jabatan ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input class="form-control" type="text" name="status" value="<?=  $k->status ?>"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input class="form-control" type="file" name="img" value="<?= $k->img ?>">
                                <?= form_error('img','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
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