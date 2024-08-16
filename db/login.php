<?php
session_start();
session_destroy();
require_once 'config.php';
if (isset($_POST['login'])) {
    if ($_POST['email'] != "" || $_POST['password'] != "") {
        $DealerEmail = $_POST['email'];
        $DealerPW = $_POST['password'];
        $sql = "SELECT * FROM `Dealer_info` WHERE `DealerEmail`=? AND `DealerPW`=?";
        $query = $conn->prepare($sql);
        $query->execute(array($DealerEmail, $DealerPW));
        $row = $query->rowCount();
        $fetch = $query->fetch(PDO::FETCH_ASSOC);
        if ($row > 0) {
            session_start();
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['dealerInfo'] = $fetch;
            header("location: ../dealer-home");
        } else {
            echo "
        		<script>alert('Invalid username or password')</script>
        		<script>window.location = '../dealer-login'</script>
        		";
        }
    } else {
        echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = '../dealer-login'</script>
			";
    }
}
