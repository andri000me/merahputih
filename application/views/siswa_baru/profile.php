<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-8">
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header ml-md-4">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-9 align-self-sm-center">
                            <h1 class="font-weight-bold text-primary"><?= $title; ?></h1>
                            <div class="row">
                                <h4 class="col-sm-5 font-weight-bold text-dark">Nomor Formulir</h4>
                                <h4 class="col-sm-7 font-weight-bold text-dark"><?= $tbl_datappdb['kode_pendaftaran']; ?></h4>
                            </div>
                            <div class="row">
                                <h4 class="col-sm-5 font-weight-bold text-info">Status Validasi</h4>

                                <?php if ($tbl_datappdb['is_active'] == 1) : ?>
                                    <h4 class="col-sm-7 font-weight-bold text-success">Sudah <i class="fas fa-check"></i></h4>
                                <?php elseif ($tbl_datappdb['is_active'] == 0) : ?>
                                    <h4 class="col-sm-7 font-weight-bold text-danger">Belum <i class="fas fa-exclamation"></i></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-3">
                            <img src="<?= base_url('assets/img/profile/') . $tbl_datappdb['image']; ?>" class=" img-thumbnail ml-md-5" style="width: 150px">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="card-body ml-md-4">

            <?= $this->session->flashdata('message'); ?>
            <h3 class="h5 text-gray-900 mt-sm-4 mb-sm-3">Keterangan Pribadi Siswa</h3>

            <!-- <div class="row">
                <p class="card-text col-sm-5">Nomor Formulir</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['kode_pendaftaran']; ?></p>
            </div> -->

            <div class="row">
                <p class="card-text col-sm-5">Nama Lengkap</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['nama']; ?></p>
            </div>

            <div class="row">
                <p class="card-text col-sm-5">Tempat Tanggal Lahir</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['tempat_lahir'] . ", " . date('d F Y', strtotime($tbl_datappdb['tanggal_lahir'])); ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Jenis Kelamin</p>
                <p class="card-text col-sm-7">
                    <?php
                    if ($tbl_datappdb['jenis_kelamin'] == 'L') {
                        echo "Laki-laki";
                    } elseif ($tbl_datappdb['jenis_kelamin'] == 'P') {
                        echo "Perempuan";
                    }; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Agama</p>
                <p class="card-text col-sm-7">
                    <?php
                    if ($tbl_datappdb['kd_agama'] == '01') {
                        echo "Islam";
                    } elseif ($tbl_datappdb['kd_agama'] == '02') {
                        echo "Kristen Protestan";
                    } elseif ($tbl_datappdb['kd_agama'] == '03') {
                        echo "Katholik";
                    } elseif ($tbl_datappdb['kd_agama'] == '04') {
                        echo "Hindu";
                    } elseif ($tbl_datappdb['kd_agama'] == '05') {
                        echo "Budha";
                    } elseif ($tbl_datappdb['kd_agama'] == '06') {
                        echo "Konghucu";
                    } elseif ($tbl_datappdb['kd_agama']) {
                        echo "Lain-lain";
                    }; ?>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Kewarganegaraan</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['warganegara']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Status Siswa</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['statussiswa']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Anak ke</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['anak_ke'] . " dari " . $tbl_datappdb['dari__bersaudara'] . " bersaudara"; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Jumlah Saudara</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['jumlah_saudara']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">E-mail</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['email']; ?></p>
            </div>
            <hr>
            <h3 class="h5 text-gray-900 mt-sm-5 mb-sm-3">Keterangan Tempat Tinggal Siswa</h3>
            <div class="row">
                <p class="card-text col-sm-5">Alamat</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['alamat']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">RT / RW</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['rt'] . "/" . $tbl_datappdb['rw']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Kelurahan / Desa</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['kelurahan']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Kecamatan</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['kecamatan']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">No. HP</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['no_hp']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Tinggal Bersama dengan</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['tinggalbersama']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Jarak Rumah ke Sekolah</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['jarak'] . " km"; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Ke Sekolah dengan</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['transport']; ?></p>
            </div>
            <hr>

            <h3 class="h5 text-gray-900 mt-sm-5 mb-sm-3">Keterangan Pilihan Kompetensi Keahlian</h3>
            <div class="row">
                <p class="card-text col-sm-5">Kompetensi Keahlian</p>
                <p class="card-text col-sm-7">
                    <?php
                    if ($tbl_datappdb['jurusan'] == 'AP') {
                        echo "Administrasi Perkantoran";
                    } elseif ($tbl_datappdb['jurusan'] == 'TKJ') {
                        echo "Teknik Komputer dan Jaringan";
                    }; ?></p>
                <!-- <?= $tbl_datappdb['jurusan']; ?></p> -->
            </div>
            <hr>

            <h3 class="h5 text-gray-900 mt-sm-5 mb-sm-3">Keterangan Pendidikan Siswa Sebelumnya</h3>
            <div class="row">
                <p class="card-text col-sm-5">SMP/MTs</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['asal_sekolah']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Nomor Induk Siswa Nasional (NISN)</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['nisn']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Tanggal/Tahun/No.STTB</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['no_sttb']; ?></p>
            </div>
            <hr>

            <h3 class="h5 text-gray-900 mt-sm-5 mb-sm-3">Keterangan Data Orang Tua Siswa</h3>
            <div class="row">
                <p class="card-text col-sm-5">Nama Orang Tua/Wali</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['nama_ot']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Alamat Orang Tua/Wali</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['alamat_ot']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">No. HP</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['no_hp_ot']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Pendidikan Terakhir</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['pendidikan_ot']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Pekerjaan</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['pekerjaan_ot']; ?></p>
            </div>
            <div class="row">
                <p class="card-text col-sm-5">Penghasilan</p>
                <p class="card-text col-sm-7"><?= $tbl_datappdb['penghasilan_ot']; ?></p>
            </div>

            <div class="text-sm-right mr-3 mb-5">
                <p class="card-text"><small class="text-muted">Telah Mendaftar pada tanggal <?= date('d F Y', $tbl_datappdb['date_created']); ?></small></p>
            </div>
            <hr>

            <!-- Persyaratan -->

            <h3 class="h5 text-gray-900 mt-sm-5 mb-sm-3">Keterangan Persyaratan Yang Harus Dilengkapi</h3>
            <ol>
                <li>Formulir</li>
                <li>Fotokopi Ijazah / Surat Kelulusan</li>
                <li>Fotokopi Akte Kelahiran</li>
                <li>Fotokopi Kartu Keluarga</li>
                <li>Fotokopi NISN</li>
                <li>Fotokopi KTP Orang Tua/Wali</li>
                <li>Fotokopi KIP (Kartu Indonesia Pintar) / PKH (Program Keluarga Harapan) / KKS (Kartu Keluarga Sejahtera) (Kartu Bantuan Pemerintah)</li>
            </ol>
            <p>Biaya untuk menjadi siswa SMK MERAH PUTIH sebesar Rp. 3.436.000,- yang dapat di angsur sebanyak 3x. Perincian pembiayaan dapat di terdapat pada Brosur.
            </p>
            <p>Dengan menyerahkan persyaratan di atas maka calon siswa tersebut, dinyatakan sebagai siswa SMK MERAH PUTIH.</p>
            <p align="right" class="mr-sm-3">Jakarta, <?= date('d F Y'); ?></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p align="right" class="mr-sm-3"><?= $tbl_datappdb['nama']; ?></p>

            <div class="form-group row justify-content-end mt-sm-5">
                <div class="col-sm-3">
                    <a href="<?= base_url('user/editprofile'); ?>" class="btn btn-primary btn-block" role="button">Edit</a>
                </div>

                <div class="col-sm-3">
                    <a href="<?= base_url('user/cetak'); ?>" class="print btn btn-success btn-block" role="button" target="blank">Print</a>
                    <!-- <a href="<?= base_url('mpdfcontroller/printPDF'); ?>" type="submit" class="print btn btn-success btn-block">Print</a> -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->