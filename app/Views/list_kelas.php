<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2 class="text-center mt-3"><b>Data Kelas</b></h2>
    <a class="btn btn-primary" href="<?= base_url('/kelas/create') ?>"><i class="bi bi-plus-circle px-2"></i>Tambah Kelas</a>
    <table id="example" class="table table-striped table-dark table-hover mt-3 text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kelas as $kls) {
                ?>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $kls['nama_kelas'] ?>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="<?= base_url('kelas/' . $kls['id'] . '/edit') ?>">
                            <img src="<?= base_url("assets/svg/edit.svg"); ?>" alt="" style="width:23px; height:23px;">
                        </a>
                        <form action="<?= base_url('kelas/' . $kls['id']) ?>" method="POST" style="display: inline-block">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <script>
                                function confirmDelete() {
                                    return confirm("Semua data user yang terkait dengan kelas ini akan terhapus, anda yakin?");
                                }
                            </script>
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">
                                <img src="<?= base_url("assets/svg/hapus.svg"); ?>" alt="" style="width:23px; height:23px;">
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>