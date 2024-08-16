<?php
session_start();
ini_set('display_errors', 1);
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
}
?>
<?php
include ("./components/head.php");
?>

<body>
    <?php
    require './db/config.php';
    ?>
    <?php
    $id = $_SESSION['id'];
    $sql = $conn->prepare("SELECT * FROM `Dealer_info` WHERE `id`='$id'");
    $sql->execute();
    $fetch = $sql->fetch();
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
            <h4 class="pb-3">Order Tracking</h4>
            <div class="border p-3">
                <div class="row my-2">
                    <div class="col-2 text-end">Order Date:</div>
                    <div class="col-8 d-flex">
                        <p class="small">From:</p>
                        <input type="date" id="birthday" name="birthday">
                        <p class="small ms-3">To:</p>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                    <div class="col-2"><button class="btn btn-primary">G0</button></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2 text-end">Order No:</div>
                    <div class="col-8 d-flex">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Order Number">
                        <div class="ms-3">Whole No. or Last 4 digit</div>
                    </div>
                    <div class="col-2"><button class="btn btn-primary">G0</button></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2 text-end">Side Mark:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Side Mark">
                    </div>
                    <div class="col-2"><button class="btn btn-primary">G0</button></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2 text-end">PO NO:</div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="Purchase Order Number">
                    </div>
                    <div class="col-2"><button class="btn btn-primary">G0</button></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2 text-end">Status</div>
                    <div class="col-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">New Order</option>
                            <option value="2">Manufacturing</option>
                            <option value="3">On Ocean</option>
                            <option value="3">Warehouse</option>
                            <option value="3">Bill</option>
                            <option value="3">Completed</option>
                        </select>
                    </div>
                    <div class="col-6">
                    </div>
                    <div class="col-2"><button class="btn btn-primary">G0</button></div>
                </div>
            </div>
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th scope="col">View</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">PO No.</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Material</th>
                        <th scope="col">Side Mark</th>
                        <th scope="col">Ship Via</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        require './queries/fetch_dealer_order_info.php';
                        ?>
                        <?php
                        foreach ($result as $row) {
                            ?>
                        <tr>
                            <td><a
                                    href="./order-detail-view?dealerid=<?php echo $row['dealer_id'] ?>&shippingid=<?php echo $row['id'] ?>">
                                    <i class="bi bi-archive text-primary"></i></a>
                            </td>
                            <td><?php echo $row['sales_order_no'] ?></td>
                            <td><?php echo $row['customer_po_no'] ?></td>
                            <td><?php echo $row['order_date'] ?></td>
                            <td><?php echo $row['side_by_side'] ?></td>
                            <td><?php echo $row['side_by_side'] ?></td>
                            <td><?php echo $row['side_by_side'] ?></td>
                            </td>
                            <td scope="row"><i class="bi bi-pencil"></i>
                            </td>
                            <td><i class="bi bi-calendar-x text-danger"></i>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
            <?php
            if (count($result) === 0) {
                ?>
                <p class="text-center my-5">No Orders</p>
                <?php
            }
            ?>
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