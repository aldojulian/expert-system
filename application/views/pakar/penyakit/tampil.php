<h3>Data Penyakit</h3>
<hr>
<a href="<?php echo base_url("pakar/penyakit/tambah") ?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<table id="myTable" class="table table-bordered table-hover table-striped">
  <thead>     
    <tr>       
      <th>No</th>       
      <th>Kode Penyakit</th>       
      <th>Nama Penyakit</th>       
      <th>Deskripsi</th>       
      <th>Aksi</th>     
    </tr>
  </thead>   
  <tbody>     
    <?php foreach ($penyakit as $key => $value): ?>


  <tr>
    <td><?php echo $key+=1 ?></td>
    <td><?php echo $value["kode_penyakit"]; ?></td>
    <td><?php echo $value["nama_penyakit"]; ?></td>
    <td><?php echo $value["deskripsi_penyakit"]; ?></td>
    <td>
      <a href="<?php echo base_url("pakar/penyakit/ubah/".$value["id_penyakit"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
      <a href="<?php echo base_url("pakar/penyakit/hapus/".$value["id_penyakit"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
    </td>
  </tr>
<?php endforeach ?>
</tbody>
</table>

