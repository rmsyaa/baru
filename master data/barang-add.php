<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Barang - Sunflower</title>
    
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
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .add-barang-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .add-barang-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .add-barang-header h2 {
            font-size: 28px;
            color: #343a40;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }
        table th {
            background-color: #007bff;
            color: #fff;
        }
        table td input[type="text"],
        table td input[type="number"],
        table td input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        table td button {
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        table td button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="add-barang-container">
    <div class="add-barang-header">
        <h2>Tambah Barang</h2>
    </div>

    <form action="/master data/add_barang_proses.php" method="post" enctype="multipart/form-data">
        <table class="table table-striped table-hover">
            <thead>
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
                <tr>
                    <td>1</td>
                    <td><input type="text" name="kode_barang" placeholder="Masukkan kode barang" required></td>
                    <td><input type="file" name="gambar_barang" accept="image/*" required></td>
                    <td><input type="text" name="nama_barang" placeholder="Masukkan nama barang" required></td>
                    <td><input type="text" name="Warna" placeholder="Masukkan Warna barang" required></td>
                    <td><input type="text" name="harga_barang" placeholder="Masukkan harga" required></td>
                    <td><input type="text" name="stok_barang" placeholder="Masukkan stok" required></td>
                    <td>
                        <button type="submit">Simpan</button>
                        <a href="../admin/index.php?page=barang" class="btn btn-secondary">Kembali</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/vendors/chart.js/Chart.min.js"></script>
<script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
<!-- End plugins:js -->

<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<!-- endinject -->

</body>
</html>
