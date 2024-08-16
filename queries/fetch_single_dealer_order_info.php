<?php
require './db/config.php';
?>
<?php
$id = $_GET['shippingid'];
$sql = $conn->prepare("SELECT * FROM dealer_order_detail inner join dealer_info on dealer_order_detail.dealer_id = dealer_info.id inner join shipping_address on dealer_order_detail.shipping_address_id = shipping_address.id where dealer_order_detail.id = $id");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
?>