<h3>Data Klien</h3>
<hr>

<a href="<?php echo base_url("admin/klien/tambah") ?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<table id="myTable" class="table table-bordered table-hover table-striped" tableid>
  <thead>
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Nomor Telepon</th>
      <th>Alamat</th>
      <th>Tanggal Lahir</th>
      <th>Nomor Identitas</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($klien as $key => $value): ?>
      

    <tr>
      <td><?php echo $key+=1 ?></td>
      <td><?php echo $value["username_klien"]; ?></td>
      <td><?php echo $value["nama_klien"]; ?></td>
      <td><?php echo $value["jenis_kelamin_klien"]; ?></td>
      <td><?php echo $value["telepon_klien"]; ?></td>
      <td><?php echo $value["alamat_klien"]; ?></td>
      <td><?php echo $value["tanggal_lahir_klien"]; ?></td>
      <td><?php echo $value["no_identitas_klien"]; ?></td>
      <td>
        <a href="<?php echo base_url("admin/klien/detail/".$value["id_klien"]) ?>" class="btn btn-info btn-xs">Detail</a>
        <a href="<?php echo base_url("admin/klien/ubah/".$value["id_klien"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
        <a href="<?php echo base_url("admin/klien/hapus/".$value["id_klien"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>



