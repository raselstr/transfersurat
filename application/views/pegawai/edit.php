<div class="card text-bg-light mb-3 w-50">
  <div class="card-header">Edit Data Pegawai</div>
  <div class="card-body">
    <form action="<?= site_url('pegawai/fungsiedit') ?>" method="POST">
  <div class="mb-3">
    <label class="form-label">NIP </label>
    <input type="text" name="nip" class="form-control" value="<?php echo $record->nip?>" readonly>
  </div>

  <div class="mb-3">
    <label class="form-label">Nama Lengkap </label>
    <input type="text" name="namalengkap" class="form-control" value="<?php echo $record->namalengkap?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Tempat Lahir </label>
    <input type="text" name="tptlahir" class="form-control" value="<?php echo $record->tptlahir?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Tanggal Lahir </label>
    <input type="date" name="tgllahir" class="form-control" value="<?php echo $record->tgllahir?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Jenis Kelamin </label>
    <select name = "jk" class="form-select" aria-label="Default select example">
      <option selected><?php echo $record->jk?></option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Alamat </label>
    <textarea class="form-control" id="alamat" name ="alamat" rows="4" ><?php echo $record->alamat?></textarea> 
  </div>

  <div class="mb-3">
    <label class="form-label">Jabatan </label>
    <input type="text" name="jabatan" class="form-control" value="<?php echo $record->jabatan?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Golongan</label>
    <input type="text" name="gol" class="form-control" value="<?php echo $record->gol?>">
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
  </div>
</div>