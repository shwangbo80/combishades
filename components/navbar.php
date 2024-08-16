<?php
require "./components/navbar-active.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="./">
            <img src="./img/logo_combishades.png" height="75">
        </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ms-md-3 ms-sm-0">
                    <a class="nav-link
                    <?php
                    checkActive("/");
                    ?>
                    " href="./">Home</a>
                </li>
                <li class="nav-item ms-md-3 ms-sm-0">
                    <a class="nav-link
                    <?php
                    checkActive("/about");
                    ?>
                    " href="./about">About</a>
                </li>
                <li class="nav-item ms-md-3 ms-sm-0">
                    <a class="nav-link
                    <?php
                    checkActive("/products");
                    ?>
                    " href="./products">Products</a>
                </li>
                <li class="nav-item ms-md-3 ms-sm-0">
                    <a class="nav-link
                    <?php
                    checkActive("/how-to-buy");
                    ?>
                    " href="./how-to-buy">How to Buy</a>
                </li>
                <li class="nav-item ms-md-3 ms-sm-0">
                    <a class="nav-link
                    <?php
                    checkActive("/contact");
                    ?>
                    " href="./contact">Contact</a>
                </li>
                <li class="nav-item ms-md-3 ms-sm-0">
                    <a class="nav-link
                    
                    <?php
                    checkActive("/dealer-login");
                    ?>
                    " href="./dealer-home">Dealer Page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
echo $_SERVER['REQUEST_URI'] == "/";
?>