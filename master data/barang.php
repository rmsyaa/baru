<?php
include '../config.php';
session_start();
// Mengambil data barang dari database
$query = "SELECT * FROM t_barang";
$result = $mysqli->query($query);
?>

<?php include '../admin/index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
       <!-- plugins:css -->
       <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
</head>
<body>
    <div class="container my-5">
        <h1>Data Barang</h1>
        <a href="barang-add.php" class="btn btn-warning mb-3">+ Tambah Barang</a>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if ($result->num_rows > 0):
                    $no = 1;
                    while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kode_barang']; ?></td>
                    <td><?= $row['PIC']; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['warna']; ?></td>
                    <td><?= 'Rp. ' . number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td>
                        <a href="barang.php?action=edit&id=<?= $row['kode_barang']; ?>" class="btn btn-success">Edit</a>
                        <a href="barang.php?action=delete&id=<?= $row['kode_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a>
                    </td>
                </tr>
                <?php 
                    endwhile;
                else:
                    echo "<tr><td colspan='6'>Tidak ada data barang.</td></tr>";
                endif;
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
