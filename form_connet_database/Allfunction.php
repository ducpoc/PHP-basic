<?php
include 'connet.php'; //connet database

function getPDO()
{
    $PDO = new PDO("mysql:host=localhost;dbname=assignment", "root", "");
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $PDO;
}
// show tất cả sản phẩm trong database
function getAllProduct()
{
    $DBH = getPDO();
    $sql = "SELECT * FROM product ";
    $products = $DBH->query($sql);
    return $products;
}
//thêm sản phẩm vào database 
function insertProduct($productName, $imageName, $productCatalogID)
{
    $sql = "insert into product(name,imagelink,catalog_id) values('$productName ','$imageName','$productCatalogID') ";
    $DBH = getPDO();
    $DBH->exec($sql);
}
//xoá sản phẩm trong database
function deleteProduct($id)
{
    $sql = "delete from product where id='$id'";
    $DBH = getPDO();
    $DBH->exec($sql);
}
//lấy ID của một sản phẩm
function getProductById($id)
{
    $DBH = getPDO();
    $sql = "SELECT * from product where id='$id' ";
    $products = $DBH->query($sql);
    return $products->fetch(PDO::FETCH_ASSOC);
}