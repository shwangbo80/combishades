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
            <h2 class="fw-bold pb-3">Order List</h2>
            <table class="table table-striped">
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
            <div class="d-flex justify-content-center">
                <a href="./order-info">
                    <button type="button" class="btn btn-primary">Add New Order</button>
                </a>
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