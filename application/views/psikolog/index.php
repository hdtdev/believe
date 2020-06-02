<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <!-- here -->
    <div class="card shadow mb-4">
        	<div class="card-header py-3">
          		<h6 class="m-0 font-weight-bold text-primary">Data Psikolog</h6>
        	</div>
        	<div class="card-body">
          	<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
                	<tr>
                  		<th>Name</th>
                  		<th>Email</th>
                  		<th>Jenis Kelamin</th>
                  		<th>Tgl Lahir</th>
                  		<th>Date Join</th>
                  		<th>Action</th>
                	</tr>
              	</thead>
              	<tbody>
              		<?php foreach($psikolog as $psi):?>              
                    	<tr>
                      		<td><?= $psi['name']?></td>
                      		<td><?= $psi['email']?></td>
                      		<td><?php if ($psi['sex']='l') { echo "Laki-laki";}else{ echo "Perempuan";}?></td>
                      		<td><?= date('d F Y', $psi['date_created']); ?></td>
                      		<td><?= $psi['tgl_lahir']?></td>
                      		<td></td>
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