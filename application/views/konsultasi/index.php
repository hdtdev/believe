<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <div class="row">
    <?php foreach($allPsikolog as $psikolog):?>
	    <div class="col-sm-6 shadow" style="border: 1px; margin-top: 2%;">
	    	<div class="row">
	    		<div class="col-md-4">
	    			<img width="100%" style="border-radius: 50%" src="<?= base_url('assets/img/profile/') . $psikolog['image']; ?>">
	    		</div>
	    		<div class="col-md-8" style="padding: 2%">
	    			<span style="font-size: 20px"><strong><?= $psikolog['name']?> </strong></span><br>
	    			<span style="font-size: 14px; color: #df0fcc"><strong>Psikolog</strong></span><br>
	    			<span style="font-size: 14px;"><del>Rp. 25.000</del> GRATIS</span><br>
	    			<small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small><br>
	    			<a style="margin-top: 2%" href="#" class="btn btn-secondary btn-icon-split">
	                    <span class="icon text-white-50">
	                      <i class="fas fa-comment"></i>
	                    </span>
	                    <span class="text">Mulai Konseling</span>
	                </a>
	    		</div>
	    	</div>
	    </div>
	<?php endforeach;?>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 