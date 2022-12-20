<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <!-- <div id="particles-js"></div> -->
            <div class="page-header">
                <h1 class="page-title"><?php echo $title; ?></h1>
            </div>
            <!-- PAGE-HEADER END -->
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('karyawan/gantiPassword/action') ?>" method="POST">
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" name="newpass" class="form-control">
                            <?= form_error('newpass','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="">Repeat Password</label>
                            <input type="password" name="repeat" class="form-control">
                            <?= form_error('repeat','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->

</div>