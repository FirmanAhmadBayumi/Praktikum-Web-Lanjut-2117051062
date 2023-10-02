<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>    
    <div class="container">
        <div class="profil">
            <img src="<?= base_url('assets/images/firman.JPG') ?>" alt="Foto Profil">
        </div>

        <div class="nama">
            <button type="button" class="btn btn-dark d-grid gap-2 col-3 mx-auto mt-3 fs-5"><?=$nama?></button>
        </div>

        <div class="kelas">
            <button type="button" class="btn btn-dark d-grid gap-2 col-3 mx-auto mt-3 fs-5"><?=$kelas?></button>
        </div>

        <div class="npm">
            <button type="button" class="btn btn-dark d-grid gap-2 col-3 mx-auto mt-3 fs-5"><?=$npm?></button>
        </div>
    </div>
<?= $this->endSection() ?>