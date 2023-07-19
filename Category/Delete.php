<?php
    require_once 'pdo.php';
    $cate = new Category();
    $id = ['id' => $_POST['id']];
    $cate->deleteData($id);
    header("Location: http://localhost/LS11/Category/index.php");
?>
?>