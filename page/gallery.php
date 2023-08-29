<section class="section2">
    <div class="section-content2 ">
        <?php if (!empty($notification)) { ?>
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <?php echo $notification; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <div class="galery">
            <?php if ($_SESSION) { ?>
                <a href="?nav=add_galeri" class="btn btn-small mb-3">
                    Tambah Gambar
                </a>
            <?php } else { ?>
                <div class=""></div>
            <?php } ?>
            <div class="row">
                <?php
                $sql = "SELECT * FROM galery";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nama_galeri = $row["nama"];
                        $img_galery = $row["img_galery"];
                ?>
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                            <div class="galeri-image">
                                <img src="config/<?php echo $img_galery; ?> " alt="<?php echo $nama; ?>">
                            </div>
                        </div>

                <?php
                    }
                } else {
                    echo "
                    <center>
                    <div class='alert alert-warning' role='alert'>
                        <b>Galery Tidak Tersedia</b>
                      </div>
                    </center>";
                }
                ?>

            </div>

        </div>
    </div>
</section>