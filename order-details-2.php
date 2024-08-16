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
                Order Details 2
            </h2>
            <form class="row d-flex justify-content-between" action="./queries/order-details-2-controller.php"
                method="POST">
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Line No</label>
                    <input type="text" class="form-control text-input" name="line_no" required>
                </div>
                <div class="col-md-6 ps-md-5">
                    <label class="form-label form-text">Room ID</label>
                    <input type="text" class="form-control text-input" name="room_id" required>
                </div>
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Qty</label>
                    <input type="text" class="form-control text-input" name="qty" required>
                </div>
                <div class="col-md-6 ps-md-5  mb-4">
                    <label class="form-label form-text">Cassette Type</label>
                    <select name="cassette_type" required>
                        <option>Square</option>
                        <option>Rounded</option>
                    </select>
                </div>
                <div class="col-md-6 pe-md-5  mb-4">
                    <label class="form-label form-text">Control Type</label>
                    <select id="control-option" name="control_type" required>
                        <option value="cordless">Cordless</option>
                        <option value="motorized">Motorized</option>
                    </select>
                </div>
                <!-- Render Only if motorized control is selected -->
                <div class="col-md-6 ps-md-5 mb-4 motorized-form">
                    <label class="form-label form-text">Motor</label>
                    <select class="motorized-control" name="motor_yes_no" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="col-md-6 pe-md-5 mb-4 motorized-form">
                    <label class="form-label form-text">Motor Remote</label>
                    <select class="motorized-control" name="motor_remote" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="col-md-6 ps-md-5 mb-4 motorized-form">
                    <label class="form-label form-text">Motor Channel</label>
                    <select class="motorized-control" name="motor_channel" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div></div>
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Pattern</label>
                    <select id="fabric_pattern" name="fabric_pattern">
                        <?php
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $conn->prepare("SELECT * FROM fabric_pattern");
                        $sql->execute();
                        $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
                        $result = $fetch;
                        foreach ($result as $k => $v) {
                            echo "<option value=\"{$v["fabric_name"]}\">
                                    {$v["fabric_name"]}
                                    </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="my-5">
                    <button type="submit" class="btn btn-lg btn-primary">Next</button>
                </div>
                <table>
                    <?php
                    if (empty($_POST['customer_po_no'])) {
                        echo "";
                    } else {
                        foreach ($_POST as $key => $value) {
                            echo "<tr>";
                            echo "<td>";
                            echo $key;
                            echo "</td>";
                            echo "<td>";
                            echo $value;
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </form>
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
const controlOption = document.getElementById("control-option");
const motorizedControl = document.getElementsByClassName("motorized-control");
const motorizedForm = document.getElementsByClassName("motorized-form");


function get_fabric_pattern() {
    d = document.getElementById("fabric_pattern").value;
    console.log(d);
}

const hideMotorizedForm = () => {
    for (let i = 0; i < motorizedForm.length; i++) {
        motorizedForm[i].style.display = "none";
    }
}
const showMotorizedForm = () => {
    for (let i = 0; i < motorizedForm.length; i++) {
        motorizedForm[i].style.display = "block";
    }
}

const enableMotorizedForm = () => {
    for (let i = 0; i < motorizedControl.length; i++) {
        motorizedControl[i].disabled = false;
        motorizedControl[i].style.opacity = 1;
        showMotorizedForm();
    }
}
const disalbleMotorizedForm = () => {
    for (let i = 0; i < motorizedControl.length; i++) {
        motorizedControl[i].disabled = true;
        motorizedControl[i].style.opacity = 0.5;
        hideMotorizedForm();
    }
}
disalbleMotorizedForm()
controlOption.addEventListener("change", (e) => {
    if (controlOption.value === "cordless") {
        disalbleMotorizedForm();
    }
    if (controlOption.value === "motorized") {
        enableMotorizedForm();
    }
})
</script>

</html>