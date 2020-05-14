<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Konten</label>
            <div class="col-sm-10">
                <textarea class="form-control ckeditor" id="konten_komentar" name="konten_komentar" placeholder="Tulis komentar disini... (Maksimal 1000 karakter)" rows="8"></textarea>
            </div>
            <?= form_error('konten_komentar', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button name="submit_komentar_artikel" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 