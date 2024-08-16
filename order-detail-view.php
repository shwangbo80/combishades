<?php
session_start();
header('Cache-Control: no cache');
ini_set('display_errors', 1);
if (!isset($_SESSION['id']) || $_SESSION['id'] != $_GET['dealerid']) {
    header('location:error');
    session_cache_limiter('private_no_expire');
}
include ("./components/head.php");
include ("./queries/fetch_single_dealer_order_info.php");
include ('./queries/print_log.php');
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
        require "./components/dealer-navbar.php";
        ?>

        <div class="container my-5">
            <h2 class="fw-bold mb-4">
                Billing Information
            </h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">

                        <p class="col-2 form-text">Company:</p>
                        <p class="col-10 form-text"><?php echo $result['DealerName'] ?></p>
                        <p class="col-2 form-text">Contact:</p>
                        <p class="col-10 form-text"><?php echo $result['contact'] ?></p>
                        <p class="col-2 form-text">Street:</p>
                        <p class="col-10 form-text"><?php echo $result['street'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <p class="col-2 form-text">City:</p>
                        <p class="col-10 form-text"><?php echo $result['city'] ?>
                        </p>
                        <p class="col-2 form-text">State:</p>
                        <p class="col-10 form-text"><?php echo $result['state'] ?>
                        </p>
                        <p class="col-2 form-text">ZIP:</p>
                        <p class="col-10 form-text"><?php echo $result['zip'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <h2 class="fw-bold mt-5 mb-4">
                Shipping Information Information
            </h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <p class="col-2 form-text">Company:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_company"] ?></p>
                        <p class="col-2 form-text">Contact:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_contact_name"] ?></p>
                        <p class="col-2 form-text">Address:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_street"] ?></p>
                        <p class="col-2 form-text">Unit:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_apt_no"] ?></p>
                        <p class="col-2 form-text">City:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_city"] ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <p class="col-2 form-text">State:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_state"] ?></p>
                        <p class="col-2 form-text">Zip:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_zip"] ?></p>
                        <p class="col-2 form-text">Phone:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_phone"] ?></p>
                        <p class="col-2 form-text">Email:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_email"] ?></p>
                        <p class="col-2 form-text">Fax:</p>
                        <p class="col-10 form-text"><?php echo $result["shipping_fax"] ?></p>
                    </div>
                </div>
            </div>
            <h2 class="fw-bold mt-5 mb-4">
                Order Information
            </h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">PO Number</th>
                        <th scope="col">Line No</th>
                        <th scope="col">Room ID</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Cassette Type</th>
                        <th scope="col">Product Type</th>
                        <th scope="col">Control Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $result['line_no'] ?></th>
                        <td><?php echo $result['customer_po_no'] ?></td>
                        <td><?php echo $result['RoomID'] ?></td>
                        <td><?php echo $result['qty'] ?></td>
                        <td><?php echo $result['cassette_type'] ?></td>
                        <td><?php echo $result['product_type'] ?></td>
                        <td><?php echo $result['control_type'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Fabric Pattern</th>
                        <th scope="col">Fabric Color</th>
                        <th scope="col">Color No</th>
                        <th scope="col">Width</th>
                        <th scope="col">Height</th>
                        <th scope="col">Finished Width</th>
                        <th scope="col">Finished Height</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $result['fabric_pattern'] ?></th>
                        <td><?php echo $result['fabric_color'] ?></td>
                        <td><?php echo $result['color_no'] ?></td>
                        <td><?php echo $result['order_size_width'] ?></td>
                        <td><?php echo $result['order_size_height'] ?></td>
                        <td><?php echo $result['finished_size_width'] ?></td>
                        <td><?php echo $result['finished_size_height'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Mount Options</th>
                        <th scope="col">Control Options</th>
                        <th scope="col">Cord</th>
                        <th scope="col">Side By Side</th>
                        <th scope="col">Head Rail Color</th>
                        <th scope="col">Fabric Cover</th>
                        <th scope="col">Motor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $result['mount_options'] ?></th>
                        <td><?php echo $result['control_options'] ?></td>
                        <td><?php echo $result['cord'] ?></td>
                        <td><?php echo $result['side_by_side'] ?></td>
                        <td><?php echo $result['head_rail_color'] ?></td>
                        <td><?php echo $result['fab_cov'] ?></td>
                        <td><?php echo $result['motor_yes_no'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Motor Remote</th>
                        <th scope="col">Motor Channel</th>
                        <th scope="col">Cord</th>
                        <th scope="col">Side By Side</th>
                        <th scope="col">Head Rail Color</th>
                        <th scope="col">Fabric Cover</th>
                        <th scope="col">Motor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $result['mount_options'] ?></th>
                        <td><?php echo $result['control_options'] ?></td>
                        <td><?php echo $result['cord'] ?></td>
                        <td><?php echo $result['side_by_side'] ?></td>
                        <td><?php echo $result['head_rail_color'] ?></td>
                        <td><?php echo $result['fab_cov'] ?></td>
                        <td><?php echo $result['motor_yes_no'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Side Mark</th>
                        <th scope="col">Blind Type</th>
                        <th scope="col">Entered By</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Ordered Through</th>
                        <th scope="col">Est Ship Out Date</th>
                        <th scope="col">Ship Via</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $result['mount_options'] ?></th>
                        <td><?php echo $result['control_options'] ?></td>
                        <td><?php echo $result['cord'] ?></td>
                        <td><?php echo $result['side_by_side'] ?></td>
                        <td><?php echo $result['head_rail_color'] ?></td>
                        <td><?php echo $result['fab_cov'] ?></td>
                        <td><?php echo $result['motor_yes_no'] ?></td>
                    </tr>
                </tbody>
            </table>
            <p class="fw-bold">Special Instructions</p>
            <p><?php echo $result['special_instruction'] ?></p>
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