<div class="card text-bg-light mb-3">
  <div class="card-header">Data Surat Masuk</div>
  <div class="card-body">
    <a href="<?= site_url('suratmasuk/add') ?>" class="btn btn-sm btn-primary">Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor Surat</th>
      <th scope="col">Perihal</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Asal Surat</th>
      <th scope="col">Diketahui</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($record as $key) { ?>
    <tr>
      <th><?= $key->nosurat ?></th>
      <td><?= $key->perihal ?></td>
      <td><?= $key->tgl_surat ?></td>
      <td><?= $key->asal_surat ?></td>
      <td><?= $key->ttd ?></td>
      <td><a href="<?= site_url('suratmasuk/delete/'.$key->id) ?>" class="btn btn-sm btn-danger">Hapus</a></td>
    </tr> 
	<?php } ?>
  </tbody>
</table>

  </div>
</div>