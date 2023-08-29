<section class="section" style="margin-top: -4rem;">
    <?php if (!empty($notification)) { ?>
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <?php echo $notification; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <div class="section-content">
        <h1 class="text-uppercase">Our <b style="color: #1A51BD">Products</b></h1>
        <div class="line"></div>
        <?php if ($_SESSION) { ?>
            <a href="?nav=add_produk" class="btn btn-small mb-2">
                Tambah Product
            </a>
        <?php } else { ?>
            <div class=""></div>
        <?php } ?>
        <div class="row w-100 justify-content-center mx-3">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="?nav=sukucadang">
                    <div class="card">
                        <div class="card-top">
                            <img src="assets/img/suku.svg" alt="">
                            <p class="title">
                                Suku Cadang & <br> Aksesori Motor
                            </p>
                        </div>
                        <p class="desc">
                            Kami menyediakan berbagai suku cadang asli dan aksesori berkualitas tinggi untuk berbagai
                            jenis
                            motor
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="?nav=peralatan">
                    <div class="card">
                        <div class="card-top">
                            <img src="assets/img/alat.svg" alt="">
                            <p class="title">
                                Peralatan <br>Keselamatan
                            </p>
                        </div>
                        <p class="desc">
                            Berbagai peralatan keselamatan seperti helm, jaket, sarung tangan, dan perlengkapan lainnya
                            untuk para pengendara motor
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="?nav=perawatan">
                    <div class="card">
                        <div class="card-top">
                            <img src="assets/img/rawat.svg" alt="">
                            <p class="title">
                                Perawatan & <br> Perbaikan
                            </p>
                        </div>
                        <p class="desc">
                            Produk-produk untuk perawatan dan perbaikan motor, termasuk oli, cairan, dan alat-alat yang
                            diperlukan
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <a href="?nav=merchendise">
                    <div class="card">
                        <div class="card-top">
                            <img src="assets/img/pakaian.svg" alt="">
                            <p class="title">
                                Merchandise & <br> Pakaian
                            </p>
                        </div>
                        <p class="desc">
                            Berbagai merchandise dan pakaian berkualitas tinggi yang terkait dengan dunia motor
                        </p>
                    </div>
                </a>
            </div>
        </div>

    </div>

</section>