<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-1 Dev</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/623a25d945.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
 
    <header class="container">
        <div class="banner--index">
            <div class="text">
                <h1 class="tilte--index">
                    Online Shopping Mail
                </h1>
                <p>Hãy đến với chúng tôi và lấy đồ đi !!! Nhớ trả tiền => Thân !!!</p>
            </div>
            <div class="img">
                <img src="images/header-object.png" alt="">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-me">
            <a class="navbar-brand text--me" href="index.html">PHP-1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hỏi đáp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gợi ý</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <aside class="col-3">
                <div class="row cart--pro">
                    <div class="img-cart col-4">
                        <img src="images/shoppingcart.gif" alt="" srcset="">
                    </div>
                    <div class="col-8 list--cart">
                    
                        <p>Số lượng: <span>2</span></p>
                        <p>Tổng cộng: <span>$2000</span></p>
                        <a href="checkout.php" class="btn btn-success">Xem giỏ hàng</a>
                    </div>
                </div>

                <div class="row list--category">
                    <h3>
                        Chủng Loại
                    </h3>
                    <ul class="list-group">
                         <li class="list-group-item"><a href="index.php?cid=1">Ao Nu</a></li>
                    </ul>
                </div>
            </aside>
            <article class="col-9">
                <div class="row justify-content-center">
                    <div class="col-4 pros">
                        <div class="title mt-1">
                            <h3><a href="detail.php?pid=2">Ao so mi</a></h3>
                        </div>
                        <div class="img-pro">
                            <img src="images/4.jpg" alt="">
                        </div>
                        <div class="price">
                            <p>$ <span>200</span></p>
                        </div>
                    </div>

                    <div class="col-4 pros">
                        <div class="title mt-1">
                            <h3><a href="detail.php?pid=2">Ao so mi</a></h3>
                        </div>
                        <div class="img-pro">
                            <img src="images/4.jpg" alt="">
                        </div>
                        <div class="price">
                            <p>$ <span>200</span></p>
                        </div>
                    </div>
                    
                </div>
            </article>
        </div>
    </main>

    <!-- import library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
