<div class="container col-md-5 mx-auto">
    <div class="jumbotron login my-auto">
        <center><img src="<?= base_url(); ?>assets/img/tut.png" alt="" width="10%" class="mt-4"></center>

        <div class="header">
            <h3 style="color:white">
                <center>Masuk Calon Murid</center>
            </h3>
        </div>
        <?= $this->session->flashdata('message'); ?>

        <hr style="border:1px solid light">
        <form action="<?= base_url('ppdb/login'); ?>" method="post">
            <div class="form-group">
                <input type="text" name="kode_pendaftaran" class="form-control form-control-sm" placeholder="Nomor Formulir" value="<?= set_value('kode_pendaftaran'); ?>">
                <?= form_error('kode_pendaftaran', '<small class="text-white pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                <?= form_error('password', '<small class="text-white pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block btn-success">Login</button>
            </div>
        </form>
        <hr>
        <div class="text-center">
            <a class="text-light" href="<?= base_url('ppdb/registration'); ?>">Pendaftaran Siswa Baru</a>
        </div>
    </div>
</div>