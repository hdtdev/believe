<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <?php foreach($index as $diary):?>
    	<div class="card shadow mb-4">
    	    <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <span class="m-0 font-weight-bold"><?= $user['name']?> </span><span style="width: 100%!important; text-align: right!important; padding-right: 4%"><?= $diary['tanggal_diary']?></span>
            </div>
            <!-- Card Body -->
            <div class="card-body text-justify">
              <?= $diary['konten_diary']?> <br>
              <a href="#" style="padding-left: 0!important; margin-top: 1%" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Selengkapnya</span>
                </a>
            </div>
    		<!-- <div class="card">
				<div class="card-body">
					<h5 class="card-title"><?= $user['name']?> </h5><span><?= $diary['tanggal_diary']?></span>
				    <p class="card-text text-justify"><?= $diary['konten_diary']?></p>
				    <a href="#" style="padding-left: 0!important" class="btn btn-secondary btn-icon-split">
	                	<span class="icon text-white-50">
	                    	<i class="fas fa-arrow-right"></i>
	                    </span>
	                    <span class="text">Selengkapnya</span>
	                </a>
				</div>
			</div> -->
     	</div>
    <?php endforeach;?>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 