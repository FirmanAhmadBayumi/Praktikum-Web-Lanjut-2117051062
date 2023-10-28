<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
    <div class="card mt-4 col-5">
        <div class="card-header text-center">
            <h2>FORM TAMBAH KELAS</h2>
        </div>
        <div class="card-body bg-secondary">
            <form method="POST" action="<?= base_url('/kelas/store') ?>">
                <div class="row mb-3">
                    <label for="nama_kelas" class="col-sm-3 col-form-label text-light">Nama Kelas</label>
                    <div class="col-sm-5">
                        <input type="text"
                            class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>"
                            id="nama" name="nama_kelas" placeholder="Nama Kelas" value="<?= old('nama_kelas') ?>" />
                        <div class="invalid-feedback">
                            <?= validation_show_error('nama_kelas') ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-1">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>