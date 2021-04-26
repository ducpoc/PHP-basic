<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>add </title>
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
    <?php
    include 'layout/header.php';
    ?>

    <form method="post" action="">
        <div class="form-group">
            <label>Origin</label>
            <input type="text" class="form-control" name="origin">
        </div>
        <div class="form-group">
            <label>Destination</label>
            <input type="text" class="form-control" name="destination">
        </div>
        <div class="form-group">
            <label>Duration</label>
            <input type="text" class="form-control" name="duration">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>

        </div>
    </form>
    <?php
    if (isset($_POST['btnLuu'])) {

        //lay duu lieu tu from
        $origin = $_POST['origin'];
        $des = $_POST['destination'];
        $dur = $_POST['duration'];
        $DBH = new PDO('mysql:host=localhost;dbname=lab5', 'root', '');
        $sql = "insert into flights(origin,destination,duration)
        values('$origin','$des','$dur') ";
        $result = $DBH->exec($sql);
    }
    ?>
</body>

</html>