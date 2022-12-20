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
                        <?php foreach ($potongan_gaji as $p) { ?>
                        <form method="POST" action="<?= base_url('admin/potonganGaji/updateDataAksi'); ?>">
                            <div class="form-group">
                                <label for="">Jenis Potongan</label>
                                <input class="form-control" type="hidden" name="id_potongan"
                                    value="<?= $p->id_potongan ?>">
                                <input class=" form-control" type="text" name="potongan" value="<?= $p->potongan ?>">
                                <?= form_error('potongan','<div class="text-small text-danger">','</div>') ;?>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Potongan</label>
                                <input class="form-control" type="number" name="jumlah_potongan"
                                    value="<?= $p->jumlah_potongan ?>">
                                <?= form_error('jumlah_potongan','<div class="text-small text-danger">','</div>') ;?>
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
<!--app-content close-->

</div>