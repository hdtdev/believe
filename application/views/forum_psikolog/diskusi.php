<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <div class="container bg-gray-200" style="margin-bottom: 5%">
        <div class="row text-center">
            <div class="col-sm-12 text-center" style="padding: 2%">
                <p>Selamat datang di Forum diskusi tentang <strong><?= $diskusi['nama_list_forum']?></strong>. <?= $diskusi['deskripsi_list_forum']?></p>
            </div>
        </div>
    </div>

    <?php foreach($komentar as $komen):?>
    <div class="container shadow" style="margin-top: 1%">
        <div class="row" style="padding: 1%">
            <div class="col-8">
                <strong><?= $komen['name']?></strong>
            </div>
            <div class="col-4 text-right">
                <i style="font-size: 14px"><?= $komen['waktu_komentar_forum']?></i>
            </div>
            <div class="col-sm-12">
                <p><?= $komen['konten_komentar']?></p>
            </div>
        </div>
    </div>
    <?php endforeach;?>

    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea class="form-control ckeditor" id="konten_komentar" name="konten_komentar" rows="8"></textarea>
                        </div>
                        <?= form_error('konten_komentar', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-12">
                            <button name="submit_komentar_forum" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 