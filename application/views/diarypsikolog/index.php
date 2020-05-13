<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <?php foreach($index as $diary):?>
    	<div class="card shadow mb-4">
    	    <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <span class="m-0 font-weight-bold"><?= $diary['name']?> </span><span style="width: 40%!important; text-align: right!important; padding-right: 4%"><?= $diary['tanggal_diary']?></span>
            </div>
            <!-- Card Body -->
            <div class="card-body text-justify">
              <?= $diary['konten_diary']?> <br>
              <a href="<?= site_url('diary_psikolog/lihat/'.$diary['id_diary'])?>" style="padding-left: 0!important; margin-top: 1%" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Selengkapnya</span>
                </a>
            </div>
     	</div>
    <?php endforeach;?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 