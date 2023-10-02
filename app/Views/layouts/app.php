<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/create_user.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/profile.css") ?>">
</head>
<body>
    <?= $this->renderSection('content') ?>
</body>
</html>