<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="dispusipda.png">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="from.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo_jabar.png" alt="Logo Jabar" width="40" height="40">
            <span class="d-none d-lg-block">Dinas Perpustakaan dan Kearsipan Daerah</span>
        </a>
        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- Menu Garis Empat (More Options) -->
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons">menu</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="index.php">Beranda</a></li>
                        <li><a class="dropdown-item" href="#">Data Tamu</a></li>
                        <li><a class="dropdown-item" href="#">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-conversation fs-1"></i>
                        <h5 class="card-title">daftar arsip statis</h5>
                        <a href="sikn.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-search-alt fs-1"></i>
                        <h5 class="card-title">daftar arsip dinamis</h5>
                        <a href="" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-search-alt fs-1"></i>
                        <h5 class="card-title">link sikn</h5>
                        <a href="https://jikn.anri.go.id/" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
