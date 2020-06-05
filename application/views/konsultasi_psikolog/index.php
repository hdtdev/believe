<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <div class="row">
    <?php foreach($list as $konsultasi):?>
    	<div class="col-sm-6 shadow" style="border: 1px; margin-top: 2%;">
	    	<div class="row">
	    		<div class="col-md-4 text-center" style="padding: 15px">
	    			<img width="90%" style="border-radius: 50%" src="<?= base_url('assets/img/profile/') . $konsultasi['image']; ?>">
	    		</div>
	    		<div class="col-md-8" style="padding: 2%">
	    			<span style="font-size: 20px"><strong><?= $konsultasi['name']?> </strong></span>
	    			<p class="text-justify"><?= $konsultasi['pesan']?> </p>
	    			<a href="<?= site_url('konsultasi_psikolog/lihat/').$konsultasi['id_user']?>" class="btn btn-believe">See More</a>
	    		</div>
	    	</div>
	    </div>




	    <!-- <div class="col-sm-6 shadow" style="border: 1px; margin-top: 2%; padding: 15px">
	    	<div class="row">
	    		<div style="width: 30%;padding: 15px">
	    			<img width="100%" style="border-radius: 50%" src="<?= base_url('assets/img/profile/') . $konsultasi['image']; ?>">
	    		</div>
	    		<div style="width: 70%">
	    			<span style="font-size: 20px"><strong><?= $konsultasi['name']?> </strong></span>
	    			<p class="text-justify"><?= $konsultasi['pesan']?> </p>
	    			<a href="<?= site_url('konsultasi_psikolog/lihat/').$konsultasi['id_user']?>" class="btn btn-believe">See More</a>
	    		</div>
	    	</div>
	    </div> -->
	<?php endforeach;?>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 