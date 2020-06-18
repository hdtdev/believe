<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-9 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Psikolog Registration</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration_psikolog')?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="telepon" placeholder="Telepon" value="<?= set_value('telepon'); ?>">
                                <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>">
                                <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-user" id="sex" name="sex">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Surat Ijin Praktek</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="ijin_praktek" name="ijin_praktek" rows="8"></input>
                                </div>
                                <?= form_error('ijin_praktek', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Scan KTP</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="ktp" name="ktp" rows="8"></input>
                                </div>
                                <?= form_error('ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 