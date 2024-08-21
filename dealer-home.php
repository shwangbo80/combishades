<?php
session_start();
ini_set('display_errors', 1);
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
}
?>
<?php
include("./components/head.php");
?>

<body>
    <?php
    require './queries/fetch_dealer_info.php';
    ?>
    <div class="container-fluid mx-0 px-0">
        <div class="container my-3 d-flex align-items-center">
            <a class="navbar-brand" href="./">
                <img src="./img/logo_combishades.png" height="75">
            </a>
            <h4 class="ms-5">DEALER PAGE</h4>
        </div>
        <?php
        require "./components/dealer-navbar.php"
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 my-5">
                    <div class="row">
                        <div class="mb-5">
                            <h1 class="fw-light">WELCOME <strong><?php echo $result['DealerName'] ?>!</strong></h1>
                        </div>
                        <div class="mb-5 border px-4 pt-3 pb-1">
                            <p class="fw-bold">Dealer Information</p>
                            <p>Email: <?php echo $result['DealerEmail'] ?></p>
                        </div>
                        <div>
                            <a class="text-light-blue" href="./reference_guide">
                                <p class="url_link">ABBA Reference Guide</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php
    include("./components/footer.php");
    ?>
</body>
<?php
include("./components/script.php");
?>

</html>