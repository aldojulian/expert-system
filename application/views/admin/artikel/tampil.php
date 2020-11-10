<h3>Data Artikel</h3>
<hr>
<a href="<?php echo base_url("admin/artikel/tambah") ?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<table id="myTable" class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Tanggal Artikel</th>
      <th>Deskripsi</th>
      <th>Isi Artikel</th>
      <th>Foto Artikel</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($artikel as $key => $value): ?>
      

    <tr>
      <td><?php echo $key+=1 ?></td>
      <td><?php echo $value["judul_artikel"]; ?></td>
      <td><?php echo $value["tanggal_artikel"]; ?></td>
      <td><?php echo $value["deskripsi_artikel"]; ?></td>
      <td><?php echo $value["isi_artikel"]; ?></td>
      <td><?php echo $value["foto_artikel"]; ?></td>
      <td>
        <a href="<?php echo base_url("admin/artikel/ubah/".$value["id_artikel"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
        <a href="<?php echo base_url("admin/artikel/hapus/".$value["id_artikel"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>



