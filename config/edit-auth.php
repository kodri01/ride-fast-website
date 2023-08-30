<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; // ID produk yang akan diubah

    $category = $_POST["category"];
    $nama_product = $_POST["nama_product"];
    $harga = $_POST["harga"];

    // Upload gambar produk jika ada perubahan
    if ($_FILES["img_product"]["name"] !== "") {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["img_product"]["name"]);

        if (move_uploaded_file($_FILES["img_product"]["tmp_name"], $targetFile)) {
            $img_product = $targetFile;
        } else {
            $_SESSION["notification"] = "Terjadi kesalahan saat mengunggah gambar.";
            header("Location: ../index.php?nav=produk&message=failed");
            exit();
        }
    }

    // Query untuk memperbarui data produk
    $sql = "UPDATE product SET category = '$category', nama_product = '$nama_product', harga = '$harga'";
    if (isset($img_product)) {
        $sql .= ", img_product = '$img_product'";
    }
    $sql .= " WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["notification"] = "Produk berhasil diubah!";
        header("Location: ../index.php?nav=produk&message=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
