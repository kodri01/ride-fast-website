<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_galeri = $_POST["nama"];

    // Upload gambar produk
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["img_galery"]["name"]);

    // Pindahkan file yang diunggah ke direktori target
    if (move_uploaded_file($_FILES["img_galery"]["tmp_name"], $targetFile)) {
        // Query untuk memasukkan data ke dalam tabel produk
        $sql = "INSERT INTO galery (nama, img_galery)
                VALUES ('$nama_galeri', '$targetFile')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["notification"] = "Galeri berhasil ditambahkan!";
            header("Location: ../index.php?nav=galery&message=success");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $_SESSION["notification"] = "Terjadi kesalahan saat mengunggah gambar.";
        header("Location: ../index.php?nav=galery&message=failed");
    }
}
