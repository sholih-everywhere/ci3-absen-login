<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Kendaraan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              ABSEN
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/siswa/simpan" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="jabatan" id="jabatan">
                    <option value="Project Manager">Project Manager</option>
                    <option value="Front End">Front End</option>
                    <option value="Back End">Back End</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="keterangan" id="jabatan">
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                  </select>
                </div>


                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>