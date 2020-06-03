<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <div class="row">
    	<?php foreach($allForum as $forum):?>
    	<div class="col-sm-6 shadow" style="border: 1px; margin-top: 2%;">
	    	<div class="row">
	    		<div class="col-md-4">
	    			<img style="width: 80%" src="<?= base_url('assets/img/logo.png')?>">
	    			<!-- <i style="width: 100%" class="<?= $forum['image_list_forum']?>" aria-hidden="true"></i> -->
	    		</div>
	    		<div class="col-md-8" style="padding: 2%">
	    			<span style="font-size: 20px"><strong><?= $forum['nama_list_forum']?></strong></span><br>
	    			<a style="margin-top: 2%" href="<?= site_url('forum_psikolog/diskusi/'.$forum['id_list_forum'])?>" class="btn btn-secondary btn-icon-split">
	                    <span class="icon text-white-50">
	                      <i class="fas fa-comment"></i>
	                    </span>
	                    <span class="text btn-believe">Join Forum</span>
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