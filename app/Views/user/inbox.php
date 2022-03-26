<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kotak Masuk</h1>

    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">Selamat Datang, <?= user()->username; ?></h5>
            <p class="card-text">Terimakasih telah mendaftar di aplikasi Olivac.</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>