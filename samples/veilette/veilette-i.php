<?php
include("../components/head.php");
?>

<body>
    <div>
        <?php
        include("../components/navbar.php");
        ?>
    </div>
    <div class="container my-5 pb-5">
        <div class="my-5">
            <h1> <?php require("../components/veilette-header.php") ?>
            </h1>
            <hr>
        </div>
        <div class="row pt-5">
            <div class="col-md-5">
                <div class="tab-content">
                    <div class="tab-pane fade show active etab-p1">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/veilette-i/ve-01-01-white.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p2">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/veilette-i/ve-02-04-ivory.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p3">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/veilette-i/ve-03-09-beige.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p4">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/veilette-i/ve-04-03-brown.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p5">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/veilette-i/ve-06-10-grey-(2).jpg" />
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 d-flex  flex-column align-items-start">
                <h1 class="pb-5 fw-bold">VEILETTE-I</h1>
                <div class="tab-content mt-auto">
                    <div class="tab-pane fade show active etabi-img1">
                        <p>VE-01-01-WHITE</p>
                    </div>
                    <div class="tab-pane fade etabi-img2">
                        <p>VE-02-04-IVORY</p>
                    </div>
                    <div class="tab-pane fade etabi-img3">
                        <p>VE-03-09-BEIGE</p>
                    </div>
                    <div class="tab-pane fade etabi-img4">
                        <p>VE-04-03-BROWN</p>
                    </div>
                    <div class="tab-pane fade etabi-img5">
                        <p>VE-06-10-GREY-(2)</p>
                    </div>
                </div>

                <ul id="myTab" class="m-0 p-0" role="tablist">
                    <div class="row">
                        <div class="col-2">
                            <a class="active show" href="#tab-1" data-bs-target=".etab-p1, .etabi-img1" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-1" src="../../img/fabrics/veilette-i/ve-01-01-white.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-2" data-bs-target=".etab-p2, .etabi-img2" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-2" src="../../img/fabrics/veilette-i/ve-02-04-ivory.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-3" data-bs-target=".etab-p3, .etabi-img3" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-3" src="../../img/fabrics/veilette-i/ve-03-09-beige.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-4" data-bs-target=".etab-p4, .etabi-img4" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-4" src="../../img/fabrics/veilette-i/ve-04-03-brown.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-5" data-bs-target=".etab-p5, .etabi-img5" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-5" src="../../img/fabrics/veilette-i/ve-06-10-grey-(2).jpg" />
                            </a>
                        </div>
                    </div>
            </div>

            </ul>
        </div>
    </div>



    <?php
    include("../components/footer.php");
    ?>
</body>
<?php
include("../components/script.php");
?>

</html>