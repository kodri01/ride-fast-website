<section class="section">
    <div class="section-content">
        <nav style="--bs-breadcrumb-divider: '>'; margin-left:80px;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?nav=produk">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
            </ol>
        </nav>
        <form action="config/add-auth.php" method="post" enctype="multipart/form-data" style="width: 65%;margin-left:20rem">
            <h2 class="text-capitalize mb-4">Tambah <b style="color: #1A51BD">Products</b></h2>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kategory</label>
                <div class="col-sm-8">
                    <select name="category" id="" class="form-control">
                        <option value="">-- Pilih Category --</option>
                        <option value="Suku Cadang">Suku Cadang dan Aksesoris Motor</option>
                        <option value="Peralatan">Peralatan Keselamatan</option>
                        <option value="Perawatan">Perawatan dan Perbaikan</option>
                        <option value="Merchendise">Merchendise dan Pakaian</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Product</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_product" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Gambar Product</label>
                <div class="col-sm-8">
                    <input type="file" name="img_product" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" name="harga" class="form-control" id="inputPassword">
                </div>
            </div>
            <input type="submit" value="Tambahkan" class="btn btn-primary">
        </form>
    </div>
</section>