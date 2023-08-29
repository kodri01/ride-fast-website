<section class="section2">
    <div class="section-content2 ">
        <div class="event">
            <div class="event-image">
                <img src="assets/img/client.jpg" alt="">
            </div>
            <div class="event-info">
                <h2 class="event-title">Business <br> Partnership</h2>
                <p class="event-description">Melangkah Menuju Keunggulan: Bergandengan Tangan Menuju Keberhasilan Luar
                    Biasa</p>
                <a href="#" class="event-button">Learn More</a>
            </div>

        </div>
    </div>
</section>
<section class="section2">
    <div class="section-content2 ">
        <center>
            <h2><strong>Klien <label style="color: #1A51BD" for="">Kami</label></strong></h2>

            <div class="client-logos owl-carousel">
                <div class="client-logo">
                    <img src="assets/img/logo1.jpg" alt="Logo Client 1">
                </div>
                <div class="client-logo">
                    <img src="assets/img/logo2.jpg" alt="Logo Client 2">
                </div>
                <div class="client-logo">
                    <img src="assets/img/logo3.jpg" alt="Logo Client 3">
                </div>
                <div class="client-logo">
                    <img src="assets/img/logo4.jpg" alt="Logo Client 4">
                </div>
                <div class="client-logo">
                    <img src="assets/img/logo5.jpg" alt="Logo Client 5">
                </div>
            </div>
        </center>
    </div>
</section>

<script>
$(document).ready(function() {
    $('.client-logos').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
</script>