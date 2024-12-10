<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Detail Buku</h3>
            <div class="card mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $buku['sampul'] ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $buku['judul'] ?></h5>
                            <p class="card-text">
                                <b>Pengarang : </b><?= $buku['pengarang'] ?>
                            </p>
                            <p class="card-text">
                                <b>Penerbit : </b><?= $buku['penerbit'] ?>
                            </p>
                            <p class="card-text">
                                <b>Tahun Terbit : </b><?= $buku['tahun_terbit'] ?>
                            </p>
                            <a href="/buku/ubah/<?= $buku['id_buku'] ?>" class="btn btn-warning">Ubah</a>
                            <form action="/buku/<?= $buku['id_buku'] ?>" method="post" class="d-inline">
                                <input type="hidden" name="_method" id="delete" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut!?')">Hapus</button>
                            </form>
                            <br>
                            <br>
                            <p class="card-text"><small class="text-muted">
                                <a href="/buku" class="btn btn-secondary">Kembali</a>
                            </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>