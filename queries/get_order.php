<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: ../error.php'));
}
session_start();
ini_set('display_errors', 1);
if (!isset($_SESSION['id']) || !isset($_SESSION["shipping_id"])) {
    header('location:dealer-login');
}
?>

<?php
include ("../components/head.php");
require '../db/config.php';
$id = $_SESSION['id'];
$shipping_id = $_SESSION["shipping_id"];

$customer_po_no = $_POST["customer_po_no"];
$side_mark = $_POST["side_mark"];
$blind_type = $_POST["blind_type"];
$entered_by = $_POST["entered_by"];
$account_name = $_POST["account_name"];
$ordered_through = $_POST["ordered_through"];
$ship_via = $_POST["ship_via"];

echo "<p>{$_POST["customer_po_no"]}</p>";
echo "<p>{$_POST["side_mark"]}</p>";
echo "<p>{$_POST["blind_type"]}</p>";
echo "<p>{$_POST["entered_by"]}</p>";
echo "<p>{$_POST["account_name"]}</p>";
echo "<p>{$_POST["ordered_through"]}</p>";
echo "<p>{$_POST["ship_via"]}</p>";
?>