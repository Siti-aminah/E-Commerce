<?php
include('connection.php');

if(isset($_POST['submit'])){
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $detail_produk = $_POST['detail_produk'];
    $created_at = date('Y-m-d H:i:s');
    $del_flage = 0;
    $statement = oci_parse($connection, "INSERT INTO TB_PRODUK(ID_PRODUK,NAMA_PRODUK,KATEGORI_PRODUK,DETAIL_PRODUK,CREATED_AT,DEL_FLAGE) VALUES ('$id_produk','$nama_produk',
    '$kategori_produk','$detail_produk',to_date('$created_at','yyyy-mm-dd hh24:mi:ss'),'$del_flage')");
    if (oci_execute($statement)) {
    $_SESSION['message'] = '<div class="alert alert-succes" role="alert">Berhasil Menambahkan Data</div>';
    header("location:tambah.php");
    } else {                                     
    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data</div>';
    header("location:tambah.php");
    }
}
?>