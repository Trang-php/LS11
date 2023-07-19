<?php
    require_once 'pdo.php';
    $product = new Product(null, null, null);
    $id = ['id' => $_POST['id']];
    $product->deleteProdData($id);
    header("Location: http://localhost/LS11/Product/index.php");
?>