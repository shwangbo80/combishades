<?php
session_start();
if (!isset($_SESSION['id']) && $_SESSION['loggedInToCombishades'] = "true") {
    header('location:dealer-login');
}
include("./components/head.php");
?>

<body>
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
        <div class="container mt-5">
            <h2 class="fw-bold mb-3">
                Ship To
            </h2>
            <div class="row">
                <div class="col-10">
                    <p class="col-4 form-text">Ship To Name:</p>
                    <form method="POST" id="submit_order">
                        <div class="row">
                            <div class="col-8">
                                <select id="inputState" name="shipping_address">
                                    <option value="Select" selected="selected" disabled>Select Name</option>
                                    <?php
                                    require './queries/fetch_shipping_info.php';
                                    foreach ($result as $k => $v) {
                                        echo "<option value=\"{$v["shipping_company"]}\">
                                            {$v["shipping_company"]}
                                  </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary" type="submit" name="submit">Select
                                    Address
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <?php
                    if (!isset($_POST['submit'])) {
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $conn->prepare("SELECT * FROM shipping_address where dealer_id = {$_SESSION['id']}");
                        $sql->execute();
                        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
                        $result = $fetch;
                        if ($result) {
                            $_SESSION["shipping_id"] = $result["id"];
                        }
                    } else if (isset($_POST['submit'])) {
                        if (!empty($_POST['shipping_address'])) {
                            $selected = $_POST['shipping_address'];
                            $dealer_name = $selected;
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = $conn->prepare("SELECT * FROM `shipping_address` WHERE `shipping_company`='$dealer_name'");
                            $sql->execute();
                            $fetch = $sql->fetch(PDO::FETCH_ASSOC);
                            $result = $fetch;
                            if ($result) {
                                $_SESSION["shipping_id"] = $result["id"];
                            }
                        } else if (isset($_SESSION["shipping_id"])) {
                            unset($_SESSION["shipping_id"]);
                        }
                    }
                    ?>
                    <?php
                    if (!isset($_SESSION["shipping_id"])) {
                    ?>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <p>Plese select or add a new shipping address.</p>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="row">
                                    <p class="col-4 form-text">Company:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_company"];
                                        $_SESSION["shipping_company"] = $result["shipping_company"]; ?>
                                    </p>
                                    <p class="col-4 form-text">Contact:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_contact_name"];
                                        $_SESSION["shipping_contact_name"] = $result["shipping_contact_name"]; ?>
                                    </p>
                                    <p class="col-4 form-text">Address:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_street"];
                                        $_SESSION["shipping_street"] = $result["shipping_street"]; ?></p>
                                    <p class="col-4 form-text">Unit:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_apt_no"];
                                        $_SESSION["shipping_apt_no"] = $result["shipping_apt_no"]; ?>
                                    </p>
                                    <p class="col-4 form-text">City:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_city"];
                                        $_SESSION["shipping_city"] = $result["shipping_city"]; ?></p>
                                    <p class="col-4 form-text">State:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_state"];
                                        $_SESSION["shipping_state"] = $result["shipping_state"]; ?></p>
                                    <p class="col-4 form-text">Zip:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_zip"];
                                        $_SESSION["shipping_zip"] = $result["shipping_zip"]; ?></p>
                                    <p class="col-4 form-text">Phone:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_phone"];
                                        $_SESSION["shipping_phone"] = $result["shipping_phone"]; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <p class="col-4 form-text">Email:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_email"];
                                        $_SESSION["shipping_email"] = $result["shipping_email"]; ?>
                                    </p>
                                    <p class="col-4 form-text">Fax:</p>
                                    <p class="col-8 form-text">
                                        <?php echo $result["shipping_fax"];
                                        $_SESSION["shipping_fax"] = $result["shipping_fax"]; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="mt-3">
                    <?php
                    if (!isset($result['id'])) {
                        echo "";
                    } else {
                        echo "<a href=\"./edit-address\">
                            <button class=\"btn btn-primary\">Edit Address</button>
                        </a>";
                    }
                    ?>
                    <a href="./add-new-address">
                        <button class="btn btn-dark">Add New Address</button>
                    </a>
                </div>
                <hr class="mt-5">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="fw-bold mb-3">
            Bill To
        </h2>
        <div class="row">
            <div class="col-6">
                <?php
                require './queries/fetch_dealer_info.php';
                ?>
                <div class="row">
                    <p class="col-4 form-text">Company:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['DealerName'];
                        $_SESSION["DealerName"] = $result["DealerName"]; ?>
                    </p>

                    <p class="col-4 form-text">Contact:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['contact'];
                        $_SESSION["contact"] = $result["contact"]; ?>
                    </p>

                    <p class="col-4 form-text">Street:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['street'];
                        $_SESSION["street"] = $result["street"]; ?>
                    </p>

                    <p class="col-4 form-text">City:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['city'];
                        $_SESSION["city"] = $result["city"]; ?>
                    </p>

                    <p class="col-4 form-text">State:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['state'];
                        $_SESSION["state"] = $result["state"]; ?>
                    </p>

                    <p class="col-4 form-text">ZIP:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['zip'];
                        $_SESSION["zip"] = $result["zip"]; ?>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <p class="col-4 form-text">Tel:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['phone'];
                        $_SESSION["phone"] = $result["phone"]; ?>
                    </p>

                    <p class="col-4 form-text">Email:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['DealerEmail'];
                        $_SESSION["DealerEmail"] = $result["DealerEmail"]; ?>
                    </p>

                    <p class="col-4 form-text">Fax:</p>
                    <p class="col-8 form-text">
                        <?php echo $result['fax'];
                        $_SESSION["fax"] = $result["fax"]; ?>
                    </p>

                </div>
            </div>
        </div>
        <hr class="mt-5">
        <form action="./order-details-1.php" method="POST">
            <button class="btn btn-primary btn-lg my-5" type="submit" name="submit">
                Next
            </button>
        </form>
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
    }
</script>

</html>