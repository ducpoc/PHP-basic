<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="viewsproducts.css">

    <title>products</title>
</head>

<body>
    <header>
        <?php
        include 'layout/header.php';
        include 'layout/connet.php';
        ?>
    </header>
    <form action="#" method="POST">
        <?php
        $sql = "SELECT * FROM product";
        $allsp = $conn->query($sql);
        $id = $_GET['id'];
        foreach ($allsp as $sp) {
            if ($sp['id'] == $id)
                $products = $sp;
        }
        ?>
        <?php
        echo '  <div class="name-products" ><p class="text-product">' . $products['name'] . '</p></div>
        <div class="banner">
            <img style="width:100%; height:395px" src="' . $products['imagebanner'] . '" alt="">
        </div>';
        ?>

        <main>
            <section class="view-game">
                <h2>Giới thiệu game</h2>
            </section>
            <?php
            echo ' 
            <div class="products">
                <div class="products-text">
                    <div class="title"><h2>' . $products['title'] . '</h2></div>
                    <div class="text-show"><h4>' . $products['content'] . '</h4></div>
                </div>
                <div class="products-image">
                <img style="width:100%; height:395px" src="' . $products['imagelink'] . '" alt="">
                </div>
            </div>';
            ?>
            <div class="sell-products">

                <div class="image">
                    <?php
                    echo '<img style="width:256px; height:400px" src="' . $products['imagelink'] . '" alt="">';
                    ?>
                </div>
                <div class="products-views">

                    <?php
                    echo '
                    <h2>' . $products['name'] . '</h2>
                    <h5>Giá : ' . $products['price'] . '$</h5> 
                    ';
                    ?>
                    <input type="number" name="soluong"> <br>
                    <input type="submit" name="muahang" value="mua hàng">
                </div>
            </div>
            <div class="total">
                <h3 class="name">Đơn hàng</h2>
                    <div class="total-products">
                        <table>
                            <thead>
                                <tr>
                                    <td class="name">Tên sản phẩm</td>
                                    <td class="soluong">Số lượng</td>
                                    <td class="price">Giá</td>
                                    <td class="tongtien">Tổng Tiền</td>
                                </tr>
                            </thead>
                            <?php
                            if (isset($_POST['muahang'])) {
                                $soluong = $_POST['soluong'];
                                $tongtien = $products['price'] * $soluong;
                                echo '
                                <tr>
                                <td>' . $products['name'] . '</td>
                                <td>' . $soluong . '</td>
                                <td>' . $products['price'] . '</td>
                                <td>' . $tongtien . '</td>
                                </tr> 
                                ';
                            }
                            ?>
                        </table>
                    </div>
            </div>
        </main>
    </form>

    <footer>
        <?php
        include 'layout/footer.php';
        ?>
    </footer>
</body>

</html>