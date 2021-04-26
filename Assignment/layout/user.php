<?php {
    include 'connet.php';
    function getPDO()
    {
        $PDO = new PDO("mysql:host=localhost;dbname=assignment", "root", "");
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;
    }
    function checkLogin($user, $pass)
    {
        $DBH = getPDO();
        $query = "SELECT id, name, email FROM admin where email='$user' and password='$pass' ";
        $allsp = $DBH->query($query);
        if ($allsp->rowCount() > 0) {
            return true;
        }
        return false;
    }
}