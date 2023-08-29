<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Menghindari SQL Injection
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = mysqli_real_escape_string($conn, $lastname);
    $email = mysqli_real_escape_string($conn, $email);

    // Cek apakah password cocok dengan konfirmasi password
    if ($password === $confirmPassword) {
        // Gunakan bcrypt untuk mengenkripsi password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data ke tabel users
        $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $query)) {
            // Redirect ke halaman login setelah berhasil mendaftar
            $_SESSION["notification"] = "Registrasi Berhasil";
            header("Location: ../page/login.php?message=success");
            exit();
        } else {
            $_SESSION["notification"] = "Registrasi Gagal";
            header("Location: ../page/register.php?message=failed");
        }
    } else {
        $error_message = "Passwords do not match";
    }
}
