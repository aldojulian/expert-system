<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>id pengetahuan</th>
      <th>id pengetahuan</th>
      <th>status pengetahuan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($detail_pengetahuan as $key => $value): ?>
      <tr>
        <td><?php echo $key+=1 ?></td>
        <td><?php echo $value["id_pengetahuan"]; ?></td>
        <td><?php echo $value["id_pengetahuan"]; ?></td>
        <td><?php echo $value["status_pengetahuan"]; ?></td>
        <td>
          <a href="<?php echo base_url("pakar/detail_pengetahuan/ubah/".$value["id_pengetahuan"]) ?>" class="btn btn-warning btn-xs">Ubah</a>
          <a href="<?php echo base_url("pakar/detail_pengetahuan/hapus/".$id_pengetahuan."/".$value["id_pengetahuan"]) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin?')">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>


<a href="<?php echo base_url("pakar/detail_pengetahuan/tambah/".$id_pengetahuan) ?>" class="btn btn-primary btx-xs">Tambah</a>