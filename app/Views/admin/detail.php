<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat Vaksinasi</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card" style="width: 18rem;">
                <a target="_blank" href="<?= base_url('/img/' . $user->sertif_vaksin); ?>">
                    <img src="<?= base_url('/img/' . $user->sertif_vaksin); ?>" class="card-img-top" alt="<?= $user->username; ?>" style="auto">
                </a>
                <div class="card-body">
                    <h5><b><?= 'Vaksin ' . $user->periode_vaksin; ?></b></h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h4><?= $user->username; ?></h4>
                    </li>

                    <?php if ($user->fullname) : ?>
                        <li class="list-group-item"><?= $user->fullname; ?></li>
                    <?php endif; ?>

                    <li class="list-group-item"><?= $user->email; ?></li>
                    <li class="list-group-item">
                        <span class="badge badge-<?= ($user->name == 'Administrator') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span>
                    </li>
                    <li class="list-group-item">
                        <small><a href="<?= base_url('admin'); ?>">&laquo; Kembali ke daftar pengguna</a></small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>