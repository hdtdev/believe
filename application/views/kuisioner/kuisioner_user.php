<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center" style="margin-top: 25px;">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <form method="post" action="<?= base_url('kuisioner/buat')?>" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">Judul Artikel</label>
            <div>
                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Tulis Judul Artikel" rows="8"></input>
            </div>
            <?= form_error('judul_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-believe">Submit</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 