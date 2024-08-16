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

$_SESSION["fabric_color"] = $_POST["fabric_color"];
$_SESSION["order_size_width"] = $_POST["order_size_width"];
$_SESSION["order_size_height"] = $_POST["order_size_height"];
$_SESSION["finished_size_width"] = $_POST["finished_size_width"];
$_SESSION["finished_size_height"] = $_POST["finished_size_height"];
$_SESSION["mount_options"] = $_POST["mount_options"];
$_SESSION["control_options"] = $_POST["control_options"];
$_SESSION["cord"] = $_POST["cord"];
$_SESSION["side_by_side"] = $_POST["side_by_side"];
$_SESSION["head_rail_color"] = $_POST["head_rail_color"];
$_SESSION["fabric_cover"] = $_POST["fabric_cover"];
$_SESSION["special_instruction"] = $_POST["special_instruction"];


header('location:../order-review.php');