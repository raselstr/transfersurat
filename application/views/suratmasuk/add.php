<div class="card text-bg-light mb-3 w-50">
  <div class="card-header">Tambah Data</div>
  <div class="card-body">
    <form action="<?= site_url('suratmasuk/prosesadd') ?>" method="POST">
  <div class="mb-3">
    <label class="form-label">Nomor Surat </label>
    <input type="text" name="nosurat" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Perihal </label>
    <input type="text" name="perihal" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Asal Surat </label>
    <input type="text" name="asalsurat" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Tanggal Surat </label>
    <input type="date" name="tgl" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Diketahui oleh </label>
    <input type="text" name="ttd" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>