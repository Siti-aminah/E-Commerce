<?php
    include('connection.php');
    if(!$_SESSION['login']){
        header("location:tambah.php");
    }
    $statement = oci_parse($connection, "SELECT * FROM TB_PRODUK WHERE DEL_FLAGE = 0");
    oci_execute($statement);
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
            <h3 class="text-center"><b>Tambah Produk</b></h3>
            <?php 
                if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                }
            
            ?>    
        </div>    
        <div class="card mt-5">
            <form method="POST" action= "tambah_proses.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id Produk</label>
                        <input type="number" class="form-control" id ="id_produk" name ="id_produk" placeholder="Masukkan id produk..." required>
                    </div>
                     <div class="form-group">
                        <label for="nama produk">Nama Produk</label>
                        <input type="text" class="form-control" id ="nama_produk" name ="nama_produk" placeholder="Masukkan nama produk..." required>
                    </div>
                    <div class="form-group">
                        <label for="kategori produk">Kategori Produk</label>
                        <select class = "form-control"name="kategori_produk" id="kategori_produk" required>
                            <option value="Peralatan Elektronik">Peralatan Elektronik</option>
                            <option value="Aksesoris Elektronik">Aksesoris Elektronik</option>
                            <option value="Fashion Pria">Fashion Pria</option>
                            <option value="Fashion Wanita">Fashion Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="detail produk">Detail Produk</label>
                        <input type="text" class="form-control" id ="detail_produk" name ="detail_produk" placeholder="Masukkan detail produk..." required>
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




<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('head.php');?>
</head>
<body>
    <?php include('nav_admin.php'); ?>
    <div class= "container" style = "margin-top :100px; margin-bottom : 100px;">
        <div class="pt-5">
            <h3 class="text-center"><b>Daftar Produk</b></h3>
            <?php 
                if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                }
            ?>    
        </div>
            <div class="card mt-5">
                <div class="card-header"></div>
                <a class = "btn btn-primary float-right" href="tambah.php"><i class="fas fa-plus"></i>ADD</a>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>id_produk</td>
                            <td>nama_produk</td>
                            <td>kategori_produk</td>
                            <td>detail_produk</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $no = 1;
                            while($row = oci_fetch_array($statement)){
                                echo '<tr>';
                                echo '<td>'.$row['ID_PRODUK'].'</td>';
                                echo '<td>'.$row['NAMA_PRODUK'].'</td>';
                                echo '<td>'.$row['KATEGORI_PRODUK'].'</td>';
                                echo '<td>'.$row['DETAIL_PRODUK'].'</td>';
                                echo '<td><a href="ubah.php?id='.$row['ID_PRODUK'].'" class="btn btn-primary btn-block">ubah</a>
                                <a href="detail.php?id='.$row['ID_PRODUK'].'" class="btn btn-primary btn-block">Detail</a>
                                <a href="hapus.php?id='.$row['ID_PRODUK'].'" onclick="return confirm(\'apakah anda yakin?\')" class="btn btn-primary btn-block">Delete</a>';
                            }
                            ?>
                    </tbody>
                </div>
            </div>
        <div>
     </div>
    </div> 
    <?php include('js.php');?>
</body>
</html>