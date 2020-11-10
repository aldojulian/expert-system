<h3>Data Gejala</h3>
<hr>
<a href="<?php echo base_url("pakar/gejala/tambah") ?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<table id="myTable" class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Gejala</th>
      <th>Nama Gejala</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($gejala as $key => $value): ?>
      

    <tr>
      <td><?php echo $key+=1 ?></td>
      <td><?php echo $value["kode_gejala"]; ?></td>
      <td><?php echo $value["nama_gejala"]; ?></td>
      <td>
        <a href="<?php echo base_url("pakar/gejala/ubah/".$value["id_gejala"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
        <a href="<?php echo base_url("pakar/gejala/hapus/".$value["id_gejala"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>


<!-- sekarang di video tambah kategori -->

