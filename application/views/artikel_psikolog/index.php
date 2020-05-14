<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <div class="card shadow mb-4">
        	<div class="card-header py-3">
          		<h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
        	</div>
        	<div class="card-body">
          	<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
                	<tr>
                  		<th width="55%">Judul</th>
                  		<th width="15%">Kreator</th>
                  		<th width="15%">Status</th>
                  		<th width="15%">Action</th>
                	</tr>
              	</thead>
              	<tbody>
              		<?php foreach($index as $artikel):?>
                    	<tr>
                      		<td><?= $artikel['judul_artikel']?></td>
                      		<td><?= $artikel['name']?></td>
                      		<td><?php if($artikel['id_status'] == 1){ echo "Draft";}else{echo"Published";}?></td>
                      		<td>
                          <a href="<?= site_url('artikel_psikolog/lihat/'.$artikel['id_artikel'])?>">lihat</a>  
                          </td>
                    	</tr>
            		<?php endforeach;?>
              	</tbody>
            </table>
          </div>
        </div>
      </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 