<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <?php foreach($lihat as $komen):?>
    <div class="container shadow" style="margin-top: 1%">
        <div class="row" style="padding: 1%">
            <div class="col-8">
                <strong><?= $komen['name']?></strong>
            </div>
            <div class="col-4 text-right">
                <i style="font-size: 14px"><?= date("d F Y", strtotime($komen['waktu_konsultasi']))?></i>
            </div>
            <div class="col-sm-12">
                <p><?= $komen['pesan']?></p>
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
                            <textarea class="form-control ckeditor" id="pesan" name="pesan" rows="8"></textarea>
                        </div>
                        <?= form_error('konten_komentar', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-12">
                            <button name="submit_konsultasi_psikolog" type="submit" class="btn btn-primary">Submit Konsultasi</button>
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