<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>My web page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>


</head>

<body>
    <div class="container">

        <?php
        $DBH = new PDO('mysql:host=localhost;dbname=lab5', 'root', '');
        $query = "SELECT * FROM flights";
        $flights = $DBH->query($query);
        ?>

        <div class="row">
            <a class="btn btn-secondary m-3" href="createflight.php"><i class="fas fa-user-plus">Add new</i></a>
        </div>
        <div class="card">
            <div class="card-header">
                Danh sách chuyến bay
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã chuyến bay</th>
                            <th>Xuất phát</th>
                            <th>Điểm đến</th>
                            <th>Thời lượng</th>
                            <th>Tính Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($flights as $flight) {
                            echo '
              <tr>
              <td>' . $flight['id'] . '</td>
              <td>' . $flight['origin'] . '</td>
              <td>' . $flight['destination'] . '</td>
              <td>' . $flight['duration'] . '</td>
              <td>
                <a class="btn btn-outline-danger" href="idxoa.php?id=' . $flight['id'] . '" >
                  <i class="fas fa-trash-alt"></i>Delete
                </a>
                <a class="btn btn-outline-danger" href="idsua.php?id=' . $flight['id'] . '";>
                  <i class="fas fa-trash-alt"></i>Sửa
                </a>
                </td>
            </tr>';
                        }

                        ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>