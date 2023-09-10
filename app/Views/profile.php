<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing and Views</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <style>
        .container{
            margin-top: 10px;
        }
        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            width: 250px;
            height: 250px;
        }
        button{
            fill: rgb(14, 13, 13);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profil">
            <img src="<?= base_url('assets/images/firman.JPG') ?>" alt="Foto Profil">
        </div>

        <div class="nama">
            <button type="button" class="btn btn-dark d-grid gap-2 col-3 mx-auto mt-3 fs-5">Nama: <?=$nama?></button>
        </div>

        <div class="kelas">
            <button type="button" class="btn btn-dark d-grid gap-2 col-3 mx-auto mt-3 fs-5">Kelas: <?=$kelas?></button>
        </div>

        <div class="npm">
            <button type="button" class="btn btn-dark d-grid gap-2 col-3 mx-auto mt-3 fs-5">NPM: <?=$npm?></button>
        </div>
    </div>
</body>

</html>