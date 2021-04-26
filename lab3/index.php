<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include('function.php') ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <section id="content" class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 class="text-center">Tin trong ngay</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>ID</td>
                            <td>Title</td>
                        </tr>
                        <?php getNewsInDay($mydb) ?>
                    </table>
                    <hr>
                    <h3 class="text-center">10 tin moi nhat</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>ID</td>
                            <td>Title</td>
                        </tr>
                        <?php getTenPostOfNews($mydb) ?>
                    </table>
                    <hr>
                    <h3 class="text-center">10 tin duoc xem nhieu nhat</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>ID</td>
                            <td>Title</td>
                        </tr>
                        <?php getTenPostNewOfNews($mydb) ?>
                    </table>
                    <hr>
                    <h3 class="text-center">Tieu de co chu a</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>ID</td>
                            <td>Title</td>
                        </tr>
                        <?php getTitleGotA($mydb) ?>
                    </table>
                    <h3 class="text-center">Lay tin co ket bang</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>ID</td>
                            <td>Title</td>
                            <td>Date</td>
                            <td>Name</td>
                        </tr>
                        <?php getInnerJoin($mydb) ?>
                    </table>

                    <h3 class="text-center">Lay tin ngau nhien</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>ID</td>
                            <td>Title</td>
                        </tr>
                        <?php getRanDom($mydb) ?>
                    </table>
                    <h3 class="text-center">thong ke tung user da dang nhap</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">

                            <td>IdUser</td>
                        </tr>
                        <?php getUser($mydb) ?>
                    </table>
                    <h3 class="text-center">Thống kê theo loại tổng số lần xem tin </h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">

                            <td>IdUser</td>
                            <td>tổng số lần xem</td>
                        </tr>
                        <?php getUser($mydb) ?>
                    </table>
                    <h3 class="text-center">: Hiện năm, tháng, Số đơn đặt hàng, Tổng số lượng, Tổng tiền. Chỉ chọn những
                        đơn hàng đã giao, sắp xếp theo Năm, Tháng giảm dần</h3>
                    <table class="table responsive-table border">
                        <tr style="font-weight: bold;">
                            <td>Year</td>
                            <td>Month</td>
                            <td>number news</td>
                        </tr>
                        <?php getAll($mydb) ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>