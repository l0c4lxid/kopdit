<?= $this->extend('layouts/main'); ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">

        <h3>Daftar Akun</h3>
        <a href="<?= site_url('admin/tambah_jenis_simpanan') ?>" class="btn btn-success">Tambah</a>
    </div>
    <br>
    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success">
            <?= esc(session()->getFlashdata('message')) ?>
        </div>
    <?php endif; ?>

    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Data Simpanan</h5>
        </div>
        <div style="overflow-x: auto;">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Simpanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jenis_simpanan as $jenis): ?>
                        <tr>
                            <td><?= $jenis->id_jenis_simpanan ?></td>
                            <td><?= $jenis->nama_simpanan ?></td>
                            <td>
                                <a href="<?= site_url('admin/edit_jenis_simpanan/' . $jenis->id_jenis_simpanan) ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>