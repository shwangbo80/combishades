<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:dealer-login');
}
include ("./components/head.php");
?>

<body>
    <div class="container text-center">
        <?php
        for ($x = 1; $x <= 48; $x++) {
            echo "<img class='img-fluid border my-3' src='./assets/ref_guide_images/reference_guide_2024_Page_$x.jpg' /><br />";
        }
        ?>
    </div>
</body>