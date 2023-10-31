<?php
    include "koneksi.php";

    if (isset($_POST['btnSimpan'])) {
        $no_kartu = $_POST['no_kartu'];
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];

        $simpan = mysqli_query($conn, "Insert into pengguna (no_kartu, nama, no_telp) values ('$no_kartu', '$nama', '$no_telp')");

        if ($simpan) {
            echo "
                <script>
                    alert('Data Berhasil Disimpan');
                    location.replace('datapengguna.php');
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Disimpan');
                    location.replace('datapengguna.php');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#norfid").load('nokartu.php');
            }, 0);
        })
    </script>
</head>
<body>
    <header class="container-fluid bg-primary text-white p-md-3 p-2" style="padding: 10px;">
        <div class="row text-left">
            <span class="h1">Smart Parking</span>
        </div>
    </header>
     
    <div class="container-fluid">
        <span class="row mb-10 h3 p-md-3 p-2">Tambah Data Pengguna</span>
        <a class="btn btn-primary btn-icon" href="index.php"><i class="fa-solid fa-circle-chevron-left"></i>  Back</a>

        <form method="POST" class="mt-3">       
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">No Kartu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_kartu" id="no_kartu" style="width: 400px;">
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Nama Pengguna</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" style="width: 400px;">
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" id="no_telp" style="width: 400px;">
                </div>
            </div>
        
            <a href="tambah.php" type="submit" class="btn btn-primary mt-3" id="btnSimpan" name="btnSimpan">Simpan</a>
        </form>
    </div>

    <footer class="container-fluid bg-light mt-5">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2021 Tutorial Bootstrap
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>