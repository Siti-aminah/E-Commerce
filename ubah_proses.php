<?php

     include('connection.php');

    if(isset($_POST['submit'])) { 
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $kategori_produk = $_POST['kategori_produk'];
        $detail_produk = $_POST['detail_produk'];
        $updated_at = date('Y-m-d H:i:s');
        $statement = oci_parse($connection, "UPDATE TB_PRODUK SET ID_PRODUK='$id_produk', NAMA_PRODUK='$nama_produk', KATEGORI_PRODUK='$kategori_produk',
            DETAIL_PRODUK='$detail_produk',
            UPDATE_AT=TO_DATE('$updated_at','yyyy-mm-dd hh24:mi:ss') WHERE ID_PRODUK='$id_produk' ");
        if(oci_execute($statement)){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil Mengubah Data</div>' ;
            header("location:tambah.php");
        } else {
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal Mengubah Data</div>' ;
            header("location:tambah.php?id=$id_produk");
        }
    }
    
?>