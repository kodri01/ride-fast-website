<?php
require_once('../config/connection.php');

if (isset($_GET["message"])) {
    $messageType = $_GET["message"];

    if ($messageType === "success") {
        $notification = "Registration successful!";
    }
    if ($messageType === "failed") {
        $notification = "Registration failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            position: relative;
            margin-top: 5rem;
        }

        .title {
            font-size: 28px;
            color: royalblue;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 30px;
        }

        .title::before,
        .title::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: royalblue;
        }

        .title::before {
            width: 18px;
            height: 18px;
            background-color: royalblue;
        }

        .title::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .message,
        .signin {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: royalblue;
        }

        .signin a:hover {
            text-decoration: underline royalblue;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 2rem;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;
        }

        .form label .input+span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input:placeholder-shown+span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus+span,
        .form label .input:valid+span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input:valid+span {
            color: green;
        }

        .submit {
            border: none;
            outline: none;
            background-color: royalblue;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease;
        }

        .submit:hover {
            background-color: rgb(56, 90, 194);
        }

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <center>
        <form class="form" action="../config/register-auth.php" method="post">
            <p class="title">Register </p>
            <?php if (!empty($notification)) { ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <?php echo $notification; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="flex">
                <label>
                    <input class="input" type="text" placeholder="" name="firstname" required="">
                    <span>Firstname</span>
                </label>

                <label>
                    <input class="input" type="text" placeholder="" name="lastname" required="">
                    <span>Lastname</span>
                </label>
            </div>

            <label>
                <input class="input" type="email" placeholder="" name="email" required="">
                <span>Email</span>
            </label>

            <label>
                <input class="input" type="password" placeholder="" name="password" required="">
                <span>Password</span>
            </label>
            <label>
                <input class="input" type="password" placeholder="" name="confirm_password" required="">
                <span>Confirm password</span>
            </label>
            <button class="submit">Submit</button>
            <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
        </form>
    </center>
</body>

</html>