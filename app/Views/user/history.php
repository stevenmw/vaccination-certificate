<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat dan Tiket Vaksin</h1>

    <!-- <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="card-img-top" alt="<?= user()->username; ?>">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $regis[0]->tanggal_vaksin; ?></h4>
                                </li>
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>

                                <li class="list-group-item"><?= user()->email; ?></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div> -->

    <!-- Jika masih melakukan vaksin pertama -->
    <?php if ($regis[1]->periode_vaksin == 'Pertama') : ?>

        <div class="card text-white bg-success mb-3" style="max-width: 28rem;">
            <!-- <div class="card-header">Riwayat Vaksinasi</div> -->
            <div class="card-body">
                <h5 class="card-title"><?= 'Sudah Vaksin ' . $regis[1]->periode_vaksin; ?></h5>
                <h6 class="card-title">Program Vaksinasi Pemerintah</h6>
                <h6 class="card-title">Lokasi</h6>
                <h6 class="card-title">Klinik Ghana</h6>
                <!-- <br> -->
                <p class="card-text"><small class=""><?= 'Last update ' . Date('l, d-m-Y  h:i:s a'); ?></small></p>
            </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 28rem;">
            <!-- <div class="card-header">Belum Vaskin kedua</div> -->
            <div class="card-body">
                <h5 class="card-title">Belum Vaksin kedua</h5>
                <p class="card-text"> <?= 'Saudara ' . $regis[1]->nama_lengkap . ' diharapkan segera mendaftarkan diri di periode vaksin tahap dua' ?>.</p>
            </div>

            <div class="container mb-3">
                <a href="<?= base_url('registration/daftar_vaksindua'); ?>">
                    <button type="button" class="btn btn-secondary">Pendaftaran Vaksin ke-2
                        <i class=" fas fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>

        <!-- Jika sudah melakukan vaksin pertama dan kedua -->
    <?php elseif ($regis[2]->periode_vaksin == 'Kedua') : ?>
        <div class="card text-white bg-success mb-3" style="max-width: 28rem;">
            <div class="card-body">
                <h5 class="card-title"><?= 'Sudah Vaksin Pertama'; ?></h5>
                <h6 class="card-title">Program Vaksinasi Pemerintah</h6>
                <h6 class="card-title">Lokasi</h6>
                <h6 class="card-title">Klinik Ghana</h6>
                <!-- <br> -->
                <p class="card-text"><small class=""><?= 'Last update ' . Date('l, d-m-Y  h:i:s a'); ?></small></p>
            </div>
        </div>

        <br>

        <div class="card text-white bg-success mb-3" style="max-width: 28rem;">
            <div class="card-body">
                <h5 class="card-title"><?= 'Sudah Vaksin ' . $regis[1]->periode_vaksin; ?></h5>
                <h6 class="card-title">Program Vaksinasi Pemerintah</h6>
                <h6 class="card-title">Lokasi</h6>
                <h6 class="card-title">Klinik Ghana</h6>
                <!-- <br> -->
                <p class="card-text"><small class=""><?= 'Last update ' . Date('l, d-m-Y  h:i:s a'); ?></small></p>
            </div>
        </div>


        <!-- jika belum melakukan vaksinasi sama sekali -->
    <?php elseif ($regis[1]->periode_vaksin == null) : ?>

        <div class="card text-white bg-danger mb-3" style="max-width: 28rem;">
            <!-- <div class="card-header">Belum Vaskin kedua</div> -->
            <div class="card-body">
                <h5 class="card-title">Belum Vaksin Pertama</h5>
                <p class="card-text"> <?= 'Saudara ' . $regis[1]->nama_lengkap . ' diharapkan segera mendaftarkan diri di periode vaksin tahap pertama' ?>.</p>
            </div>
        <?php endif; ?>

        </div>
        <?= $this->endSection(); ?>