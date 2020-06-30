<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a style="color: #7c0dc0" href="#"><?= $this->uri->segment(1)?></a></li>
        <li class="breadcrumb-item"><a style="color: #7c0dc0" href="#"><?= $title ?></a></li>
      </ol>
    </nav>

    <div class="row" style="margin-top: 2%">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <?php if($is_kuisioner['is_kuisioner'] == 0 && $role_id['role_id'] == 3){ redirect('kuisioner/buat/');}?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img class="img-profile" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                <h5 style="margin-top: 2%; color: #7c0dc0;" class="card-title"><strong><?= $user['name']; ?></strong> <?php if ($user['sex']== 'Laki-laki'){ echo "<i class='fa fa-mars'></i>"; }else{ echo "<i class='fa fa-mars-stroke'></i>"; }?></h5>
                <span class="card-text"><?= $user['email']; ?></span><br>
                <span class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></span>
                <hr style="border: 0.5px dotted #7c0dc0">
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-sm-12">
                <?php foreach($diary_saya as $diary):?>
                <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <span class="m-0 font-weight-bold" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 80px"><?= $diary['name']?> </span><span style="width: 80%!important; text-align: right!important;"><?= date("d F Y", strtotime($diary['tanggal_diary'])) ?></span>
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

                            <br>

                            <a href="<?= site_url('diary/lihat/'.$diary['id_diary'])?>" style="padding-left: 0!important;" class="btn btn-secondary btn-icon-split">
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