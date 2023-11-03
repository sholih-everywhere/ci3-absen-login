<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>ABSEN SISWA</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              ABSEN SISWA, ADMIN <?php echo $this->session->userdata("nama_lengkap") ?>
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/siswa/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NISN</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JABATAN</th>
                    <th scope="col">KETERANGAN</th>
                    <th scope="col">MASUK</th>
                    <th scope="col">KELUAR</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                    $no = 1;
                    foreach($data_siswa as $siswa){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $siswa->nisn ?></td>
                      <td><?php echo $siswa->nama_lengkap ?></td>
                      <td><?php echo $siswa->jabatan ?></td>
                      <td><?php echo $siswa->keterangan ?></td>               
                      <td><?php echo $siswa->jam_masuk ?></td>
                      <td><?php echo $siswa->jam_keluar ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>index.php/siswa/edit/<?php echo $siswa->id ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="<?php echo base_url() ?>index.php/siswa/keluar/<?php echo $siswa->id ?>" class="btn btn-sm btn-success">KELUAR</a>
                        <a href="<?php echo base_url() ?>index.php/siswa/hapusdata/<?php echo $siswa->id ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
                      </div>
                      <a href="<?php echo base_url() ?>index.php/siswa/logout" class="btn btn-danger" style="color: #212529;">Logout</a>

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>