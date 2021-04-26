<?php
include_once '../layout/connet.php';
function getPDO()
{
    $PDO = new PDO("mysql:host=localhost;dbname=assignment", "root", "");
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $PDO;
}
function getAllProduct()
{
    $DBH = getPDO();
    $sql = "SELECT * FROM product ";
    $products = $DBH->query($sql);
    return $products;
}
function insertProduct($productName, $imageName, $productCatalogID)
{
    $sql = "insert into product(name,imagelink,catalog_id) values('$productName ','$imageName','$productCatalogID') ";
    $DBH = getPDO();
    $DBH->exec($sql);
}
function deleteProduct($id)
{
    $sql = "delete from product where id='$id'";
    $DBH = getPDO();
    $DBH->exec($sql);
}
function getProductById($id)
{
    $DBH = getPDO();
    $sql = "SELECT * from product where id='$id' ";
    $products = $DBH->query($sql);
    return $products->fetch(PDO::FETCH_ASSOC);
}