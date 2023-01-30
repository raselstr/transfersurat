<div class="card text-bg-light mb-3">
  <div class="card-header">Data Pegawai</div>
  <div class="card-body">
    <a href="<?= site_url('pegawai/tambahin') ?>" class="btn btn-sm btn-primary">Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NIP</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Golongan</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($record as $key) { ?>
    <tr>
      <th><?= $key->nip ?></th>
      <td><?= $key->namalengkap ?></td>
      <td><?= $key->tptlahir ?></td>
      <td><?= $key->tgllahir ?></td>
      <td><?= $key->jk ?></td>
      <td><?= $key->alamat ?></td>
      <td><?= $key->jabatan ?></td>
      <td><?= $key->gol ?></td>
      <td><a href="<?= site_url('pegawai/ubah/'.$key->nip) ?>" class="btn btn-sm btn-warning">Edit</a></td>
      <td><a href="<?= site_url('pegawai/buang/'.$key->nip) ?>" class="btn btn-sm btn-danger">Hapus</a></td>
      
    </tr> 
	<?php } ?>
  </tbody>
</table>

  </div>
</div>