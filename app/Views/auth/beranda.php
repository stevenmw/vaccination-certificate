<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <b>
        <h2 class="text-primary text-center">Beranda</h2>
    </b> -->

    <div class="container justify-content-center d-lg-block">
        <img src="/img/Olivac Beranda.jpg" class="img-fluid" alt="syarat olivac" class="justify-content-center-lg-flex">
        <a href="/registration/daftar">
            <button class="btn btn-primary btn-lg" type="button">Pendaftaran Vaksinasi
                <i class=" fas fa-arrow-right"></i>
            </button>
        </a>
    </div>


</div>
<?= $this->endSection(); ?>