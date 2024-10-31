<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="dispusipda.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SIKNJIKN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Kearsipan</th>
                <th>Jumlah Arsip</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
          include 'koneksi.php';

          // Query untuk menghitung total arsip keseluruhan
          $query_total = mysqli_query($koneksi, "SELECT SUM(jumlah_arsip) as total_keseluruhan FROM sudah_input");
          $total_keseluruhan = mysqli_fetch_assoc($query_total)['total_keseluruhan'];

          if (isset($_GET['cari'])) {
            $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
            $query = mysqli_query($koneksi, "SELECT * FROM sudah_input WHERE nama_kearsipan LIKE '%$cari%'");
        } else {
            $query = mysqli_query($koneksi, "SELECT * FROM sudah_input");
        }

        $no_urut = 1; // Initialize the counter
        while ($hasil = mysqli_fetch_array($query)) {
          ?>
        <tbody>
            <tr>
                <td><?php echo $no_urut++; ?></td>
                <td><a href="https://www.tiktok.com/id-ID/">dispusipda</a></td>
                <td><?php echo $hasil['jumlah_arsip']; ?></td>
                <td><?php echo   $hasil['tanggal']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $hasil['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Menghapus Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus ini?
                                        </div>
                                        <div class="modal-footer">
                                            <a href="delete.php?id=<?php echo $hasil['id'] ?>" class="btn btn-danger">Hapus</a>
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </td>
            </tr>

            <tr>
                <td><?php echo $no_urut++; ?></td>
                <td><a href="https://www.petanikode.com/">dis sudut</a></td>
                <td><?php echo $hasil['jumlah_arsip']; ?></td>
                <td><?php echo   $hasil['tanggal']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $hasil['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Menghapus Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus ini?
                                        </div>
                                        <div class="modal-footer">
                                            <a href="delete.php?id=<?php echo $hasil['id'] ?>" class="btn btn-danger">Hapus</a>
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </td>
            </tr>

            <tr>
                <td><?php echo $no_urut++; ?></td>
                <td><a href="https://gaamess.com/">dis sana</a></td>
                <td><?php echo $hasil['jumlah_arsip']; ?></td>
                <td><?php echo   $hasil['tanggal']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $hasil['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Menghapus Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus ini?
                                        </div>
                                        <div class="modal-footer">
                                            <a href="delete.php?id=<?php echo $hasil['id'] ?>" class="btn btn-danger">Hapus</a>
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </td>
            </tr>

            <tr>
                <td><?php echo $no_urut++; ?></td>
                <td><a href="https://www.instagram.com/">disperkin</a></td>
                <td><?php echo $hasil['jumlah_arsip']; ?></td>
                <td><?php echo   $hasil['tanggal']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $hasil['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Hapus
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Menghapus Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus ini?
                                        </div>
                                        <div class="modal-footer">
                                            <a href="delete.php?id=<?php echo $hasil['id'] ?>" class="btn btn-danger">Hapus</a>
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
                <tr class="table-info">
                    <td colspan="2" class="text-end"><strong>Total Arsip Keseluruhan:</strong></td>
                    <td colspan="3"><strong><?php echo $total_keseluruhan; ?></strong></td>
                </tr>
            </tfoot>
        <?php } ?>
    </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>