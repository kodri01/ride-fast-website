<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $category = $_POST["category"];
    $nama_product = $_POST["nama_product"];
    $harga = $_POST["harga"];

    // Upload gambar produk
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["img_product"]["name"]);

    // Pindahkan file yang diunggah ke direktori target
    if (move_uploaded_file($_FILES["img_product"]["tmp_name"], $targetFile)) {
        // Query untuk memasukkan data ke dalam tabel produk
        $sql = "INSERT INTO product (category, nama_product, img_product, harga)
                VALUES ('$category', '$nama_product', '$targetFile', '$harga')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["notification"] = "Produk berhasil ditambahkan!";
            header("Location: ../index.php?nav=produk&message=success");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $_SESSION["notification"] = "Terjadi kesalahan saat mengunggah gambar.";
        header("Location: ../index.php?nav=produk&message=failed");
    }
}
