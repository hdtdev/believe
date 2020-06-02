<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <div class="container">
      <div class="row">
        <img style="margin: auto;" class="img-profile" src="<?= base_url('assets/img/profile/') . $pengguna['image']; ?>" class="card-img">
      </div>
    </div>

    <div class="container" style="margin-top: 15px">
      <div class="row">
        <div class="col-sm-12 text-center">
          <span><strong><?= $pengguna['name']?></strong></span><br>
          <span><?= $pengguna['email']."<strong> | </strong>".$pengguna['sex']."<strong> | </strong>".$pengguna['tgl_lahir']?></span>
        </div>
        <div class="col-sm-12" style="margin-top: 25px">
          <?php foreach($index as $diary):?>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <span class="m-0 font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 80px"><?= $diary['name']?> </span><span style="width: 80%!important; text-align: right!important; padding-right: 2%"><?= date("d F Y", strtotime($diary['tanggal_diary']))?></span>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body text-justify">
                      <?php if($diary['only_psikolog'] == 1){ echo "<i class='fa fa-user-md' ></i> | ";}else{echo "<i class='fa fa-globe'></i> | ";}?>
                          <?php 
                          if($diary['id_status'] == 1)
                              { 
                                  //<span>Status post : Draft;</span>
                                  echo "<i class='fa fa-clock-o'></i>";
                              }else{
                                  //<span>Status post : Published</span> 
                                  echo "<i class='fa fa-check-circle' ></i> ";
                              }
                          ?>
                          <br>
                    <p style="margin-bottom: 0!important; margin-top: 1%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; "><?= $diary['konten_diary']?></p>
                    <a href="<?= site_url('diary_psikolog/lihat/'.$diary['id_diary'])?>" style="padding-left: 0!important; margin-top: 1%" class="btn btn-secondary btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-arrow-right"></i>
                          </span>
                          <span class="text btn-believe">Selengkapnya</span>
                      </a>
                  </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 