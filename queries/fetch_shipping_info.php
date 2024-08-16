<?php
require './db/config.php';
?>
<?php
$id = $_SESSION['id'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $conn->prepare("SELECT * FROM `shipping_address` WHERE `dealer_id`=$id ORDER BY `shipping_company`");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>