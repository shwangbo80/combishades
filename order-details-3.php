<?php
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
                Order Details 3
            </h2>
            <form class="row d-flex justify-content-between" action="./queries/order-details-3-controller.php"
                method="POST">
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Fabric Color</label>
                    <select name="fabric_color">
                        <?php
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $conn->prepare("SELECT * FROM fabric_color where fabric_pattern_id = 1");
                        $sql->execute();
                        $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);
                        $result = $fetch;
                        foreach ($result as $k => $v) {
                            echo "<option value=\"{$v["color_name"]}\">
                                    {$v["color_name"]}
                                    </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6 ps-md-5">
                    <label class="form-label form-text">Width</label>
                    <input type="text" class="form-control text-input" name="order_size_width" required>
                </div>
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Height</label>
                    <input type="text" class="form-control text-input" name="order_size_height" required>
                </div>
                <div class="col-md-6 ps-md-5">
                    <label class="form-label form-text">Finished Width</label>
                    <input type="text" class="form-control text-input" name="finished_size_width" required>
                </div>
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Finished Height</label>
                    <input type="text" class="form-control text-input" name=" finished_size_height" required>
                </div>
                <div class="col-md-6 ps-md-5 mb-4">
                    <label class="form-label form-text">Mount Option</label>
                    <select name="mount_options" required>
                        <option>IM</option>
                        <option>OH</option>
                    </select>
                </div>
                <div class="col-md-6 pe-md-5 mb-4">
                    <label class="form-label form-text">Control</label>
                    <select name="control_options" required>
                        <option>R</option>
                        <option>L</option>
                    </select>
                </div>
                <div class="col-md-6 ps-md-5">
                    <label class="form-label form-text">Cord</label>
                    <input type="text" class="form-control text-input" name="cord" required>
                </div>
                <div class="col-md-6 pe-md-5">
                    <label class="form-label form-text">Side by Side</label>
                    <input type="text" class="form-control text-input" name="side_by_side" required>
                </div>
                <div class="col-md-6 ps-md-5">
                    <label class="form-label form-text">Head Rail Color</label>
                    <input type="text" class="form-control text-input" name="head_rail_color" required>
                </div>
                <div class="col-md-6 pe-md-5 mb-4">
                    <label class="form-label form-text">Fabric Cover</label>
                    <select name="fabric_cover" required>
                        <option>Yes (starndard)</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="col-md-12 mt-5">
                    <label class="form-label form-text">Special Instruction</label>
                    <textarea type="text" class="form-control text-input" name="special_instruction"></textarea>
                </div>
                <div class="my-5">
                    <button type="submit" class="btn btn-lg btn-primary">Next</button>
                </div>
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