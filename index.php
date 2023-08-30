<?php
session_start();
include 'config/connection.php';

function formatRupiah($angka)
{
    $rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $rupiah;
}

if (isset($_GET["nav"])) {
    $nav = $_GET["nav"];
} else {
    $nav = "";
}

if ($nav == "") {
    $nav = "home";
}

if (isset($_GET["message"])) {
    $messageType = $_GET["message"];

    if ($messageType === "success") {
        $notification = $_SESSION["notification"];
    }
    if ($messageType === "delete") {
        $notification = $_SESSION["notification"];
    }
    if ($messageType === "failed") {
        $notification = $_SESSION["notification"];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body>


    <div class="top">
        <div class="top-bar">
            <div class="logo">
                <a href=""><img src="assets/img/logo.png" alt="logo" width="80px"></a>
            </div>
            <div class="company-name text-uppercase"><b>Motorcicle Ride Fast</b></div>
        </div>
        <div class="navbar">
            <ul class="navbar-links">
                <li><a href="?nav=home" <?php if ($nav == "home") echo 'class="active"'; ?>>Home</a></li>
                <li><a href="?nav=profile" <?php if ($nav == "profile") echo 'class="active"'; ?>>Profile</a></li>
                <li><a href="?nav=visi" <?php if ($nav == "visi") echo 'class="active"'; ?>>Visi dan Misi</a></li>
                <li><a href="?nav=produk" <?php if ($nav == "produk") echo 'class="active"'; ?>>Produk Kami</a></li>
                <li><a href="?nav=kontak" <?php if ($nav == "kontak") echo 'class="active"'; ?>>Kontak Kami</a></li>
                <li><a href="?nav=about" <?php if ($nav == "about") echo 'class="active"'; ?>>About us</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar">
        <ul>
            <li <?php if ($nav == "artikel") echo 'class="active"'; ?>><a href="?nav=artikel">
                    <ion-icon name="newspaper" class="iconss "></ion-icon>Artikel
                </a></li>
            <li <?php if ($nav == "event") echo 'class="active"'; ?>><a href="?nav=event">
                    <ion-icon name="calendar-number" class="iconss"></ion-icon>Event
                </a></li>
            <li <?php if ($nav == "galery") echo 'class="active"'; ?>><a href="?nav=galery">
                    <ion-icon name="images" class="iconss"></ion-icon>Galery
                    Foto
                </a></li>
            <li <?php if ($nav == "klien") echo 'class="active"'; ?>><a href="?nav=klien">
                    <ion-icon name="people" class="iconss"></ion-icon>Klien Kami
                </a>
            </li>
            <?php if ($_SESSION) { ?>
            <li><a href="config/logout.php">
                    <ion-icon name="log-in" class="iconss"></ion-icon>Logout
                </a></li>
            <?php } else { ?>
            <li><a href="page/login.php">
                    <ion-icon name="log-in" class="iconss"></ion-icon>Login
                </a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="main-content">
        <!-- Your main content goes here -->
        <?php
        switch ($nav) {
            case "home":
                include_once "page/home.php";
                break;
            case "profile":
                include_once "page/profile.php";
                break;
            case "visi":
                include_once "page/visimisi.php";
                break;
            case "produk":
                include_once "page/produk.php";
                break;
            case "kontak":
                include_once "page/contact.php";
                break;
            case "about":
                include_once "page/about.php";
                break;
            case "artikel":
                include_once "page/article.php";
                break;
            case "event":
                include_once "page/event.php";
                break;
            case "galery":
                include_once "page/gallery.php";
                break;
            case "klien":
                include_once "page/client.php";
                break;
            case "artikel1":
                include_once "page/article1.php";
                break;
            case "artikel2":
                include_once "page/article2.php";
                break;
            case "artikel3":
                include_once "page/article3.php";
                break;
            case "artikel4":
                include_once "page/article4.php";
                break;
            case "Suku Cadang":
                include_once "page/sukucadang.php";
                break;
            case "Peralatan":
                include_once "page/peralatan.php";
                break;
            case "Perawatan":
                include_once "page/perawatan.php";
                break;
            case "Merchendise":
                include_once "page/merchendise.php";
                break;
            case "add_produk":
                include_once "page/add_produk.php";
                break;
            case "edit_produk":
                include_once "page/edit_produk.php";
                break;
            case "add_galeri":
                include_once "page/add_galeri.php";
                break;
        }
        ?>

    </div>
    <footer class="footer">
        <div class="company">
            <div class="row mx-5">
                <div class="col-3">
                    <img src="assets/img/logo.png" alt="Company Logo">
                </div>
                <div class="col-9">
                    <h3>Motorcicle Ride Fast</h3>
                    <p>Motorcicle Ride Fast adalah sebuah perusahaan yang telah <br> memiliki pengalaman lebih dari satu
                        dekade di industri otomotif</p>
                </div>
            </div>
        </div>
        <div class="footer-content">

            <p>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <style>
                    svg {
                        fill: #ffffff
                    }
                    </style>
                    <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                </svg> motorciclefast@ride.com
            </p>

            <p>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <style>
                    svg {
                        fill: #ffffff
                    }
                    </style>
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg> 082423242322
            </p>

            <p>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                    <style>
                    svg {
                        fill: #ffffff
                    }
                    </style>
                    <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                </svg> Jalan Pegangsaan Nomor 31, Telanaipura,
                Jambi, Indonesia
            </p>

            <div class="social-media mt-2">
                <a href="#">
                    <ion-icon name="logo-facebook" class="sosmed"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter" class="sosmed"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-instagram" class="sosmed"></ion-icon>

                </a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>