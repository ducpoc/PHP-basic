<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="index.css">
    <title>Film</title>
</head>

<body>

    <header>
        <?php
        include 'layout/header.php';
        include 'layout/connet.php';
        ?>

    </header>


    <div class="contaiter-main">
        <main>
            <div class="first-container">
                <div class="item-first-1">
                    <div class="item-first">
                        <?php
                        $query = "SELECT * FROM product WHERE id=1";
                        $allsp = $conn->query($query);
                        foreach ($allsp as $sp) {
                            echo '
                            <div class="image-game-1">
                            <img style="width:100%; height:150px"  src="' . $sp['image'] . '" alt="">
                            </div>
                                <div class="text-game-1"><a href="viewsproducts.php?id=' . $sp['id'] . '"><h3>' . $sp['name'] . '</h3> </a></div>';
                        }
                        ?>

                    </div>
                    <div class="item-first">
                        <?php
                        $query = "SELECT * FROM product WHERE id=4";
                        $allsp = $conn->query($query);
                        foreach ($allsp as $sp) {
                            echo '
                            <div class="image-game-2">
                            <img style="width:100%; height:150px"  src="' . $sp['image'] . '" alt="">
                            </div>
                                <div class="text-game-2"><a href="viewsproducts.php?id=' . $sp['id'] . '"><h3>' . $sp['name'] . '</h3> </a></div>';
                        }
                        ?>
                    </div>
                    <div class="item-first">
                        <?php
                        $query = "SELECT * FROM product WHERE id=5";
                        $allsp = $conn->query($query);
                        foreach ($allsp as $sp) {
                            echo '
                            <div class="image-game-3">
                            <img style="width:100%; height:150px"  src="' . $sp['image'] . '" alt="">
                            </div>
                                <div class="text-game-3"><a href="viewsproducts.php?id=' . $sp['id'] . '"><h3>' . $sp['name'] . '</h3> </a></div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="item-first-2">
                    <video controls autoplay>
                        <source src="index_image/starwar.mp4">
                    </video>
                    <?php
                    $query = "SELECT * FROM product WHERE id=6";
                    $allsp = $conn->query($query);
                    foreach ($allsp as $sp) {
                        echo '
                           <div class="text-game-4"><a class="text-4" href="viewsproducts.php?id=' . $sp['id'] . '"><h3>' . $sp['name'] . '</h3> </a></div>';
                    }
                    ?>

                </div>
            </div>
            <div class="second-container">
                <div class="category-1">
                    <i class="fa fa-caret-right">
                        Game Hot
                    </i>
                </div>
                <div class="second-product">
                    <div class="product-1">
                        <?php
                        $query = "SELECT * FROM product WHERE id=7";
                        $allsp = $conn->query($query);
                        foreach ($allsp as $sp) {
                            echo '<div class="image-game-5">
                            <img style="width:100%; height:510px"  src="' . $sp['image'] . '" alt="">
                            </div>
                            <div class="text-game-5">
                            <a  href="viewsproducts.php?id=' . $sp['id'] . '"><h3>' . $sp['name'] . '</h3> </a>
                            <span style="font-size:20px ;" class="text-products">GIÁ: ' . $sp['price'] . '$</span> <br>
                            <span class="text-products">HỖ TRỢ: PC/XBOXONE/PS4 </span><br>
                            <span class="text-products">THỂ LOẠI: FPS</span> <br>
                            <span class="text-products">NHÀ PHÁT HÀNH: UBISOFT</span>
                        </div>
                        <div class="notable-1"> <i style="font-size:30px;">9.1</i><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></div>
                                
                                <a href="viewsproducts.php?id=' . $sp['id'] . '"> <button type="submit" class="watch-dog" >BUY</button></a>
                       
                    </div>

                            ';
                        }
                        ?>


                        <div class="product-2">
                            <?php
                            $query = "SELECT * FROM product WHERE id=8";
                            $allsp = $conn->query($query);
                            foreach ($allsp as $sp) {
                                echo '<div class="image-game-6">
                                <img src="' . $sp['image'] . '" alt="" width="276px" height="400px">
                            </div>
                           <div class="text-game-6"><a href="viewsproducts.php?id=' . $sp['id'] . '"><h4>' . $sp['name'] . '</h4> </a></div>
                           <div class="notable">9.1<i class="fas fa-star"></i></div> 
                           <a href="viewsproducts.php?id=' . $sp['id'] . '"> <button type="submit" class="fra-cry" >BUY</button></a>';
                            }
                            ?>
                        </div>
                        <div class="product-2">
                            <?php
                            $query = "SELECT * FROM product WHERE id=9";
                            $allsp = $conn->query($query);
                            foreach ($allsp as $sp) {
                                echo '<div class="image-game-7">
                                <img src="' . $sp['image'] . '" alt="" width="276px" height="400px">
                            </div>
                           <div class="text-game-7"><a href="viewsproducts.php?id=' . $sp['id'] . '"><h4>' . $sp['name'] . '</h4> </a></div>
                           <div class="notable">8.1<i class="fas fa-star"></i></div> 
                           <a href="viewsproducts.php?id=' . $sp['id'] . '"> <button type="submit" class="assass" >BUY</button></a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

        </main>
    </div>
    <div class="image-footer">

    </div>
    <footer class="end">
        <div class="flex-display">
            <div class="server">
                <ul>
                    <li>
                        <a href="">Hot Line</a>
                    </li>
                    <li> <a href="">About Us</a> </li>
                </ul>
            </div>
            <div class="server">
                <ul>
                    <li><a href="">Feedback</a> </li>
                    <li><a href="">Commnent</a> </li>
                </ul>
            </div>
            <div class="server">
                <ul>
                    <li><a href="">Logo</a> </li>
                    <li><a href="">Country</a> </li>
                </ul>
            </div>
            <div class="logo-end">
                <img src="index_image/logo/logo.jpg" alt="" width="80px">
                <p>PHARAON GAME</p>
            </div>
        </div>
    </footer>
</body>

</html>