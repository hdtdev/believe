<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <form method="post" action="<?= base_url('diary/tulis')?>" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Konten</label>
            <div class="col-sm-10">
                <textarea class="form-control ckeditor" id="ckeditor" name="konten_diary" placeholder="Ceritakan yang anda rasakan..." rows="8"></textarea>
            </div>
            <?= form_error('konten_diary', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Only Psikolog</label>
            <div class="col-sm-10">
                <select class="form-control" id="only_psikolog" name="only_psikolog">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Status Diary</label>
            <div class="col-sm-10">
                <select class="form-control" id="id_status" name="id_status">
                    <option value="1">draft</option>
                    <option value="2">publish</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 