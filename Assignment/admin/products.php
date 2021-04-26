<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="product.css">


    <title>products</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('location:login.php');
    }

    include '../models/products.php';
    include '../models/catalog.php';


    ?>

    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="catalog.php">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php
    $DBH = new PDO('mysql:host=localhost;dbname=assignment', 'root', '');
    if (isset($_GET['id'])) {
        $id = $_GET['id']; //lay ma chuyen bay duoc sua
        $sql = "select * from product where id='$id'";
        $result = $DBH->query($sql);
        $product = $result->fetch(PDO::FETCH_ASSOC);
    }

    ?>
    <main class="row">

        <form action="xulyProduct.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Name product</label>
                <input type="text" class="form-control" name="productName"
                    value="<?php if (isset($id)) echo '' . $product['name'] . ''; ?>">
            </div>
            <div class="form-group">
                <label>catalog Product</label>

                <select name="productCatalogID">
                    <option value="">chon danh muc</option>
                    <?php
                    $catalogs = getAllCatalog();
                    foreach ($catalogs as $cate) {
                        echo '  <option value="' . $cate['id'] . '">' . $cate['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="productImage">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>

            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>image</th>
                </tr>
            </thead>
            <?php
            $products = getAllProduct();
            foreach ($products as $product) {
                echo '
                <tr>
                   <td>' . $product['id'] . '</td>
                   <td>' . $product['name'] . '</td>
                   <td><img src="../images/' . $product['imagelink'] . '" width="50px"  height="50px" hea alt=""></td>
                   <td>
                   <a href="xulyProduct.php?idxoa=' . $product['id'] . '">xoa</a>
                   <a href="idsua.php?idsua=' . $product['id'] . '">sua</a>
                   </td>
                </tr>
                ';
            }
            ?>
        </table>

    </main>
</body>

</html>