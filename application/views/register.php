<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Register Akun</title>
</head>

<body>

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">


                    <form action="<?php echo base_url() ?>index.php/register/simpan" method="post">
                        <div class="card-body">
                            <label>REGISTER</label>
                            <hr>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap"
                                    placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukkan Password">
                            </div>

                            <button class="btn btn-register btn-block btn-success">REGISTER</button>

                        </div>
                    </form>
                </div>

                <div class="text-center" style="margin-top: 15px">
                    Sudah punya akun? <a href="<?php echo base_url() ?>index.php/login">Silahkan Login</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>


</body>

</html>