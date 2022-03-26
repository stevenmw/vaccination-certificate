<?php

use App\Controllers\Registration;
?>
<?= $this->extend('templates/index2'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="border-pattern">
        <div class="content">
            <div class="inner-content">

                <h1>Sertifikat</h1>
                <h2>Vaksinasi Covid-19</h2>
                <h3>Sertifikat ini diberikan kepada : </h3>
                <p><?= user()->username ?></p>
                <h3>NIK</h3>
                <p><?= user()->NIK_user; ?></p>
                <h3>telah melaksanakan vaksinasi tahap pertama pada</h3>
                <p><?= $regis[1]->tanggal_vaksin; ?></p>
                <div class="badge">
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div>
    <button>

    </button>
</div>

<div>
    <button>

    </button>
</div>
<div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <button onclick="window.print()" class="btn-btn-outline-secondary shadow float-sm-right">
                    <i class="fas fa-print"></i>Print
                </button>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>