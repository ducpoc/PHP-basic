<?php
include '../models/products.php';
if (isset($_GET['idxoa'])) {
    $id = $_GET['idxoa'];
    deleteProduct($id);
    header('location:products.php');
}
$productName = $_POST['productName'];
$productCatalogID = $_POST['productCatalogID'];
$imageName = $_FILES['productImage']['name'];
$path = '../images/' . $imageName;
if (move_uploaded_file($_FILES['productImage']['tmp_name'], $path)) {
    insertProduct($productName, $imageName, $productCatalogID);
    header('location:products.php');
}
echo 'khong them duoc san pham';