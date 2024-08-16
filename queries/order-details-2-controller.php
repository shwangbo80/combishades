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

$id = $_SESSION['id'];
$shipping_id = $_SESSION["shipping_id"];
$date = date('Y-m-d');

$_SESSION["line_no"] = $_POST["line_no"];
$_SESSION["room_id"] = $_POST["room_id"];
$_SESSION["qty"] = $_POST["qty"];
$_SESSION["cassette_type"] = $_POST["cassette_type"];
$_SESSION["control_type"] = $_POST["control_type"];
$_SESSION["motor_yes_no"] = $_POST["motor_yes_no"];
$_SESSION["motor_remote"] = $_POST["motor_remote"];
$_SESSION["motor_channel"] = $_POST["motor_channel"];
$_SESSION["fabric_pattern"] = $_POST["fabric_pattern"];


header('location:../order-details-3.php');