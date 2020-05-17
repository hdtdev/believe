<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <p style="font-size: 14px"><i><?= $diaryId['tanggal_diary']?> | <?php if($diaryId['only_psikolog'] == 0){echo "Semua dapat melihat";} else{ echo "Hanya untuk psikolog";}?></i></p>
    <p>
    	<?= $diaryId['konten_diary']?>
    </p>

    <div class="text-center" style="margin-top: 5%">
    	<span style="font-size: 20px"><strong>Komentar</strong></span>
    </div>

    <?php foreach($komentar as $komen):?>
    <div class="container shadow" style="margin-top: 1%;">
    	<div class="row" style="padding: 1%">
            <div class="col-sm-1">
                <img class="img-comment" src="<?= base_url('assets/img/profile/').$komen['image']?>">
            </div>
            <div class="col-sm-11">
                <div class="row">
                    <div class="col-sm-7">
                        <strong><?= $komen['name']?></strong>
                    </div>
                    <div class="col-sm-4 text-right">
                        <i style="font-size: 14px"><?= $komen['waktu_komentar_diary']?></i>
                    </div>
                    <div class="col-sm-12">
                        <p class="text-justify"><?= $komen['konten_komentar']?></p>
                    </div>
                </div>
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
                            <button name="submit_komentar_diary_psikolog" type="submit" class="btn btn-believe">Kirim Komentar</button>
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