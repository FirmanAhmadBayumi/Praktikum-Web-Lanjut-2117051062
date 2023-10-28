<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container mb-5" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
    <div class="card mt-5" style="width: 20rem;">
        <img src="<?= $user['foto'] ?? base_url('assets/images/default_foto.png') ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title text-center mb-3  ">Data User</h3>
            <h5 class="mb-3">Nama: <?= $user['nama'] ?></h5>
            <h5 class="mb-3">NPM: <?= $user['npm'] ?></h5>
            <h5 class="mt-3">Kelas: <?= $user['nama_kelas'] ?></h5>
        </div>
    </div>
</div>
<?= $this->endSection() ?>