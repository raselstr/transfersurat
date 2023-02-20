<div class="card text-bg-light mb-3">
  <div class="card-header">Data Pegawai</div>
  <div class="card-body">
  <div class="container-text-center">
  <div class="row">
    <div class="col-2">
      <a href="<?= site_url('pegawai/tambahin') ?>" class="btn btn-sm btn-primary">Tambah Data</a>
    </div>
    <div class="col-6">
      <!-- <a href="<?= site_url('pegawai/tambahin') ?>" class="btn btn-sm btn-primary">Tambah Data</a> -->
    </div>

    <div class="col">
      <!-- <form  -->
      <form action="<?= site_url('pegawai/search') ?>" method="POST" >
        <input class="form-me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary btn-sm" type="submit">Cari</button>
      </form>
    </div>
  </div>
  
  <div class="table-responsive">
    <table class="table align-middle">
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
          <td><a href="<?= site_url('pegawai/halaman_edit/'.$key->nip) ?>" class="btn btn-sm btn-warning">Edit</a></td>
          <td><a href="<?= site_url('pegawai/buang/'.$key->nip) ?>" class="btn btn-danger btn-sm">Hapus</a></td>
          
        </tr> 
      <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
</div>