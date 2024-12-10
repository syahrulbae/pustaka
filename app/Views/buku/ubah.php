<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center">Form Ubah Data Buku</h3>
        <hr>
        <form action="/buku/update/<?= $buku['id_buku'] ?>" method="post">
            <?= csrf_field(); ?>

            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (session('validation') && isset(session('validation')->getErrors()['judul'])) ? 'is-invalid' : '' ?>"
                        id="judul" name="judul" autofocus value="<?= old('judul', $buku['judul']) ?>">
                    <?php if (session('validation') && isset(session('validation')->getErrors()['judul'])): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getErrors()['judul']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (session('validation') && isset(session('validation')->getErrors()['pengarang'])) ? 'is-invalid' : '' ?>"
                        id="pengarang" name="pengarang" value="<?= old('pengarang', $buku['pengarang']) ?>">
                    <?php if (session('validation') && isset(session('validation')->getErrors()['pengarang'])): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getErrors()['pengarang']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (session('validation') && isset(session('validation')->getErrors()['penerbit'])) ? 'is-invalid' : '' ?>"
                        id="penerbit" name="penerbit" value="<?= old('penerbit', $buku['penerbit']) ?>">
                    <?php if (session('validation') && isset(session('validation')->getErrors()['penerbit'])): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getErrors()['penerbit']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (session('validation') && isset(session('validation')->getErrors()['tahun_terbit'])) ? 'is-invalid' : '' ?>"
                        id="tahun_terbit" name="tahun_terbit" value="<?= old('tahun_terbit', $buku['tahun_terbit']) ?>">
                    <?php if (session('validation') && isset(session('validation')->getErrors()['tahun_terbit'])): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getErrors()['tahun_terbit']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (session('validation') && isset(session('validation')->getErrors()['sampul'])) ? 'is-invalid' : '' ?>"
                        id="sampul" name="sampul" value="<?= old('sampul', $buku['sampul']) ?>">
                    <?php if (session('validation') && isset(session('validation')->getErrors()['sampul'])): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getErrors()['sampul']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Simpan Data</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>