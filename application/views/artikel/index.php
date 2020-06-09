<!-- Begin Page Content -->
<div class="container-fluid">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="#"><?= $this->uri->segment(1)?></a></li>
	    <li class="breadcrumb-item"><a href="#"><?= $this->uri->segment(2)?></a></li>
	  </ol>
	</nav>

    <!-- Page Heading -->
    <div class="text-center" style="margin-bottom: 4%">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    
    <?php foreach($index as $artikel):?>
    <div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h4 class="m-0 font-weight-bold text-primary"><?= $artikel['judul_artikel']?></h4>
	    </div>
	    <div class="card-body">
	    	<!-- Konfersi date dari timestamp ke 13 may 2020 -->
	    	<?php 
	    		$oldDate = $artikel['tanggal_artikel'];
	    		$newDate = date("d F Y", strtotime($oldDate))
	    	?>
	    	<!-- End Konfersi -->

	    	<span style="font-size: 14px"><i><?= $artikel['name']?> | <?= $newDate; ?> | <?= $artikel['judul_kategori']?></i></span>
	      	<span><?= $artikel['konten_artikel']?></span>
	      	<br>
	      	<a href="<?= site_url('artikel/lihat/'.$artikel['id_artikel'])?>" style="padding-left: 0!important; margin-top: 1%" class="btn btn-secondary btn-icon-split">
	            <span class="icon text-white-50">
	                <i class="fas fa-arrow-right"></i>
	            </span>
	            <span class="text btn-believe">Selengkapnya</span>
	        </a>
	    </div>
	</div>
	<?php endforeach;?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 