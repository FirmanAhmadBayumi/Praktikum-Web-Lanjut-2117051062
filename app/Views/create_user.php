<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pemrograman Web Lanjut</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/create_user.css") ?>">
</head>

<body>
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
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="kelas" id="kelas">
                                <?php
                                foreach ($kelas as $item){
                                ?>
                                    <option value="<?= $item['id'] ?>">
                                        <?= $item['nama_kelas'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="npm" id="npm" placeholder="NPM" required />
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
</body>

</html>