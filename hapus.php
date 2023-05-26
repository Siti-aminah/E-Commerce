<?php

    include('connection.php');

    if (isset($_GET['id'])){
        $id_produk = $_GET['id'];
        $deleted = date('Y-m-d H:i:s');
        $del_flage = 1;
        $statement = oci_parse($connection, "UPDATE TB_PRODUK SET DELETED= TO_DATE('$deleted','
           yyyy-mm-dd hh24:mi:ss'), DEL_FLAGE='$del_flage' WHERE ID_PRODUK='$id_produk'");
        if (oci_execute($statement)){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil Menghapus Data</div>';
            header("location:tambah.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal Menghapus Data</div>' ;
            header("location:tambah.php");
        }
    }
?>



