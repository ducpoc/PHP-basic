<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "news";

$mydb = new mysqli($servername, $username, $password, $dbName);
if ($mydb->connect_error) {
    die('Connection Failed');
}

function getNewsInDay($mydb)
{

    $query = "SELECT idTin, TieuDe FROM tin WHERE Ngay=CURDATE()";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idTin'] . "</td>";
        echo "<td>" . $item['TieuDe'] . "</td>";
    }
}

function getTenPostOfNews($mydb)
{

    $query = "SELECT idTin, TieuDe FROM tin ORDER BY Ngay DESC LIMIT 0,10";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idTin'] . "</td>";
        echo "<td>" . $item['TieuDe'] . "</td>";
    }
}

function getTenPostNewOfNews($mydb)
{

    $query = "SELECT idTin, TieuDe, SoLanXem FROM tin ORDER BY SoLanXem DESC LIMIT 0,10";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idTin'] . "</td>";
        echo "<td>" . $item['TieuDe'] . "</td>";
    }
}

function getTitleGotA($mydb)
{

    $query = "SELECT idTin, TieuDe, Ngay FROM tin WHERE TieuDe LIKE 'a%'";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idTin'] . "</td>";
        echo "<td>" . $item['TieuDe'] . "</td>";
    }
}

// vd 5
function getInnerJoin($mydb)
{

    $query = "SELECT idTin, TieuDe, Ngay, Ten 
                FROM tin, loaitin 
                WHERE tin.idLT = loaitin.idLT AND TieuDe LIKE '%a'
                ORDER BY Ngay DESC, idTin DESC";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idTin'] . "</td>";
        echo "<td>" . $item['TieuDe'] . "</td>";
        echo "<td>" . $item['Ngay'] . "</td>";
        echo "<td>" . $item['Ten'] . "</td>";
    }
}

// vd6

// vd7
function getRanDom($mydb)
{
    $query = "SELECT idTin, TieuDe FROM tin ORDER BY rand() LIMIT 0,3 ";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idTin'] . "</td>";
        echo "<td>" . $item['TieuDe'] . "</td>";
    }
}
// vd8
function getUser($mydb)
{
    $query = "SELECT  idUser, count(idTin) as SoTin FROM tin GROUP BY idUser ";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idUser'] . "</td>";
    }
}
// vd9
function getAllNews($mydb)
{
    $query = "SELECT loaitin.idTL,Ten,sum(solanxem) as TongSoLanXem
    FROM Tin, loaitin where Tin.idLT = loaitin.idLT
    GROUP BY loaitin.idLT,Ten";
    $news = $mydb->query($query);
    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['idUser'] . "</td>";
        echo "<td>" . $item['SoLanXem'] . "</td> ";
    }
}
// vd10
function getAll($mydb)
{
    $query = "SELECT YEAR(Ngay) as Nam, MONTH(Ngay) as Thang, COUNT(idTin) as SoTin, sum(SoLanXem) as TongSoLuotXem
                FROM tin
                GROUP BY Nam, Thang
                ORDER BY Nam Desc, Thang Desc";
    $news = $mydb->query($query);

    foreach ($news as $item) {
        echo "<tr>";
        echo "<td>" . $item['Nam'] . "</td>";
        echo "<td>" . $item['Thang'] . "</td>";
        echo "<td>" . $item['SoTin'] . "</td>";
    }
}