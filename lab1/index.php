<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab 1</title>
</head>

<body>



    <h1>xếp loại kết quả tuyển sinh</h1>
    <form method="POST" action="#">
        <div class="form-group">
            <div class="title">
                Toan
            </div>
            <input type="number" name="toan" class="form-control">
        </div>
        <div class="form-group">
            <div class="title">
                Ly
            </div>
            <input type="number" name="ly" class="form-control">
        </div>

        <div class="form-group">
            <div class="title">
                Hoa
            </div>
            <input type="number" name="hoa" class="form-control">
        </div>
        <select name="khuVuc">
            <option value="" selected>--chon khu vuc--</option>
            <option value="1"> khu vuc 1</option>
            <option value="2"> khu vuc 2</option>
            <option value="3"> khu vuc 3</option>
            <option value="4"> khu vuc 4</option>
            <option value="5"> khu vuc 5</option>
        </select>


        <input type="submit" value="xếp loại" name="btnTinh">
    </form>
    <?php
    if (isset($_POST['btnTinh'])) {
        echo '<h4>ket qua</h4>';
        $toan = $_POST['toan'];
        $ly = $_POST['ly'];
        $hoa = $_POST['hoa'];
        $tongDiem = $toan + $ly + $hoa;
        if ($tongDiem >= 24) {
            echo '<h6>xep loai hoc sinh : gioi</h6>';
        } else if ($tongDiem  >= 21) {
            echo '<h6>xep loai hoc sinh : kha</h6>';
        } else if ($tongDiem >= 15) {
            echo '<h6>xep loai hoc sinh : trung binh</h6>';
        } else {
            echo '<h6>xep loai hoc sinh : yeu</h6>';
        }
    }
    $diemUutien = empty($_POST["khuVuc"]) ? 0 : $_POST["khuVuc"];
    switch ($diemUutien) {
        case 0:
        case 4:
        case 5:
            echo " diem uu tien : 0";
            break;
        case 1:
        case 2:
            echo " diem uu tien : 5";
            break;
        case 3:
            echo "diem uu tien : 3";
            break;
        default:
            break;
    }

    ?>
    <br>
    <?php
    $t = date("l");

    if ($t == "Monday") {
        $t = "Thứ hai";
    } else if ($t == "Tuesday") {
        $t = "Thứ Ba";
    } else if ($t = "Wednesday") {
        $t = "Thứ Tư";
    } else if ($t == "Friday") {
        $t = "Thứ Sáu";
    } else if ($t == "Thursday") {
        $t = "Thứ Năm";
    } else if ($t == "Saturday") {
        $t = "Thứ Bảy";
    } else {
        $t = "Chủ Nhật";
    }

    echo "Hôm nay là  " . $t . date(" d ") . date("m ") . date("   Y");
    ?>
    <br>

</body>

</html>