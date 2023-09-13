<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Controller</title>
</head>
<body>
    <form action="<?=base_url('/user/store')?>" method="POST">
        <div class="nama">
            <label>Nama :</label>
            <input type="text" name="nama">
        </div>
        <div class="npm">
            <label>NPM :</label>
            <input type="text" name="npm">
        </div>
        <div class="kelas">
            <label>Kelas :</label>
            <input type="text" name="kelas">
        </div>
        <div class="button">
            <button>Submit</button>
        </div>
    </form>
</body>
</html>