<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a style="color: #7c0dc0" href="#"><?= $this->uri->segment(1)?></a></li>
        <li class="breadcrumb-item"><a style="color: #7c0dc0" href="#"><?= $this->uri->segment(2)?></a></li>
        <li class="breadcrumb-item"><a style="color: #7c0dc0" href="#"><?= $artikelDetail['judul_artikel'] ?></a></li>
      </ol>
    </nav>

    <!-- Page Heading -->
    <div class="text-center" style="margin-bottom: 4%">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $artikelDetail['judul_artikel'] ?></strong></h1>
    </div>

    <p style="font-size: 14px"><i><?= date("d F Y", strtotime($artikelDetail['tanggal_artikel']))?> | <?= $artikelDetail['judul_kategori']?></i></p>
    <p>
    	<?= $artikelDetail['konten_artikel']?>
    </p>

    <div class="text-center" style="margin-top: 5%">
    	<span style="font-size: 20px"><strong>Komentar</strong></span>
    </div>
    <?php foreach($komentar as $komen):?>
    <div class="container shadow" style="margin-top: 1%;">
    	<div class="row" style="padding: 1%">
            <div style="width: 55px">
                <img style="width: 55px" class="img-comment" src="<?= base_url('assets/img/profile/').$komen['image']?>">
            </div>
            <div class="col-sm-11">
                <div class="row">
                    <div class="col-sm-7">
                        <strong><?= $komen['name']?></strong>
                    </div>
                    <div class="col-sm-4 text-right">
                        <i style="font-size: 14px"><?= date("d F Y", strtotime($komen['waktu_komentar_artikel']))?></i>
                    </div>
                    <div class="col-sm-12">
                        <p class="text-justify"><?= $komen['konten_komentar']?></p>
                    </div>
                </div>
            </div>
    		
    	</div>
    </div>

	<?php endforeach;?>

    <!-- <div class="text-center">
    	<a style="margin-top: 2%" href="<?= site_url('artikel/komentar/'.$artikelDetail['id_artikel'])?>" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-comment"></i>
            </span>
            <span class="text">Tambah Komentar</span>
        </a>
    </div> -->

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
                            <button name="submit_komentar_artikel" type="submit" class="btn btn-believe">Kirim Komentar</button>
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