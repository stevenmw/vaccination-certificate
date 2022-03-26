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

                                <!-- Page Heading -->
                                <div class="text-center">
                                    <h2 class="h3 mb-4 text-gray-800">Pendaftaran Vaksin Kedua</h2>
                                </div>

                                <form action=<?= base_url("/registration/savedua"); ?> method="POST">
                                    <?= csrf_field(); ?>
                                    <div>
                                        <div class="form-group">
                                            <label for="inputtanggalvaksin" class="form-label">Tanggal Vaksin Kedua</label>
                                            <input type="date" class="form-control" id="tanggal_vaksin_kedua" name="tanggal_vaksin_kedua">
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleFormControlSelect1">Jenis Vaksin</label>
                                            <select class="form-control" id="jenis_vaksin" name="jenis_vaksin" disabled>
                                                <option><?= $regis[0]->jenis_vaksin; ?></option>
                                            </select>
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleFormControlSelect1">Periode Vaksin</label>
                                            <select class="form-control" id="JenisKelamin" name="periode_vaksin" disabled>
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