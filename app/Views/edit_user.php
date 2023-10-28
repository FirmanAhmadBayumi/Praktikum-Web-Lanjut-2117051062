<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container" style="display: flex; justify-content: center; align-items: center; height: 80vh;">
    <div class="card col-5">
        <div class="card-header text-center bg-light">
            <h2>FORM EDIT BIODATA</h2>
        </div>
        <div class="card-body bg-secondary">
            <form method="POST" action="<?= base_url('/user/' . $user['id']) ?>" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label text-light">Nama</label>
                    <div class="col-sm-9">
                        <input type="text"
                            class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>"
                            id="nama" name="nama" placeholder="Nama" value="<?= $user['nama'] ?>" />
                        <div class="invalid-feedback">
                            <?= validation_show_error('nama') ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label text-light">Kelas</label>
                    <div class="col-sm-4">
                        <select class="form-select 
                            <?= (empty(validation_show_error('kelas'))) ? '' : 'is-invalid' ?>" name="kelas"
                            id="kelas">
                            <option value="">Pilih Kelas</option>
                            <?php
                            foreach ($kelas as $item) {
                                ?>
                                <option value="<?= $item['id'] ?>" <?= ($user['id_kelas'] == $item['id']) ? 'selected' : '' ?>>
                                    <?= $item['nama_kelas'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= validation_show_error('kelas'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="npm" class="col-sm-2 col-form-label text-light">NPM</label>
                    <div class="col-sm-5">
                        <input type="text"
                            class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>"
                            name="npm" id="npm" placeholder="NPM" value="<?= $user['npm'] ?>" />
                        <div class="invalid-feedback">
                            <?= validation_show_error('npm') ?>
                        </div>
                    </div>
                </div>

                <img src="<?= $user['foto'] ?? base_url('assets/images/default_foto.png') ?>" alt="Foto"
                    style="height:150px; width:150px; border-radius:50%; ">
                <div class="row mt-3">
                    <label for="foto" class="col-sm-2 col-form-label text-light">Foto</label>
                    <div class="col-sm-7">
                        <input type="file" class="form-control" name="foto" id="foto" />
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>