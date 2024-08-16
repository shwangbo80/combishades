<?php
session_start();
header('Cache-Control: no cache');
ini_set('display_errors', 1);
echo $_SESSION["shipping_id"];
if (!isset($_SESSION['id']) || !isset($_SESSION["shipping_id"])) {
    header('location:dealer-login');
    session_cache_limiter('private_no_expire');
}
include ("./components/head.php");
include ("./queries/fetch_shipping_address.php");
?>

<body>
    <div class="container-fluid mx-0 px-0">
        <div class="my-3 d-flex align-items-center">
            <a class="navbar-brand" href="./">
                <img src="./img/logo_combishades.png" height="75">
            </a>
            <h4 class="ms-5">DEALER PAGE</h4>
        </div>
        <?php
        require "./components/dealer-navbar.php";
        ?>

        <div class="container my-5">
            <p class="fw-bold">
                Edit Address
            </p>
            <form action="<?php echo "./queries/update_address" ?>" method="POST" id="edit-form">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label text-secondary">Company Name</label>
                        <input type="text" class="form-control" aria-label="Company Name" name="company_name" value="<?php
                        echo $result["shipping_company"];
                        ?>" required>
                    </div>
                    <div></div>
                    <div class="col-md-6">
                        <label class="form-label text-secondary">Contact Name</label>
                        <input type="text" class="form-control" aria-label="Contact Name" name="company_contact" value="<?php
                        echo $result["shipping_contact_name"];
                        ?>" required>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label text-secondary">Address</label>
                                <input type="text" class="form-control" aria-label="Address" name="company_address"
                                    value="<?php
                                    echo $result["shipping_street"];
                                    ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label text-secondary">Unit</label>
                                <input type="text" class="form-control" aria-label="Unit" name="company_address_unit"
                                    value="<?php
                                    echo $result["shipping_apt_no"];
                                    ?>">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-secondary">City</label>
                                <input type="text" class="form-control" aria-label="City" name="company_address_city"
                                    value="<?php
                                    echo $result["shipping_city"];
                                    ?>" required>
                            </div>
                            <div class="col-lg-2">
                                <label class="form-label text-secondary">State</label>
                                <input type="text" class="form-control" aria-label="State" name="company_address_state"
                                    value="<?php
                                    echo $result["shipping_state"];
                                    ?>" required>
                            </div>
                            <div class="col-lg-2">
                                <label class="form-label text-secondary">Zip</label>
                                <input type="text" class="form-control" aria-label="Zip" name="company_address_zip"
                                    value="<?php
                                    echo $result["shipping_zip"];
                                    ?>" required>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="col-md-3">
                        <label class="form-label text-secondary">Phone</label>
                        <input type="tel" class="form-control" aria-label="Phone" name="company_phone" value="<?php
                        echo $result["shipping_phone"];
                        ?>" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label text-secondary">Fax</label>
                        <input type="tel" class="form-control" aria-label="Fax" name="company_fax" value="<?php
                        echo $result["shipping_fax"];
                        ?>" required>
                    </div>
                    <div></div>
                    <div class="col-md-6">
                        <label class="form-label text-secondary">Email</label>
                        <input type="email" class="form-control" aria-label="Email" name="company_email" value="<?php
                        echo $result["shipping_email"];
                        ?>" required>
                    </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-sm" type="submit" name="update">Update</button>
                    <button type="submit" class="btn btn-dark mx-2" type="submit" name="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    include ("./components/footer.php");
    ?>
</body>
<?php
include ("./components/script.php");
?>

</html>