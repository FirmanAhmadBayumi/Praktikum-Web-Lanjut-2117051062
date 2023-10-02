<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="card mt-4 col-5">
            <div class="card-header text-center">
                <h2>FORM BIODATA</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('/user/store') ?>">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?=(empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" 
                            id="nama" name="nama" placeholder="Nama" value="<?= old('nama') ?>"/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('nama') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-4">
                            <select class="form-select 
                            <?= (empty(validation_show_error('kelas'))) ? '' : 'is-invalid' ?>" 
                            name="kelas" id="kelas"> 
                                <option value="">Pilih Kelas</option>
                                    <?php
                                    foreach ($kelas as $item){
                                    ?>
                                        <option value="<?= $item['id'] ?>" <?= ($item['id'] == old('kelas')) ? 'selected' : '' ?>>
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

                    <div class="row">
                        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" 
                            name="npm" id="npm" placeholder="NPM" value="<?= old('npm') ?>"/>
                            <div class="invalid-feedback">
                                <?= validation_show_error('npm') ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
            <div class="card-footer text-body-secondary text-center">
                <p> Copyright © Firman Ahmad Bayumi </p>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>