<?php
session_start();
header('Cache-Control: no cache');
ini_set('display_errors', 1);
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
    session_cache_limiter('private_no_expire');
}
include ("./components/head.php");
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
        require "./components/dealer-navbar.php"
            ?>

        <div class="container my-5">
            <p class="fw-bold">
                Add New Address
            </p>
            <form action="./queries/post_new_address.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Company Name" aria-label="Company Name"
                            name="company_name" required>
                    </div>
                    <div></div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Contact Name" aria-label="Contact Name"
                            name="company_contact" required>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Address" aria-label="Address"
                                    name="company_address" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Unit" aria-label="Unit"
                                    name="company_address_unit">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="City" aria-label="City"
                                    name="company_address_city" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="State" aria-label="State"
                                    name="company_address_state" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Zip" aria-label="Zip"
                                    name="company_address_zip" required>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="col-md-3">
                        <input type="tel" class="form-control" placeholder="Phone" aria-label="Phone"
                            name="company_phone" required>
                    </div>

                    <div class="col-md-3">
                        <input type="tel" class="form-control" placeholder="Fax" aria-label="Fax" name="company_fax"
                            required>
                    </div>
                    <div></div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                            name="company_email" required>
                    </div>
                </div>
                <button type="submit" class=" btn btn-primary">Submit</button>
            </form>
            <hr class="mt-5">
            <hr class="mt-5">
            <div class="d-flex justify-content-center my-5">
            </div>
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