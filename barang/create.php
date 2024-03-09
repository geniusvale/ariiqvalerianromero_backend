<?php

$connection = new mysqli("localhost", "root", "", "product");

$nama_barang = $_POST['nama_barang'];
$kategori_id = $_POST['kategori_id'];
$stok = $_POST['stok'];
$kelompok_barang = $_POST['kelompok_barang'];
$harga = $_POST['harga'];

$result = mysqli_query($connection, "insert into barang set nama_barang='$nama_barang', kategori_id='$kategori_id', stok='$stok', kelompok_barang='$kelompok_barang', harga='$harga'");

if($result){
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}

?>