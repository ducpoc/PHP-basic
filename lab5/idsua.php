<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>idsua </title>
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


    <?php
    $DBH = new PDO('mysql:host=localhost;dbname=lab5', 'root', '');
    if (isset($_GET['id'])) {
        $id = $_GET['id']; //lay ma chuyen bay duoc sua
        $sql = "select * from flights where id='$id'";
        $result = $DBH->query($sql);
        $flight = $result->fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <?php
    if (isset($_POST['btnLuu'])) {

        //lay duu lieu tu form
        $origin = $_POST['origin'];
        $des = $_POST['destination'];
        $dur = $_POST['duration'];
        $DBH = new PDO('mysql:host=localhost;dbname=lab5', 'root', '');
        $sql = "update flights set origin = '$origin',destination ='$des',duration='$dur' where id='$id'
        ";
        $result = $DBH->exec($sql);
    }
    ?>
    <form method="post" action="">
        <input type="hidden" name="flightId" value="<?Php if (isset($_GET['id'])) echo $flight['id']   ?>">
        <div class="form-group">
            <label>Origin</label>
            <input type="text" class="form-control" name="origin"
                value=" <?Php if (isset($_GET['id'])) echo $flight['origin']; ?>">
        </div>
        <div class="form-group">
            <label>Destination</label>
            <input type="text" class="form-control" name="destination"
                value=" <?Php if (isset($_GET['id'])) echo $flight['destination']; ?>">
        </div>
        <div class="form-group">
            <label>Duration</label>
            <input type="text" class="form-control" name="duration"
                value=" <?Php if (isset($_GET['id'])) echo $flight['duration']; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>

        </div>

    </form>
</body>

</html>