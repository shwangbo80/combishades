<?php
// if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
//     header('HTTP/1.0 403 Forbidden', TRUE, 403);
//     die(header('location: ./error.php'));
// }
session_start();
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
} else if (!isset($_SESSION['shipping_id'])) {
    header('location:order-info');
}

?>
<?php
include("./components/head.php");
require './db/config.php';
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
        <div class="container my-5">
            <div class="row mt-5">
                <h2 class="pb-3 fw-bold mb-3">Order Details 1</h2>
                <form class="row d-flex justify-content-between" action="./queries/order-details-1-controller.php"
                    method="POST">
                    <div class="col-md-6 pe-md-5">
                        <label for="inputState" class="form-label form-text">Customer PO NO</label>
                        <input type="text" class="form-control text-input" name="customer_po_no" required>
                    </div>
                    <div class="col-md-6 ps-md-5">
                        <label class="form-label form-text">
                            Date
                        </label>
                        <p class="form-text">
                            <?php
                            $date = date('Y-m-d');
                            echo $date;
                            ?>
                        </p>
                    </div>
                    <div class="col-md-6 pe-md-5">
                        <label class="form-label form-text">Side Mark</label>
                        <input type="text" class="form-control text-input" name="side_mark" required>
                    </div>
                    <div class="col-md-6 ps-md-5 mb-4">
                        <label class="form-label form-text">Blind Type</label>
                        <select name="blind_type" required>
                            <option>Combi Shade</option>
                            <option>Triple Shade</option>
                            <option>Roller Shade</option>
                            <option>Veilette</option>
                        </select>
                    </div>
                    <div class="col-md-6 pe-md-5">
                        <label class="form-label form-text">Entered By</label>
                        <input type="text" class="form-control text-input" name="entered_by" required>
                    </div>
                    <div class="col-md-6 ps-md-5 mb-4">
                        <label class="form-label form-text">Ship Via</label>
                        <select name="ship_via" required>
                            <option>Ground</option>
                            <option>Will Call</option>
                        </select>
                    </div>
                    <div class="my-5">
                        <button type="submit" class="btn btn-lg btn-primary">Next</button>
                    </div>
                </form>
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
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    };
</script>

</html>