<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <form method="post" action="<?= base_url('artikel_admin/buat')?>" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Judul Artikel</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Tulis Judul Artikel" rows="8"></input>
                <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $user['id']; ?>"></input>
            </div>
            <?= form_error('judul_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Konten</label>
            <div class="col-sm-10">
                <textarea id="ckeditor" class="form-control ckeditor" id="konten_artikel" name="konten_artikel" placeholder="Ceritakan yang anda rasakan..." rows="8"></textarea>
            </div>
            <?= form_error('konten_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" id="id_kategori" name="id_kategori">
                    <?php
                        echo '<option value="">--choose category--</option>';
                        foreach ($kategori as $cat) {
                            echo '<option value="'.$cat['id_kategori'].'">'.$cat['judul_kategori'].'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Thumbnail</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="thumbnail_artikel" name="thumbnail_artikel"></input>
            </div>
            <?= form_error('thumbnail_artikel', '<small class="text-danger pl-3">', '</small>'); ?>
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