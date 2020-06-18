<!-- Begin Page Content -->
<div class="container-fluid">
  <a href="<?= site_url('psikolog')?>" type="button" class="btn btn-outline-primary">Back</a>

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <div class="container">
      <div class="row">
        <img style="margin: auto;" class="img-profile" src="<?= base_url('assets/img/profile/') . $psikolog['image']; ?>" class="card-img">
      </div>
    </div>

    <div class="container" style="margin-top: 15px">
      <div class="row">       

        <div class="col-sm-2">
          Nama 
        </div>
        <div class="col-sm-10">
          <?= ": ". $psikolog['name']?>
        </div>

        <div class="col-sm-2">
          Jenis Kelamin
        </div>
        <div class="col-sm-10">
          <?= ": ". $psikolog['sex']?>
        </div>

        <div class="col-sm-2">
          Telepon
        </div>
        <div class="col-sm-10">
          <?= ": ". $psikolog['telepon']?>
        </div>

        <div class="col-sm-2">
          Email 
        </div>
        <div class="col-sm-10">
          <?= ": ". $psikolog['email']?>
        </div>

        <div class="col-sm-2">
          Date Created
        </div>
        <div class="col-sm-10">
          <?= ": ". date('d F Y', $psikolog['date_created']); ?>
        </div>

        <div class="col-sm-2">
          Tanggal Lahir
        </div>
        <div class="col-sm-10">
          <?= ": ". $psikolog['tgl_lahir']?>
        </div>

        <div class="col-sm-2">
          Status
        </div>
        <div class="col-sm-10">
          : <?php if($psikolog['is_active']==0){echo "Non-active";}else{echo "Active";}?>
          <?php if($psikolog['is_active']==0){?>
            <a class="bg-success" style="color: white; padding: 3px;" href="<?= base_url('psikolog/aktifkan/').$psikolog['id']?>">Aktifkan</a>
          <?php }else{?>
            <a class="bg-danger" style="color: white; padding: 3px;" href="<?= base_url('psikolog/matikan/').$psikolog['id']?>">Matikan</a>
              <?php }?> 
          <!-- <a class="btn btn-success" href="<?= base_url('psikolog/aktifkan/').$psikolog['id']?>">Aktifkan</a> -->
        </div>

        <div class="col-sm-6" style="margin-top: 15px">
          <img style="width: 100%" src="<?= base_url('assets/img/document/').$psikolog['ktp']; ?>">
        </div>
        <div class="col-sm-6" style="margin-top: 15px">
          <img style="width: 100%" src="<?= base_url('assets/img/document/').$psikolog['ijin_praktek']; ?>">
        </div>
        
      </div>
    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 