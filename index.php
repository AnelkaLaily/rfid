<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard RFID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="container-fluid bg-primary text-white p-md-3 p-2" style="padding: 10px;">
        <div class="row text-left">
            <span class="h1">Smart Parking</span>
        </div>
    </header>

    <main class="container-fluid border p-md-5 p-2 text-center">
        <div class="d-grid gap-3">
            <a class="p-2 btn btn-primary mx-auto" style="width: 300px;" href="datapengguna.php">Data Pengguna</a>
            <a class="p-2 btn btn-primary mx-auto" style="width: 300px;" href="rekap.php">Rekapitulasi</a>
            <a class="p-2 btn btn-primary mx-auto" style="width: 300px;" href="scan.php">Scan Kartu</a>
        </div>
    </main>

    <footer class="container-fluid bg-light">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2021 Tutorial Bootstrap
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>