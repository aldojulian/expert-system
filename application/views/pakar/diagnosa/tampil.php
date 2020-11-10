<h3>Halaman Diagnosis</h3>
<hr>
<table id="myTable" class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Klien</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($klien as $key => $value): ?>
      

    <tr>
      <td><?php echo $key+=1 ?></td>
      <td><?php echo $value["nama_klien"]; ?></td>
      <td>
        <a href="<?php echo base_url("pakar/diagnosa/tambah/".$value["id_klien"]) ?>" class="btn btn-info btn-xs">Diagnosis</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>


