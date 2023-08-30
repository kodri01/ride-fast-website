<?php
// Ambil ID produk dari parameter (misalnya dari URL)
$id = $_GET['id']; // Atau sesuaikan cara Anda mendapatkan ID

// Query untuk mengambil data produk berdasarkan ID
$sql = "SELECT * FROM product WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $category = $row["category"];
    $nama_product = $row["nama_product"];
    $harga = $row["harga"];
    $id = $row["id"];
}
?>

<section class="section2">
    <div class="section-content2">
        <nav style="--bs-breadcrumb-divider: '>'; margin-left:80px;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Produk</li>
                <li class="breadcrumb-item" aria-current="page"><a href="?nav=<?= $category; ?>"><?= $category; ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit <?= $category; ?></li>
            </ol>
        </nav>

        <form action="config/edit-auth.php" method="post" enctype="multipart/form-data" style="width: 65%;margin-left:20rem">
            <h2 class="text-capitalize mb-4">Edit <b style="color: #1A51BD">Products <?= $category; ?></b></h2>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kategory</label>
                <div class="col-sm-8">
                    <select name="category" class="form-control">
                        <option value="">-- Pilih Category --</option>
                        <?php
                        $categories = array("Suku Cadang", "Peralatan", "Perawatan", "Merchendise"); // Daftar kategori
                        foreach ($categories as $cat) {
                            $selected = ($category == $cat) ? 'selected' : '';
                            echo "<option value='$cat' $selected>$cat</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Product</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_product" class="form-control" value="<?php echo $nama_product; ?>" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Gambar Product</label>
                <div class="col-sm-8">
                    <img src="config/<?php echo $row['img_product']; ?>" alt="Current Image" class="mb-2" width="200">
                    <br>
                    <input type="file" name="img_product" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" name="harga" value="<?php echo $harga; ?>" class="form-control" id="inputPassword">
                </div>
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</section>