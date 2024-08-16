<?php
require './db/config.php';
?>
<?php
$id = $_SESSION["shipping_id"];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $conn->prepare("SELECT * FROM `shipping_address` WHERE `id`=$id");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
?>