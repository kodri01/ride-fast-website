<?php
require_once('../config/connection.php');
?>
<style>
    .main-content {
        margin-top: -12.5%;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 400px;
        padding: 20px;
        background-color: #f1f1f1;
        border-radius: 5px;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .success-message {
        margin-top: 10px;
        padding: 10px;
        background-color: #DFF0D8;
        border: 1px solid #3C763D;
        border-radius: 4px;
        color: #3C763D;
    }
</style>

<div class="main-content">
    <h2>Registration</h2>
    <div class="container">
        <div class="card">
            <form method="post" action="">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </form>
            <?php if (isset($_POST['register'])) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                $sql = mysqli_query($conn, "INSERT INTO user (Email, Username, Password, Name, Access) VALUES ('$email', '$username', '$password', '$name', 'User')");
                if ($sql) {
                    $message = "Registration successful! Please login to access your account.";
                } else {
                    $message = "Registration failed, Please try again!";
                }
                echo "<script>
    alert('" . $message . "')
    </script>";
            } ?>
            <a href="login.php">Already have account</a>
            <br>
            <br>
            <a href="index.php">Go to home</a>
        </div>
    </div>
</div>