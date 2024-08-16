<?php
require './db/config.php';
?>
<?php
$id = $_SESSION['id'];
$sql = $conn->prepare("SELECT * FROM `Dealer_info` WHERE `id`='$id'");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
?>