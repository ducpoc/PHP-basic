<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <style>
    header {
        display: flex;
        background-color: #4d5767;
        height: 90px;
        width: 100%;
    }

    .image-logo {

        margin-top: 5px;
        margin-left: 9%;
    }

    #menu ul {
        list-style-type: none;
        text-align: center;
    }

    #menu li {
        display: inline-block;
        padding: 10px;
        margin-top: 14px;
    }

    #menu li a {
        text-decoration: none;
        color: #ffffff;
    }

    .box {
        margin-top: 38px;
        margin-left: 16%;
    }

    .toolbar-menu {
        margin-left: 13%;
    }

    .admin {
        margin-left: 12%;
        margin-top: 39px;
    }
    </style>
</head>
<header>
    <header>
        <div class="image-logo">
            <a href="index.php"><img src="index_image/logo/logo.jpg" alt="" width="80px"></a>
        </div>
        <div class="toolbar-menu">
            <nav id="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="viewsproducts.php">STORE</a></li>
                    <li><a href="#">MORE GAME</a></li>
                    <li><a href="#">SUPPORT</a></li>
                </ul>
            </nav>
        </div>
        <div class="box">
            <div class="container-1">
                <input type="search" id="search" placeholder="Search..." />
                <input type="button" value="seach">

            </div>
        </div>
        <div class="admin">
            <a href="./admin/index.php" class="admin-icon">
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </div>
    </header>
</header>