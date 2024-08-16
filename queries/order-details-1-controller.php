<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: ./error.php'));
}
session_start();
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
} else if (!isset($_SESSION['shipping_id'])) {
    header('location:order-info');
}

include("../components/head.php");
$id = $_SESSION['id'];
$shipping_id = $_SESSION["shipping_id"];
$date = date('Y-m-d');

$_SESSION["sales_order_no"] = "ABCD123";
$_SESSION["customer_po_no"] = $_POST["customer_po_no"];
$_SESSION["side_mark"] = $_POST["side_mark"];
$_SESSION["blind_type"] = $_POST["blind_type"];
$_SESSION["entered_by"] = $_POST["entered_by"];
$_SESSION["ship_via"] = $_POST["ship_via"];



header('location:../order-details-2.php');
