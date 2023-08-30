<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Query untuk menghapus produk berdasarkan ID
    $sql = "DELETE FROM product WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["notification"] = "Produk berhasil dihapus!";
        header("Location: ../index.php?nav=produk&message=delete");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $_SESSION["notification"] = "Terjadi kesalahan dalam penghapusan produk.";
    header("Location: ../index.php?nav=produk&message=failed");
    exit();
}
