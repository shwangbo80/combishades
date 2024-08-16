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
$date = date('Y-m-d');

$customer_po_no = $_POST["customer_po_no"];
$side_mark = $_POST["side_mark"];
$blind_type = $_POST["blind_type"];
$entered_by = $_POST["entered_by"];
$account_name = $_POST["account_name"];
$ordered_through = $_POST["ordered_through"];
$ship_via = $_POST["ship_via"];
$line_no = $_POST["line_no"];
$roomID = $_POST["roomID"];
$qty = $_POST["qty"];
$cassette_type = $_POST["cassette_type"];
$product_type = $_POST["product_type"];
$control_type = $_POST["control_type"];
$fabric_pattern = $_POST["fabric_pattern"];
$fabric_color = $_POST["fabric_color"];
$color_no = $_POST["color_no"];
$order_size_width = $_POST["order_size_width"];
$order_size_height = $_POST["order_size_height"];
$finished_size_width = $_POST["finished_size_width"];
$finished_size_height = $_POST["finished_size_height"];
$mount_options = $_POST["mount_options"];
$control_options = $_POST["control_options"];
$cord = $_POST["cord"];
$side_by_side = $_POST["side_by_side"];
$head_rail_color = $_POST["head_rail_color"];
$fab_cov = $_POST["fab_cov"];
$motor_yes_no = $_POST["motor_yes_no"];
$motor_remote = $_POST["motor_remote"];
$motor_channel = $_POST["motor_channel"];
$special_instruction = $_POST["special_instruction"];
$sales_order_no = "ABCD123";

$sql = $conn->prepare("INSERT INTO dealer_order_detail
    (
        customer_po_no,
        side_mark,
        blind_type,
        entered_by,
        account_name,
        ordered_thru,
        ship_via,
        line_no,
        roomID,
        qty,
        cassette_type,
        product_type,
        control_type,
        fabric_pattern,
        fabric_color,
        color_no,
        order_size_width,
        order_size_height,
        finished_size_width,
        finished_size_height,
        mount_options,
        control_options,
        cord,
        side_by_side,
        head_rail_color,
        fab_cov,
        motor_yes_no,
        motor_remote,
        motor_channel,
        special_instruction,
        dealer_id,
        shipping_address_id,
        order_date,
        est_ship_out_date,
        sales_order_no
    )
    values
    (   :customer_po_no,
        :side_mark,
        :blind_type,
        :entered_by,
        :account_name,
        :ordered_through,
        :ship_via,
        :line_no,
        :roomID,
        :qty,
        :cassette_type,
        :product_type,
        :control_type,
        :fabric_pattern,
        :fabric_color,
        :color_no,
        :order_size_width,
        :order_size_height,
        :finished_size_width,
        :finished_size_height,
        :mount_options,
        :control_options,
        :cord,
        :side_by_side,
        :head_rail_color,
        :fab_cov,
        :motor_yes_no,
        :motor_remote,
        :motor_channel,
        :special_instruction,
        :dealer_id,
        :shipping_address_id,
        :order_date,
        :est_ship_out_date,
        :sales_order_no
        )");

$sql->bindParam(':customer_po_no', $customer_po_no);
$sql->bindParam(':side_mark', $side_mark);
$sql->bindParam(':blind_type', $blind_type);
$sql->bindParam(':entered_by', $entered_by);
$sql->bindParam(':account_name', $account_name);
$sql->bindParam(':ordered_through', $ordered_through);
$sql->bindParam(':ship_via', $ship_via);
$sql->bindParam(':line_no', $line_no);
$sql->bindParam(':roomID', $roomID);
$sql->bindParam(':qty', $qty);
$sql->bindParam(':cassette_type', $cassette_type);
$sql->bindParam(':product_type', $product_type);
$sql->bindParam(':control_type', $control_type);
$sql->bindParam(':fabric_pattern', $fabric_pattern);
$sql->bindParam(':fabric_color', $fabric_color);
$sql->bindParam(':color_no', $color_no);
$sql->bindParam(':order_size_width', $order_size_width);
$sql->bindParam(':order_size_height', $order_size_height);
$sql->bindParam(':finished_size_width', $finished_size_width);
$sql->bindParam(':finished_size_height', $finished_size_height);
$sql->bindParam(':mount_options', $mount_options);
$sql->bindParam(':control_options', $control_options);
$sql->bindParam(':cord', $cord);
$sql->bindParam(':side_by_side', $side_by_side);
$sql->bindParam(':head_rail_color', $head_rail_color);
$sql->bindParam(':fab_cov', $fab_cov);
$sql->bindParam(':motor_yes_no', $motor_yes_no);
$sql->bindParam(':motor_remote', $motor_remote);
$sql->bindParam(':motor_channel', $motor_channel);
$sql->bindParam(':special_instruction', $special_instruction);
$sql->bindParam(':dealer_id', $_SESSION['id']);
$sql->bindParam(':shipping_address_id', $_SESSION['shipping_id']);
$sql->bindParam(':order_date', $date);
$sql->bindParam(':est_ship_out_date', $date);
$sql->bindParam(':sales_order_no', $sales_order_no);
$sql->execute();

header('location:../place-order');

// echo "<p>{$customer_po_no}</p>";
// echo "<p>{$side_mark}</p>";
// echo "<p>{$blind_type}</p>";
// echo "<p>{$entered_by}</p>";
// echo "<p>{$account_name}</p>";
// echo "<p>{$ordered_through}</p>";
// echo "<p>{$ship_via}</p>";
// echo "<p>{$line_no}</p>";
// echo "<p>{$roomID}</p>";
// echo "<p>{$qty}</p>";
// echo "<p>{$cassette_type}</p>";
// echo "<p>{$product_type}</p>";
// echo "<p>{$control_type}</p>";
// echo "<p>{$pattern}</p>";
// echo "<p>{$color}</p>";
// echo "<p>{$color_no}</p>";
// echo "<p>{$order_size_width}</p>";
// echo "<p>{$order_size_height}</p>";
// echo "<p>{$finished_size_width}</p>";
// echo "<p>{$finished_size_height}</p>";
// echo "<p>{$mount_options}</p>";
// echo "<p>{$control}</p>";
// echo "<p>{$cord}</p>";
// echo "<p>{$side_by_side}</p>";
// echo "<p>{$head_rail_color}</p>";
// echo "<p>{$fab_cov}</p>";
// echo "<p>{$motor_yes_no}</p>";
// echo "<p>{$motor_remote}</p>";
// echo "<p>{$motor_channel}</p>";
// echo "<p>{$special_instruction}</p>";
?>