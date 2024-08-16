<?php
require './db/config.php';
?>
<?php
$id = $_SESSION['id'];
$sql = $conn->prepare("SELECT * FROM dealer_order_detail where dealer_id = {$id}  ORDER BY id DESC");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>