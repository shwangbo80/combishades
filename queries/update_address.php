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
require '../components/head.php';

$id = $_SESSION['id'];
$shipping_id = $_SESSION["shipping_id"];

if (isset($_POST["update"])) {
    try {
        $sql = $conn->prepare("UPDATE shipping_address SET
        shipping_company = :company_name,
        shipping_contact_name = :company_contact,
        shipping_street = :company_address,
        shipping_apt_no = :company_address_unit,
        shipping_city = :company_address_city,
        shipping_state = :company_address_state,
        shipping_zip = :company_address_zip,
        shipping_phone = :company_phone,
        shipping_fax = :company_fax,
        shipping_email = :company_email,
        dealer_id = :dealer_id
        WHERE id = $shipping_id");

        $sql->bindParam(':company_name', $_POST['company_name']);
        $sql->bindParam(':company_contact', $_POST['company_contact']);
        $sql->bindParam(':company_address', $_POST['company_address']);
        $sql->bindParam(':company_address_unit', $_POST['company_address_unit']);
        $sql->bindParam(':company_address_city', $_POST['company_address_city']);
        $sql->bindParam(':company_address_state', $_POST['company_address_state']);
        $sql->bindParam(':company_address_zip', $_POST['company_address_zip']);
        $sql->bindParam(':company_phone', $_POST['company_phone']);
        $sql->bindParam(':company_fax', $_POST['company_fax']);
        $sql->bindParam(':company_email', $_POST['company_email']);
        $sql->bindParam(':dealer_id', $_SESSION['id']);
        $sql->execute();
    } catch (PDOException $ex) {
        header("Location: ../error.php");
    }
    header('location:../order-info');
} else if (isset($_POST["delete"])) {
    $id = $_SESSION['id'];
    $shipping_id = $_SESSION["shipping_id"];
    ?>
        <div class='container'>
            <div class='d-flex justify-content-center align-items-center' style='height: 100vh'>
                <div>
                    <p>Are you sure you want to delete this address record?</p>
                    <div class='d-flex justify-content-center'>
                        <form action='./delete_address.php' method='POST'>
                            <button type='submit' class='btn btn-primary px-5'>Yes</button>
                        </form>
                        <a href='../edit-address'><button class='btn btn-dark px-5 ms-3'>No</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php
}
?>