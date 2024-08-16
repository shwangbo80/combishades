<?php
session_start();
ini_set('display_errors', 1);
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
}
?>
<?php
require './db/config.php';
include ("./components/head.php");
?>

<body>
    <?php
    require './queries/fetch_dealer_info.php';
    ?>
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
            <h4 class="pb-3">Order List</h4>
            <div class="row">

                <div class="col-md-6">
                    <p>Customer PO No: <?php echo "{$_POST["customer_po_no"]}" ?></p>
                    <p>Side Mark: <?php echo "{$_POST["side_mark"]}" ?></p>
                    <p>Blind Type: <?php echo "{$_POST["blind_type"]}" ?></p>
                    <p>Entered By: <?php echo "{$_POST["entered_by"]}" ?></p>
                </div>
                <div class="col-md-6">
                    <p>Account Name: <?php echo "{$_POST["account_name"]}" ?></p>
                    <p>Ordered Through: <?php echo "{$_POST["ordered_through"]}" ?></p>
                    <p>Ship Via: <?php echo "{$_POST["ship_via"]}" ?></p>
                </div>

                <div class="col-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-start border border-1 border-dark">Customer ID</td>
                                <td class="text-start border border-1 border-dark">ABB02</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-start border border-1 border-dark">Side Mark</td>
                                <td class="text-start border border-1 border-dark">test</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-start border border-1 border-dark">Types</td>
                                <td class="text-start border border-1 border-dark">Shutters</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-start border border-1 border-dark">IsInstall</td>
                                <td class="text-start border border-1 border-dark"></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-start border border-1 border-dark">InstallRate</td>
                                <td class="text-start border border-1 border-dark">3.00</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="text-start border border-1 border-dark">OrderDate</td>
                                <td class="text-start border border-1 border-dark">3/21/2024 2:44:58 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="mt-5">
            <div class="container-fluid mx-0 px-0">
                <div class="container my-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Edit</th>
                                <th scope="col">Del</th>
                                <th scope="col">#</th>
                                <th scope="col">Room</th>
                                <th scope="col">Material</th>
                                <th scope="col">Shape</th>
                                <th scope="col">Width</th>
                                <th scope="col">Height</th>
                                <th scope="col">Frame</th>
                                <th scope="col">Sides</th>
                                <th scope="col">Louver</th>
                                <th scope="col">Color</th>
                                <th scope="col">Config</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Area</th>
                                <th scope="col">Line Price</th>
                                <th scope="col">Srcharge</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><i class="bi bi-pencil"></i>
                                </th>
                                <td><i class="bi bi-calendar-x text-danger"></i>
                                </td>
                                <td>1</td>
                                <td>Bassia</td>
                                <td></td>
                                <td>Regular</td>
                                <td>10</td>
                                <td>10</td>
                                <td>Decor 2</td>
                                <td>4</td>
                                <td>3 1/2</td>
                                <td>101_White</td>
                                <td>LR</td>
                                <td>1</td>
                                <td>1.668</td>
                                <td>19.933</td>
                                <td>0.000</td>

                            </tr>
                            <tr>
                                <th scope="row">
                                </th>
                                <td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1.668</td>
                                <td>19.933</td>
                                <td>0.000</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="my-5">
                        <a href="./order-details.php">
                            <button type="button" class="btn btn-primary">Add New Item</button>
                        </a>
                    </div>
                    <div class="my-5 ms-4">
                        <a href="./order-print.php">
                            <button type="button" class="btn bg-success btn-dark">Print Detail</button>
                        </a>
                    </div>
                    <div class="my-5 ms-4">
                        <a href="./order-details.php">
                            <button type="button" class="btn btn-danger">Check Out</button>
                        </a>
                    </div>
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