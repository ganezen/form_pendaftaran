<form action="<?= base_url('peserta/tambah_action') ?>" method="POST">
    <div class="form-group">
        <label>Nama Peserta</label>
        <input type="text" name="nama_peserta" class="form-control">
        <?= form_error('nama_peserta', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

     <div class="form-group">
        <label>Kelas Peserta</label>
        <input type="text" name="kelas_peserta" class="form-control">
        <?= form_error('kelas_peserta', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

     <div class="form-group">
        <label>Alamat Peserta</label>
        <textarea name="alamat_peserta" class="form-control"></textarea>
        <?= form_error('alamat_peserta', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

     <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="nomor_telepon" class="form-control">
        <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</form>