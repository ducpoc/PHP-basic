<?php
include_once '../layout/connet.php';
function getAllCatalog()
{
    $DHB = getPDO();
    $sql = "SELECT *FROM catalog";
    $catalogs = $DHB->query($sql);
    return $catalogs;
}