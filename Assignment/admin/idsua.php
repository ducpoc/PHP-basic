<?php
$DBH = new PDO('mysql:host=localhost;dbname=assignment', 'root', '');
if (isset($_GET['idsua'])) {
    $id = $_GET['idsua'];
    $sql = "SELECT * FROM product where id='$id'";
    $result = $DBH->query($sql);
    $sua = $result->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['btnLuu'])) {
    $Name = $_POST['name'];
    $img = $_POST['img'];

    $DBH = new PDO('mysql:host=localhost;dbname=assignment', 'root', '');
    $query = "UPDATE product SET name = '$Name',image ='$img' WHERE id = '$id'";
    $result = $DBH->exec($query);
    if ($result) {
        header("Refresh:0; url=products.php");
        echo '<script> alert("Update successfully!"); </script>';
    } else
        echo '<script> alert("Update fail!"); </script>';
}
?>

<form method="post" action="">
    <input type="hidden" name="Name" value="<?Php if (isset($_GET['id'])) echo $sua['id']   ?>">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name"
            value=" <?Php if (isset($_GET['idsua'])) echo $sua['name']; ?>">
    </div>
    <div class="form-group">
        <label>Ảnh</label>
        <input type="file" class="form-control" name="img"
            value=" <?Php if (isset($_GET['isua'])) echo $sua['image']; ?>">

    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>

    </div>
</form>
</div>