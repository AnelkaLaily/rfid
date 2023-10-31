<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="container-fluid bg-primary text-white p-md-3 p-2" style="padding: 10px;">
        <div class="row text-left">
            <span class="h1">Smart Parking</span>
        </div>
    </header>
     
    <div class="container-fluid">
        <span class="row mb-10 h3 p-md-3 p-2">Data Pengguna</span>
        <a class="btn btn-primary btn-icon" href="index.php"><i class="fa-solid fa-circle-chevron-left"></i>  Back</a>

        <table class="table text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Kartu</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";

                    $sql = mysqli_query($conn, "Select * from pengguna");
                    $no = 0;
                    while ($data = mysqli_fetch_array($sql)) {
                        $no++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $data['no_kartu']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['no_telp']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-warning">Update</a>
                            <a href="hapus.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="tambah.php" type="button" class="btn btn-success mt-3">Tambah</a>
    </div>

    <footer class="container-fluid bg-light mt-5">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2023 Smart Parking
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>