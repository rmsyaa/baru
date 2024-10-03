<?php
include '../config.php';

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses penyimpanan data barang
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $Warna = $_POST['Warna'];
    $harga_barang = $_POST['harga_barang'];
    $stok_barang = $_POST['stok_barang'];

    // Proses upload gambar
    $gambar_barang = $_FILES['gambar_barang']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($gambar_barang);

    // Validasi file gambar (optional)
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    
    if (in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($_FILES['gambar_barang']['tmp_name'], $target_file)) {
            // Jika file berhasil diunggah, simpan data barang ke database
            $sql = "INSERT INTO barang (kode_barang, nama_barang,Warna , harga_barang, stok_barang, gambar_barang) 
                    VALUES ('$kode_barang', '$nama_barang','$Warna', '$harga_barang', '$stok_barang', '$target_file')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Barang berhasil ditambahkan!";
                header('Location:barang.php');  // Redirect ke halaman daftar barang
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah gambar.";
        }
    } else {
        echo "Hanya file dengan ekstensi JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
    }
}

// Tutup koneksi
$conn->close();
?>
