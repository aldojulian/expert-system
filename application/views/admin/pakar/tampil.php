<h3>Data Pakar</h3>
<hr>

<a href="<?php echo base_url("admin/pakar/tambah") ?>" class="btn btn-primary">Tambah</a>
<br>
<br>
<table id="myTable" class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Nama</th>
      <th>Nomor Telepon</th>
      <th>Alamat Pakar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pakar as $key => $value): ?>


      <tr>
        <td><?php echo $key+=1 ?></td>
        <td><?php echo $value["username_pakar"]; ?></td>
        <td><?php echo $value["nama_pakar"]; ?></td>
        <td><?php echo $value["telepon_pakar"]; ?></td>
        <td><?php echo $value["alamat_pakar"]; ?></td>
        <td>
          <a href="<?php echo base_url("admin/pakar/detail/".$value["id_pakar"]) ?>" class="btn btn-info btn-xs">Detail</a>
          <a href="<?php echo base_url("admin/pakar/ubah/".$value["id_pakar"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
          <a href="<?php echo base_url("admin/pakar/hapus/".$value["id_pakar"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>



<!-- sekarang di video tambah kategori -->