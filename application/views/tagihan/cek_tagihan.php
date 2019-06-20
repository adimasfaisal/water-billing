<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hitung Tagihan</title>
    <link rel="icon" href="assets/img/ico.png" type="image/ico">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <?php foreach ($pelanggan as $u) { ?>


        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <div id="dataPelanggan">
                                            <h2 class="text-primary">Informasi Pelanggan</h2>
                                            <hr>
                                            <p><strong>Nomor Pelanggan : </strong><?php echo $noPelanggan ?> </p>
                                            <p><strong>Nama Pelanggan : </strong><?php echo $u->namaPelanggan ?> </p>
                                            <p><strong>Alamat Pelanggan : </strong><?php echo $u->alamat ?> </p>
                                            <p><strong>Nomor Rumah : </strong><?php echo $u->noRumah ?> </p>
                                            <p><strong>Nomor KK : </strong><?php echo $u->noKK ?> </p>
                                            <p><strong>Nomor Handphone : </strong><?php echo $u->hpPelanggan ?> </p>
                                            <p><strong>Nomor Telepon : </strong><?php echo $u->teleponPelanggan ?> </p>
                                        </div>
                                        <br>
                                        <h2 class="text-primary">Hitung Tagihan</h2>
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="harga" placeholder="Grup Tarif">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" id="pemakaian" placeholder="Jumlah Pemakaian">
                                            </div>
                                        </div>
                                        <div class="row  mb-3 mb-sm-0">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control form-control-user" id="pemakaian" placeholder="Total Tagihan" disabled>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-3" name="hitung">
                                            Hitung Total Tagihan
                                        </button>
                                        <hr>
                                        <a href="auth" class="btn btn-danger btn-block mt-3" name="hitung">
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <?php } ?>

</body>

</html>