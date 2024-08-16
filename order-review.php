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
            <h2 class="fw-bold mt-5">
                Order Review
            </h2>
            <p>Please carefully review the order before submitting.</p>
            <p class="fw-bold">Dealer Information</p>
            <div class="row">
                <div class="col-md-6">
                    <p>Dealer Name</p>
                </div>
                <div class="col-md-6">
                    <p>Delaer Email</p>
                </div>
                <div class="col-md-3">
                    <p>Street</p>
                </div>
                <div class="col-md-3">
                    <p>City</p>
                </div>
                <div class="col-md-3">
                    <p>State</p>
                </div>
                <div class="col-md-3">
                    <p>Zip</p>
                </div>
                <div class="col-md-3">
                    <p>Phone</p>
                </div>
                <div class="col-md-3">
                    <p>Contact</p>
                </div>
            </div>
            <p class="fw-bold">Shipping Information</p>
            <p class="fw-bold">Order Information</p>
        </div>

        <?php
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
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

    // const controlOption = document.getElementById("control-option");
    // const motorizedControl = document.getElementsByClassName("motorized-control");
    // const motorizedForm = document.getElementsByClassName("motorized-form");


    // function get_fabric_pattern() {
    //     d = document.getElementById("fabric_pattern").value;
    //     console.log(d);
    // }

    // const hideMotorizedForm = () => {
    //     for (let i = 0; i < motorizedForm.length; i++) {
    //         motorizedForm[i].style.display = "none";
    //     }
    // }
    // const showMotorizedForm = () => {
    //     for (let i = 0; i < motorizedForm.length; i++) {
    //         motorizedForm[i].style.display = "block";
    //     }
    // }

    // const enableMotorizedForm = () => {
    //     for (let i = 0; i < motorizedControl.length; i++) {
    //         motorizedControl[i].disabled = false;
    //         motorizedControl[i].style.opacity = 1;
    //         showMotorizedForm();
    //     }
    // }
    // const disalbleMotorizedForm = () => {
    //     for (let i = 0; i < motorizedControl.length; i++) {
    //         motorizedControl[i].disabled = true;
    //         motorizedControl[i].style.opacity = 0.5;
    //         hideMotorizedForm();
    //     }
    // }
    // disalbleMotorizedForm()
    // controlOption.addEventListener("change", (e) => {
    //     if (controlOption.value === "cordless") {
    //         disalbleMotorizedForm();
    //     }
    //     if (controlOption.value === "motorized") {
    //         enableMotorizedForm();
    //     }
    // })
</script>

</html>