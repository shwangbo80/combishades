<?php
session_start();
ini_set('display_errors', 1);
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
}
?>

<?php
require '../db/config.php';
$id = $_SESSION['id'];
$sql = $conn->prepare("INSERT INTO shipping_address
    (shipping_company,
    shipping_contact_name,
    shipping_street,
    shipping_apt_no,
    shipping_city,
    shipping_state,
    shipping_zip,
    shipping_phone,
    shipping_fax,
    shipping_email,
    dealer_id)
    values
    (:company_name,
    :company_contact,
    :company_address,
    :company_address_unit,
    :company_address_city,
    :company_address_state,
    :company_address_zip,
    :company_phone,
    :company_fax,
    :company_email,
    :dealer_id)");

$sql->bindParam(':company_name', $_POST["company_name"]);
$sql->bindParam(':company_contact', $_POST["company_contact"]);
$sql->bindParam(':company_address', $_POST["company_address"]);
$sql->bindParam(':company_address_unit', $_POST["company_address_unit"]);
$sql->bindParam(':company_address_city', $_POST["company_address_city"]);
$sql->bindParam(':company_address_state', $_POST["company_address_state"]);
$sql->bindParam(':company_address_zip', $_POST["company_address_zip"]);
$sql->bindParam(':company_phone', $_POST["company_phone"]);
$sql->bindParam(':company_fax', $_POST["company_fax"]);
$sql->bindParam(':company_email', $_POST["company_email"]);
$sql->bindParam(':dealer_id', $_SESSION['id']);
$sql->execute();
header('location:../order-info');
?>