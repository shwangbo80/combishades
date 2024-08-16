<?php
session_start();
if (isset($_SESSION['id'])) {
    header('location:dealer-home');
}
?>
<?php
include ("./components/head.php");
?>

<body>
    <?php
    include ("./components/navbar.php");
    ?>
    <div>
        <div class="form-box my-5 border">
            <form class="p-5" action="./db/login.php" method="POST">
                <h4 class="fw-bold mb-2 text-center text-olive">Combi Shades<sup class="me-2">&reg;</sup></h4>
                <div class="">
                    <p class="mb-4 text-center">Dealer Login</p>
                    <div class="mt-2 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dealer Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        <button class="btn btn-primary" name="login">Login</button>
                        <div class="mt-3">
                            <small>To gain access to Dealer Page, please contact Combi Shades<sup
                                    class="me-2">&reg;</sup>and
                                register.</small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    include ("./components/footer.php");
    ?>
</body>
<?php
include ("./components/script.php");
?>

</html>