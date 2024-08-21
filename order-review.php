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
            <h2 class="fw-bold mt-5 mb-0">
                Order Review
            </h2>
            <p class="my-3">Please carefully review the order before submitting.</p>
            <div class="row mb-5">
                <div class="col-md-6">
                    <p class="fw-bold">Dealer Information</p>
                    <p><?php echo $_SESSION["dealerInfo"]["DealerName"] ?></p>
                    <p>Contact: <?php echo $_SESSION["dealerInfo"]["contact"] ?></p>
                    <p><?php echo $_SESSION["dealerInfo"]["street"] ?></p>
                    <p><?php echo $_SESSION["dealerInfo"]["city"] ?>, <?php echo $_SESSION["dealerInfo"]["state"] ?></p>
                    <p><?php echo $_SESSION["dealerInfo"]["zip"] ?></p>
                    <p>Tel: <?php echo $_SESSION["dealerInfo"]["phone"] ?></p>
                    <p>Fax: <?php echo $_SESSION["dealerInfo"]["fax"] ?></p>
                </div>
                <div class="col-md-6">
                    <p class="fw-bold">Shipping Information</p>
                    <p><?php echo $_SESSION["shipping_company"] ?></p>
                    <p><?php echo $_SESSION["shipping_contact_name"] ?></p>
                    <p><?php echo $_SESSION["shipping_street"] ?></p>
                    <p><?php echo $_SESSION["shipping_apt_no"] ?></p>
                    <p><?php echo $_SESSION["shipping_city"] ?>, <?php echo $_SESSION["shipping_state"] ?></p>
                    <p><?php echo $_SESSION["shipping_phone"] ?></p>
                    <p><?php echo $_SESSION["shipping_fax"] ?></p>
                </div>
            </div>
            <div class="row border p-5">
                <div>
                    <p class="fw-bold">Order Information</p>
                    <p><?php echo $_SESSION["sales_order_no"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["customer_po_no"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["side_mark"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["blind_type"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["entered_by"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["ship_via"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["line_no"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["room_id"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["qty"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["cassette_type"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["control_type"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["motor_yes_no"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["motor_remote"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["motor_channel"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["fabric_pattern"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["fabric_color"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["order_size_width"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["order_size_height"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["finished_size_width"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["finished_size_height"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["mount_options"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["control_options"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["cord"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["side_by_side"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["head_rail_color"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["fabric_cover"] ?></p>
                    <hr class="my-3 text-secondary" />
                    <p><?php echo $_SESSION["special_instruction"] ?></p>
                </div>
            </div>
            <?php
            // echo '<pre>';
            // var_dump($_SESSION);
            // echo '</pre>';
            ?>
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