<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-1">
                <div class="card-body p-0">

                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">

                                <?= $validation->listErrors(); ?>
                                <!-- Page Heading -->
                                <div class="text-center">
                                    <h2 class="h3 mb-4 text-gray-800">Pendaftaran Vaksin</h2>
                                </div>

                                <?php if (session()->getFlashdata('message')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('message'); ?>
                                    </div>
                                <?php endif; ?>

                                <form action=<?= base_url("registration/save"); ?> method="POST">
                                    <?= csrf_field(); ?>
                                    <div>
                                        <div class="form-group">
                                            <label for="Inputnama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" autofocus>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                Isi nama lengkap terlebih dahulu
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="form-label">NIK</label>
                                            <input type="number" class="form-control <?= ($validation->hasError('NIK')) ? 'is-invalid' : ''; ?>" id="NIK" name="NIK">
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                        </div>

                                        <div class="form-group">
                                            <label for="NoHP1" class="form-label">No Ponsel</label>
                                            <input type="tel" class="form-control" id="no_telepon" name="no_telepon">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputalamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputtanggalvaksin" class="form-label">Tanggal Vaksin</label>
                                            <input type="date" class="form-control" id="tanggal_vaksin" name="tanggal_vaksin">
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleFormControlSelect1">Pilih Jenis Vaksin</label>
                                            <select class="form-control" id="jenis_vaksin" name="jenis_vaksin">
                                                <option>Sinovac</option>
                                                <option>AstraZeneca</option>
                                                <option>Moderna</option>
                                                <option>Pfizer</option>
                                            </select>
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleFormControlSelect1">Pilih Periode Vaksin</label>
                                            <select class="form-control" id="JenisKelamin" id="periode_vaksin" name="periode_vaksin">
                                                <option>Pertama</option>
                                                <option>Kedua</option>
                                            </select>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>