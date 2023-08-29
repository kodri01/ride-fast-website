<section class="section2">
    <div class="section-content2">
        <div class="row">
            <div class="col">
                <img src="assets/img/home.jpg" alt="">
            </div>
            <div class="col" style="margin-top: -10rem">
                <?php
                if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
                    $firstname = $_SESSION['firstname'];
                    $lastname = $_SESSION['lastname'];
                    echo '<h1 class="text-uppercase"><strong>Welcome <span style="color: #1A51BD">' . $firstname . ' ' . $lastname . '</span></strong></h1>';
                } else {
                    echo '<h1 class="text-uppercase"><strong>Welcome to <br> <span style="color: #1A51BD">Motorcycle Ride Fast</span></strong></h1>';
                }
                ?>


                <p>Rev Up Your Lifestyle with Motorcicle Ride Fast</p>

                <a href="#" class="btn">Explore More</a>
            </div>

        </div>
    </div>
</section>