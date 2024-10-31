<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../dispusipda.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Laporan Rekap</title>
    <link rel="stylesheet" href="kunjungan_kearsipan.css">
</head>
<body>
<div class="container mt-4">
    <h2>Hasil Rekap</h2>
    <form action="daftar_kunjungan_kearsipan2.php" method="get" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" required>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Tampilkan Laporan</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
