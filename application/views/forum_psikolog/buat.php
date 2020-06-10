<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <form method="post" action="<?= base_url('forum_psikolog/buat')?>" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Judul Forum</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_list_forum" name="nama_list_forum" placeholder="Tulis Judul Artikel" rows="8"></input>
            </div>
            <?= form_error('judul_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea id="ckeditor" class="form-control ckeditor" id="deskripsi_list_forum" name="deskripsi_list_forum" placeholder="Ceritakan yang anda rasakan..." rows="8"></textarea>
            </div>
            <?= form_error('konten_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Thumbnail (140 x 140)</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="image_list_forum" name="image_list_forum" rows="8"></input>
            </div>
            <?= form_error('judul_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select class="form-control" id="id_status" name="id_status">
                    <option value="1">draft</option>
                    <option value="2">publish</option>
                </select>
            </div>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-sm-10">
                <button name="buatforum" type="submit" class="btn btn-believe">Submit</button>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 