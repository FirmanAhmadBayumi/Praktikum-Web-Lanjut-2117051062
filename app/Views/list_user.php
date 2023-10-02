<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<table class="">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($users as $user){ 
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>