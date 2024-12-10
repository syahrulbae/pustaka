<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?= $heading ?></h1>
            <hr>
            <p><?= $deskripsi ?></p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>