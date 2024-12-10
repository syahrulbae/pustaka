<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center">Form Tambah Buku</h3>
        <hr>
        <!-- error data -->
        <form action="/buku/simpan" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control <?= (isset($validate['judul'])) ? 'is-invalid' : '' ?>"
                        id="judul" name="judul" autofocus value="<?= old('judul') ?>">
                    <?php if (isset($validate['judul'])): ?>
                        <div class="invalid-feedback">
                            <?= $validate['judul']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (isset($validate['pengarang'])) ? 'is-invalid' : '' ?>"
                        id="pengarang" name="pengarang" value="<?= old('pengarang') ?>">
                    <?php if (isset($validate['pengarang'])): ?>
                        <div class="invalid-feedback">
                            <?= $validate['pengarang']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (isset($validate['penerbit'])) ? 'is-invalid' : '' ?>"
                        id="penerbit" name="penerbit" value="<?= old('penerbit') ?>">
                    <?php if (isset($validate['penerbit'])): ?>
                        <div class="invalid-feedback">
                            <?= $validate['penerbit']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= (isset($validate['tahun_terbit'])) ? 'is-invalid' : '' ?>"
                        id="tahun_terbit" name="tahun_terbit" value="<?= old('tahun_terbit') ?>">
                    <?php if (isset($validate['tahun_terbit'])): ?>
                        <div class="invalid-feedback">
                            <?= $validate['tahun_terbit']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-6">
                    <div class="custom-file">
                        <input type="file" name="sampul" id="sampul" class="custom-file-input form-control <?= (isset($validate['sampul'])) ? 'is-invalid' : '' ?>" accept=".jpg, .jpeg, .png">
                        <label for="sampul" class="custom-file-label" data-browse="sampul">Upload File Gambar</label>
                        <?php if (isset($validate['sampul'])): ?>
                        <div class="invalid-feedback">
                            <?= $validate['sampul']; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Simpan Data</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>