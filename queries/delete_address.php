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
require '../db/config.php';
$id = $_SESSION['id'];
$shipping_id = $_SESSION["shipping_id"];
try {
    $sql = $conn->prepare("DELETE FROM shipping_address WHERE id = $shipping_id");
    $sql->execute();
} catch (PDOException $ex) {
    header("Location: ../error.php");
}

header('location:../order-info');
?>