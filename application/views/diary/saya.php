<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <?php foreach($diary_saya as $diary):?>
        <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <span class="m-0 font-weight-bold"><?= $user['name']?> </span><span style="width: 100%!important; text-align: right!important; padding-right: 4%"><?= $diary['tanggal_diary']?></span>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="<?= site_url('diary/edit/'.$diary['id_diary'])?>">Edit</a>
                      <a class="dropdown-item" href="#">Hapus</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body text-justify">
                    <?php if($diary['only_psikolog'] == 1){ echo "<span>Dapat dilihat : Psikolog</span> | ";}else{echo "<span>Dapat dilihat : Publik</span> * ";}?>
                    <?php 
                    if($diary['id_status'] == 1)
                        { 
                            //<span>Status post : Draft;</span>
                            echo "<span>Status post : Draft</span>";
                        }else{
                            //<span>Status post : Published</span> 
                            echo "<span>Status post : Published</span> ";
                        }
                    ?>
                    <br>

                    <p style="margin-bottom: 0!important; margin-top: 1%"><?= $diary['konten_diary']?></p> 

                    <br>

                    <a href="#" style="padding-left: 0!important;" class="btn btn-secondary btn-icon-split">
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