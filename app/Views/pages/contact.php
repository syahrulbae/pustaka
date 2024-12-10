<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>
<div class="container d-flex justify-content-center">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $heading ?></h5>
            <p class="card-text text-justify">Nama : <?= $nama ?><br>Nomor Handphone : <?= $hp ?><br>Alamat :
                <?= $alamat ?>
            </p>
            <a href="#" class="btn btn-primary">Hubungi</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>