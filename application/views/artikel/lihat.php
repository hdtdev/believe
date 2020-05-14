<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center" style="margin-bottom: 4%">
        <h1 class="h3 mb-4 text-gray-800" style="margin-bottom: 5px!important"><strong><?= $artikelDetail['judul_artikel'] ?></strong></h1>
        <span class="bg-info" style="padding: 0.5%; font-size: 14px; margin-top: 0!important; color: white"><i> <?= $this->uri->segment(1) ." / ".$this->uri->segment(2)." / ".$artikelDetail['judul_artikel']?> </i></span>
    </div>

    <p style="font-size: 14px"><i><?= $artikelDetail['tanggal_artikel']?> | <?= $artikelDetail['judul_kategori']?></i></p>
    <p>
    	<?= $artikelDetail['konten_artikel']?>
    </p>

    <div class="text-center" style="margin-top: 5%">
    	<span style="font-size: 20px"><strong>Komentar</strong></span>
    </div>
    <?php foreach($komentar as $komen):?>
    <div class="container shadow" style="margin-top: 1%">
    	<div class="row" style="padding: 1%">
    		<div class="col-8">
    			<strong><?= $komen['name']?></strong>
    		</div>
    		<div class="col-4 text-right">
    			<i style="font-size: 14px"><?= $komen['waktu_komentar_artikel']?></i>
    		</div>
    		<div class="col-sm-12">
    			<p><?= $komen['konten_komentar']?></p>
    		</div>
    	</div>
    </div>
    <!-- <div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary"><?= $komen['name']?></h6>
	    </div>
	    <div class="card-body">
	    	<span style="font-size: 14px"><i><?= $komen['waktu_komentar_artikel']?></i></span>
	      	<p><?= $komen['konten_komentar']?></p>
	    </div>
	</div> -->
	<?php endforeach;?>

    <div class="text-center">
    	<a style="margin-top: 2%" href="<?= site_url('artikel/komentar/'.$artikelDetail['id_artikel'])?>" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-comment"></i>
            </span>
            <span class="text">Tambah Komentar</span>
        </a>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 