<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title." - ".$psikolog['name']; ?></strong></h1>
    </div>

    <?php foreach($konsultasi as $komen):?>

    <?php if ($this->session->userdata('id')== $komen['id_sender']) { ?>
        <div class="bg-believe" style="margin-top: 1%; border-radius: 15px 0px 15px 15px; color: white" class="col-sm-12 shadow">
            <div class="row" style="padding: 5px;">

                <div class="col-12 text-right">
                    <?= "<span style='font-size:14px;'>".date("d F Y", strtotime($komen['waktu_konsultasi'])) ."</span> <strong style='margin-left:10px; margin-right: 20px'> ". $komen['name'] ."</strong>"?>
                </div>
                <div class="col-sm-12 text-left" style="padding-left: 25px; padding-right: 25px">
                    <p><?= $komen['pesan']?></p>
                </div>
            </div>
        </div>
            
        <?php }else{?>
 
            <div style="margin-top: 1%; border-radius: 0px 15px 15px 15px; color: white" class="shadow bg-dark col-sm-12">
                <div class="row" style="padding: 5px;">

                    <div class="col-12">
                        <?= "<strong style='margin-left:10px'>". $komen['name'] ."</strong> <span style='font-size:14px'>". date("d F Y", strtotime($komen['waktu_konsultasi'])) ."</span>"?>
                    </div>
                    <div class="col-sm-12 text-left" style="padding-left: 25px; padding-right: 25px">
                        <p><?= $komen['pesan']?></p>
                    </div>
                </div>
            </div>
        <?php }?>

    <?php endforeach;?>

  	<!-- here -->
    <?php if (!empty($is_active['is_active']== '0')) {?>
        
        <div class="text-center" style=" background-color: grey; padding: 25px; margin-top: 35px">
            <p style="font-size: 22px; margin-top: 20px; color: white"><strong>konsultasi disable</strong></p>
        </div>   

        <div class="form-group row justify-content-end" style="margin-top: 15px">
            <div class="col-sm-12 text-center">
                <a href="<?= site_url('konsultasi/reactive/').$this->uri->segment(3)?>" class="btn btn-success">Mulai Ulang</a>
            </div>
        </div>

    <?php } else{?> 
        <div class="container" style="margin-top: 2%">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea class="form-control ckeditor" id="pesan" name="pesan" rows="8"></textarea>
                            </div>
                            <?= form_error('konten_komentar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-12">
                                <button name="submit_konsultasi" type="submit" class="btn btn-believe">Submit Konsultasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
    <?php }?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 