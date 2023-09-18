<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing and Views</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/profile.css")?>">
</head>

<body>
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
</body>

</html>