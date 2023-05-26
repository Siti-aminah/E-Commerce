<?php
   include('connection.php');
    if(!$_SESSION['login']){
        header("location: admin.php");
    }

    $statement = oci_parse($connection, "SELECT * FROM TB_PRODUK WHERE ID_PRODUK=".$_GET['id']);
    oci_execute($statement);
    while($row = oci_fetch_array($statement)){
        $id_produk = $row['ID_PRODUK'];
        $nama_produk= $row['NAMA_PRODUK'];
        $ketegori_produk = $row['KATEGORI_PRODUK'];
        $detail_produk= $row['DETAIL_PRODUK'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include("head.php"); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php include("nav_admin.php");?>
    <div class= "container" style = "margin-top :100px; margin-bottom : 100px;">
        <div class="pt-5">
            <h3 class="text-center"><b>Ubah Produk</b></h3>
            <?php 
                if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                }
            
            ?>    
        </div>    
        <div class="card mt-5">
            <form method="POST" action= "ubah_proses.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id Produk</label>
                        <input type="number" class="form-control" id ="id_produk" name ="id_produk" placeholder="Masukkan Id Produk..." value ="<?php echo $id_produk; ?>"required>
                        <input type="hidden" id="id_produk" id="id_produk" value="<?php echo $id_produk?>">
                    </div>
                     <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" nama ="nama_produk" name ="nama_produk" placeholder="Masukkan Nama Produk..." value ="<?php echo $nama_produk; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_produk">Kategori Produk</label>
                        <select class = "form-control"name="kategori_produk" id="kategori_produk" required>
                            <option value="Peralatan Elektronik">Peralatan Elektronik</option>
                            <option value="Aksesoris Elektronik">Aksesoris Elektronik</option>
                            <option value="Fashion Pria">Fashion Pria</option>
                            <option value="Fashion Wanita">Fashion Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="detail_produk">Detail Produk</label>
                        <input type="text" class="form-control" name ="detail_produk" name ="detail_produk" value ="<?php echo $detail_produk; ?>" placeholder="Masukkan Detail Produk..." required>
                    </div>

                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-danger" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" class="btn btn-success" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
                    </div>
                    
                </div>
            </form>    

        </div>
        
    </div>
    <?php include('js.php'); ?>
    
</body>
</html>
