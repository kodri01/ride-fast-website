<section class="section2">
    <div class="section-content2 ">
        <nav style="--bs-breadcrumb-divider: '>'; margin-left:80px;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?nav=produk">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produk Peralatan</li>
            </ol>
        </nav>
        <center>
            <h2 class="text-capitalize">items <b style="color: #1A51BD">Peralatan</b></h2>
            <div class="line"></div>
        </center>
        <div class="galery">
            <div class="row">
                <div class="row ">
                    <?php
                    $sql = "SELECT * FROM product where category = 'Peralatan'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $category = $row["category"];
                            $nama_product = $row["nama_product"];
                            $img_product = $row["img_product"];
                            $harga = $row["harga"];
                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="galeri-image">
                            <img src="config/<?php echo $img_product; ?> " alt="<?php echo $nama_product; ?>">
                            <center class="my-3">
                                <h2><?php echo $nama_product; ?></h2>
                                <span class="badge text-black"
                                    style="background-color: #FFAF18;"><?= formatRupiah($harga); ?></span>
                            </center>
                        </div>
                    </div>

                    <?php
                        }
                    } else {
                        echo "
                    <center>
                    <div class='alert alert-warning' role='alert'>
                        <b>Product Peralatan Tidak Tersedia</b>
                      </div>
                    </center>";
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>