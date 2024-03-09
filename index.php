<?php
$connection = new mysqli("localhost","root","","product");
$data       = mysqli_query($connection, "select * from barang");
$result       = mysqli_fetch_all($data, MYSQLI_ASSOC);

echo json_encode($result);
?>