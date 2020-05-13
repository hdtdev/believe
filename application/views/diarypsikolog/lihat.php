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
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 