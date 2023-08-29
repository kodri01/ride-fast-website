<section class="section">
    <div class="section-content">
        <nav style="--bs-breadcrumb-divider: '>'; margin-left:80px;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?nav=galery">Galery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Galery</li>
            </ol>
        </nav>
        <form action="config/add-galeri.php" method="post" enctype="multipart/form-data" style="width: 65%;margin-left:20rem">
            <h2 class="text-capitalize mb-4">Tambah <b style="color: #1A51BD">Galery</b></h2>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-8">
                    <input type="file" name="img_galery" class="form-control" id="inputPassword">
                </div>
            </div>
            <input type="submit" value="Tambahkan" class="btn btn-primary">
        </form>
    </div>
</section>