<?php

$connection = new mysqli("localhost", "root", "", "product");

$id = $_GET['id'];

$result = mysqli_query($connection, "delete from barang where id=".$id);

if($result){
    echo json_encode([
        'message' => 'Data delete successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to delete'
    ]);
}

?>