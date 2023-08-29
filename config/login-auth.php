<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Menghindari SQL Injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query untuk mencari user berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);
            $hashedPassword = $user["password"];

            // Memverifikasi password menggunakan password_verify
            if (password_verify($password, $hashedPassword)) {
                // Login berhasil, set session dan redirect
                $_SESSION["firstname"] = $user["firstname"];
                $_SESSION["lastname"] = $user["lastname"];
                header("Location: ../index.php");
                exit();
            } else {
                $error_message = "Incorrect password";
            }
        } else {
            $error_message = "Email not found";
        }
    } else {
        $error_message = "Login failed";
    }
}
