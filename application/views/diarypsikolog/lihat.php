<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <p style="font-size: 14px"><i><?= $diaryId['tanggal_diary']?> | <?php if($diaryId['only_psikolog'] == 0){echo "Semua dapat melihat";} else{ echo "Hanya untuk psikolog";}?></i></p>
    <p>
    	<?= $diaryId['konten_diary']?>
    </p>

    <div class="text-center" style="margin-top: 5%">
    	<span style="font-size: 20px"><strong>Komentar</strong></span>
    </div>
    <?php foreach($komentar as $komen):?>
    <div class="container shadow" style="margin-top: 1%">
    	<div class="row" style="padding: 1%">
    		<div class="col-8">
    			<strong><?= $komen['name']?></strong>
    		</div>
    		<div class="col-4 text-right">
    			<i style="font-size: 14px"><?= $komen['waktu_komentar_diary']?></i>
    		</div>
    		<div class="col-sm-12">
    			<p><?= $komen['konten_komentar']?></p>
    		</div>
    	</div>
    </div>
    <?php endforeach;?>

    <div class="text-center">
    	<a style="margin-top: 2%" href="<?= site_url('diary_psikolog/komentar/'.$diaryId['id_diary'])?>" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-comment"></i>
            </span>
            <span class="text">Tambah Komentar</span>
        </a>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 