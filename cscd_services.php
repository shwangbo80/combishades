<?php
include ("./components/head.php");
?>

<body>
    <div>
        <?php
        include ("./components/navbar.php");
        ?>
    </div>
    <div class="container mb-5">

        <div class="my-5">
            <h1>CSCD<sup class="me-2">&trade;</sup></h1>
            <hr>
        </div>
        <!-- <div class="pt-5">
            <div class="bg-light-gray">
                <h3 class="p-5">
                    <div class="fw-bold">Custom Size Cut to Demand</div><br>
                    We offer services tailored for fabricators seeking to enhance their range of
                    shades produced
                    “in-house”, with a focus on minimizing overhead costs, inventory management, and reducing the
                    stress and labor associated with production.
                </h3>
            </div>
        </div> -->
        <div class="row my-5">
            <!-- <div class="col-md-6">
                <img class="img-fluid child-safety-img  w-100" src="./img/child-safety.jpg" alt="">
            </div> -->
            <div class="col-md-10 d-flex align-items-center">
                <div>
                    <h2 class="mt-5 mt-md-0">Custom Size Cut to Demand
                    </h2>
                    <p> We offer services tailored for fabricators seeking to enhance their range of shades produced
                        “in-house”, with a focus on minimizing overhead costs, inventory management, and reducing the
                        stress and labor associated with production
                    </p>
                    <p>
                        To learn more about our exclusive CSCD<sup class="me-2">&trade;</sup>services, please complete
                        the form below and a
                        representative will reach out to you.
                    </p>
                    <p>To learn more, complete the form below and we'll reach out.</p>
                </div>
            </div>
            <div class="my-5">
                <form>
                    <div class="row">
                        <div class="col-md-5 bg-light p-5">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" aria-describedby="First name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">What type of blind/shade do you currently fabricate?</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 bg-light p-5">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Website</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">State</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Zip</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">What are your current sales of
                                    blinds
                                    and shades?</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-10 text-center mt-5">
                            <button type="submit" class="btn btn-primary btn-lg">Request Information</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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