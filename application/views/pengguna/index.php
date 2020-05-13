<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

      	<div class="card shadow mb-4">
        	<div class="card-header py-3">
          		<h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        	</div>
        	<div class="card-body">
          	<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
                	<tr>
                  		<th>Name</th>
                  		<th>Email</th>
                  		<th>Date Join</th>
                  		<th>Action</th>
                	</tr>
              	</thead>
              	<tbody>
              		<?php foreach($allUser as $user):?>
                    	<tr>
                      		<td><?= $user['name']?></td>
                      		<td><?= $user['email']?></td>
                      		<td><?= date('d F Y', $user['date_created']); ?></td>
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