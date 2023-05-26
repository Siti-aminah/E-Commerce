<?php

include("connection.php");
if (!$_SESSION['login']) {
    header("location: admin.php");
}
$statement = oci_parse($connection, "SELECT * FROM TB_PRODUK WHERE ID_PRODUK = ".$_GET['id']);
oci_execute($statement);
while($row = oci_fetch_array($statement)) {
    $id_produk = $row['ID_PRODUK'];
    $nama_produk = $row['NAMA_PRODUK'];
    $kategori_produk = $row['KATEGORI_PRODUK'];
    $detail_produk = $row['DETAIL_PRODUK'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>
    <?php include('nav_admin.php'); ?>
    
    <div class="container" style="margin-top: 100px;margin-bottom: 100px;">
        <div class="pt-5">
            <h3 class="text-center"><b>Detail Produk</b></h3>
        </div>
        <div class="card-mt-5">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_produk">Id Produk</label>
                        <input type="number" class="form-control" id="id_produk" name="id_produk" value="<?php echo $id_produk; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $nama_produk; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="kategori_produk">Kategori Produk</label>
                        <input type="text" class="form-control" id="kategori_produk" name="kategori_produk" value="<?php echo $kategori_produk; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="detail_produk">Detail Produk</label>
                        <input type="text" class="form-control" id="detail_produk" name="detail_produk" value="<?php echo $detail_produk; ?>" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include('js.php'); ?>    
</body>
</html>