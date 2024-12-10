<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Daftar Buku Bacaan</h3>
            <hr>
            <a href="/buku/tambah" class="btn btn-primary mb-1">Tambah Buku</a>
            <!-- Get Flash Data Notifikasi -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($buku as $b) : ?>
                    <tr>
                        <th class="align-middle" scope="row"><?= $i++; ?></th>
                        <td class="align-middle"><img src="/img/<?= $b['sampul']; ?>" alt="" width="75"></td>
                        <td class="align-middle"><?= $b['judul']; ?></td>
                        <td class="align-middle"><a href="/buku/<?= $b['id_buku'] ?>" class="btn btn-success">Details</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>