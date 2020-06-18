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
            <p style="font-size: 22px; margin-top: 20px; color: white"><strong>Konsultasi disable. Berikan rating untuk psikolog</strong></p>
            <button id="myBtn-believe" class="btn btn-believe">Berikan Rating</button>
            <div class="form-group row justify-content-end" style="margin-top: 15px">
                <div class="col-sm-12 text-center">
                    <a href="<?= site_url('konsultasi/reactive/').$this->uri->segment(3)?>" class="btn btn-success">Aktifkan Konsultasi</a>
                </div>
            </div>

            <!-- <div class="container" style="margin-top: 35px">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="slidecontainer-believe">
                                      <input type="range" name="rating" min="1" max="100" value="73" class="slider-believe" id="myRange-believe">
                                      <p style="color: white">Rating: <span id="demo-believe"></span>%</p>
                                    </div>
                                </div>
                                <?= form_error('konten_komentar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-12">
                                    <button name="submit_rating" type="submit" class="btn btn-believe">Submit rating</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        
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

        <div class="form-group row justify-content-end">
            <div class="col-sm-12 text-center">
                <a href="<?= site_url('konsultasi/disable/').$this->uri->segment(3)?>" class="btn btn-danger">End Konsultasi</a>
            </div>
        </div>
     
    <?php }?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 

<!-- Modal -->
<div id="myModal-believe" class="modal-believe">
  <!-- Modal content -->
  <div class="modal-content-believe">
    <div class="modal-header-believe">
      <span class="close-believe">&times;</span>
      <h4>Rating</h4>
    </div>
    <div class="modal-body-believe">
        <div class="container text-center" style="margin-top: 35px">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="slidecontainer-believe">
                                  <input type="range" name="rating" min="1" max="100" value="73" class="slider-believe" id="myRange-believe">
                                  <p style="color: black">Rating: <span id="demo-believe"></span>%</p>
                                </div>
                            </div>
                            <?= form_error('konten_komentar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-12">
                                <button name="submit_rating" type="submit" class="btn btn-believe">Submit rating</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer-believe">
      <h6>* Geser pointer untuk memberikan rating</h6>
    </div>
  </div>
</div>


<script type="text/javascript">
    var slider = document.getElementById("myRange-believe");
    var output = document.getElementById("demo-believe");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }

    // Get the modal
    var modal = document.getElementById("myModal-believe");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn-believe");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-believe")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>