<?php
// Include file konfigurasi database
include '../config.php';
session_start();

// Inisialisasi variabel untuk menyimpan hasil
$total_barang = $total_masuk = $total_keluar = 0;

// Query untuk menghitung total barang
$query_total_barang = "SELECT COUNT(*) AS total_barang FROM t_barang";
$result_total_barang = $mysqli->query($query_total_barang);
if ($result_total_barang) {
    $total_barang = $result_total_barang->fetch_assoc()['total_barang'];
} else {
    // Jika query gagal, tampilkan pesan error
    echo "Error: " . $mysqli->error;
}

// Query untuk menghitung stok masuk, menggunakan IFNULL untuk mengganti NULL dengan 0
$query_stock_masuk = "SELECT IFNULL(SUM(jumlah_masuk), 0) AS total_masuk FROM b_masuk";
$result_stock_masuk = $mysqli->query($query_stock_masuk);
if ($result_stock_masuk) {
    $total_masuk = $result_stock_masuk->fetch_assoc()['total_masuk'];
} else {
    // Jika query gagal, tampilkan pesan error
    echo "Error: " . $mysqli->error;
}

// Query untuk menghitung stok keluar, menggunakan IFNULL untuk mengganti NULL dengan 0
$query_stock_keluar = "SELECT IFNULL(SUM(jumlah_keluar), 0) AS total_keluar FROM b_keluar";
$result_stock_keluar = $mysqli->query($query_stock_keluar);
if ($result_stock_keluar) {
    $total_keluar = $result_stock_keluar->fetch_assoc()['total_keluar'];
} else {
    // Jika query gagal, tampilkan pesan error
    echo "Error: " . $mysqli->error;
}
?>
<?php
// Include file konfigurasi database
include '../admin/index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sunflower Stock Dashboard</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End inject:css -->

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .dashboard-container {
            max-width: 900px;
            margin-top: 0; /* Mengurangi margin agar konten lebih dekat ke atas */
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .dashboard-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #F6F193;
            border-radius: 8px 8px 0 0;
        }
        .welcome-text {
            font-size: 24px;
            font-weight: 600;
            color: #343a40;
        }
        .dashboard-header img {
            max-width: 150px;
            margin-left: 20px;
        }
        .overview-cards {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .card {
            width: 29%;
            padding: 20px;
            border-radius: 8px;
            color: #fff;
            text-align: center;
        }
        .card.yellow { background-color: #ffc107; }
        .card.purple { background-color: #6f42c1; }
        .card.blue { background-color: #007bff; }
        .card h3 {
            font-size: 28px;
            margin: 10px 0;
        }
        .card p {
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <div class="dashboard-header">
        <div class="welcome-text">
            Hi, Rima<br>
            Silahkan isi stock tas mu ^ ^
        </div>
        <!-- Menambahkan gambar di sini -->
        <img src="../assets/wanita.png" alt="Kawaii Illustration" style="height: 180px; width: auto;">
    </div>

    <!-- Overview cards section -->
    <div class="overview-cards">
        <div class="card yellow">
            <h3><?= $total_barang ?></h3>
            <p>Data Barang</p>
        </div>
        <div class="card purple">
            <h3><?= $total_masuk ?></h3>
            <p>Stock Masuk</p>
        </div>
        <div class="card blue">
            <h3><?= $total_keluar ?></h3>
            <p>Stock Keluar</p>
        </div>
    </div>
</div>

<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/vendors/chart.js/Chart.min.js"></script>
<script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
<!-- End plugins:js -->

</body>
</html>
