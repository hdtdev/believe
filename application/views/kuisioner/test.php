<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="text-center" style="margin-top: 25px;">
        <h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
    </div>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">1. Saya merasa putus asa dan sedih</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="1" name="1" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="1" name="1" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="1" name="1" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="1" name="1" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">2. Saya merasa sedih dan tertekan</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="2" name="2" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="2" name="2" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="2" name="2" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="2" name="2" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">3. Saya melihat tidak ada harapan untuk masa depan</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="3" name="3" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="3" name="3" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="3" name="3" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="3" name="3" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('3', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">4. Saya merasa tidak ada hal yang dapat diharapkan di masa depan</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="4" name="4" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="4" name="4" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="4" name="4" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="4" name="4" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('4', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">5. Saya merasa bahwa hidup tidak berarti</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="5" name="5" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="5" name="5" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="5" name="5" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="5" name="5" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('5', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">6. Saya nerasa bahwa hidup tidak bermanfaat</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="6" name="6" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="6" name="6" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="6" name="6" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="6" name="6" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('6', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">7. Saya merasa bahwa saya tidak berharga</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="7" name="7" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="7" name="7" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="7" name="7" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="7" name="7" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('7', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">8. Saya merasa bahwa saya tidak berharga sebagai manusia</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="8" name="8" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="8" name="8" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="8" name="8" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="8" name="8" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('8', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">9. Saya merasa saya kehilangan minat akan segala hal </label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="9" name="9" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="9" name="9" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="9" name="9" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="9" name="9" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('9', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">10. Saya tidak merasa antusias dalam hal apapun.</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="10" name="10" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="10" name="10" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="10" name="10" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="10" name="10" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('10', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">11. Saya sama sekali tidak dapat merasakan perasaan positif</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="11" name="11" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="11" name="11" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="11" name="11" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="11" name="11" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('11', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">12. Saya tidak dapat merasakan kenikmatan dari berbagai hal yang saya lakukan</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="12" name="12" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="12" name="12" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="12" name="12" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="12" name="12" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('12', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">13. Saya seperti tidak kuat lagi untuk melakukan suatu kegiatan</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="13" name="13" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="13" name="13" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="13" name="13" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="13" name="13" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('13', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">14. Saya merasa sulit untuk meningkatkan inisiatif dalam melakukan sesuatu</label>
            <div>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="14" name="14" value="1">Sangat Setuju</input>
                <input  style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="14" name="14" value="2">Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="14" name="14" value="3" checked>Tidak Setuju</input>
                <input style="margin-left: 15px; margin-right: 5px;" class="radio-inline" type="radio" class="form-control" id="14" name="14" value="4">Sangat Tidak Setuju</input>
            </div>
            <?= form_error('14', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
       

        <div class="form-group row justify-content-end text-center">
            <div class="col-sm-12">
                <button name="submit_kuisioner" type="submit" class="btn btn-believe">Submit Kuisioner</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 