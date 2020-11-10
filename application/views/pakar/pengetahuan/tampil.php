<h3>Data Pengetahuan</h3>
<hr>
<a href="<?php echo base_url("pakar/pengetahuan/tambah") ?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<table id="myTable" class="table table-bordered table-hover table-striped" >
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Penyakit</th>
      <th>Nama Gejala</th>
      <th>MB</th>
      <th>MD</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pengetahuan as $key => $value): ?>
      

    <tr>
      <td><?php echo $key+=1 ?></td>
      <td><?php echo $value["nama_penyakit"]; ?></td>
      <td><?php echo $value["nama_gejala"]; ?></td>
      <td><?php echo $value["mb_pengetahuan"]; ?></td>
      <td><?php echo $value["md_pengetahuan"]; ?></td>
      <td>
        <a href="<?php echo base_url("pakar/pengetahuan/ubah/".$value["id_pengetahuan"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
        <a href="<?php echo base_url("pakar/pengetahuan/hapus/".$value["id_pengetahuan"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>



