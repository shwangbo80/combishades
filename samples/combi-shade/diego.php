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
            <?php require("../components/combi-shade-header.php") ?>
            <hr>
        </div>
        <div class="row pt-5">
            <div class="col-md-5">
                <div class="tab-content">
                    <div class="tab-pane fade show active etab-p1">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-01-white-(2).jpg" />
                    </div>
                    <div class="tab-pane fade etab-p2">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-01-white.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p3">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-02-ivory-(2).jpg" />
                    </div>
                    <div class="tab-pane fade etab-p4">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-02-ivory.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p5">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-03-stone-blue.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p6">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-04-grey.jpg" />
                    </div>
                    <div class="tab-pane fade etab-p7">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-05-brown-(2).jpg" />
                    </div>
                    <div class="tab-pane fade etab-p8">
                        <img class="img-fluid fabric-img" src="../../img/fabrics/combi-shade/diego/dg-05-brown.jpg" />
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 d-flex  flex-column align-items-start">
                <h1 class="pb-5 fw-bold">DIEGO</h1>
                <div class="tab-content mt-auto">
                    <div class="tab-pane fade show active etabi-img1">
                        <p>DG_01-WHITE-(2)</p>
                    </div>
                    <div class="tab-pane fade etabi-img2">
                        <p>DG_01-WHITE</p>
                    </div>
                    <div class="tab-pane fade etabi-img3">
                        <p>DG_02-IVORY-(2)</p>
                    </div>
                    <div class="tab-pane fade etabi-img4">
                        <p>DG_02-IVORY</p>
                    </div>
                    <div class="tab-pane fade etabi-img5">
                        <p>DG_03-STONE-BLUE</p>
                    </div>
                    <div class="tab-pane fade etabi-img6">
                        <p>DG_04-GREY</p>
                    </div>
                    <div class="tab-pane fade etabi-img7">
                        <p>DG_05-BROWN-(2)</p>
                    </div>
                    <div class="tab-pane fade etabi-img8">
                        <p>DG_05-BROWN</p>
                    </div>
                </div>

                <ul id="myTab" class="m-0 p-0 " role="tablist">
                    <div class="row">
                        <div class="col-2">
                            <a class="active show" href="#tab-1" data-bs-target=".etab-p1, .etabi-img1" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-1" src="../../img/fabrics/combi-shade/diego/dg-01-white-(2).jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-2" data-bs-target=".etab-p2, .etabi-img2" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-2" src="../../img/fabrics/combi-shade/diego/dg-01-white.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-3" data-bs-target=".etab-p3, .etabi-img3" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-3" src="../../img/fabrics/combi-shade/diego/dg-02-ivory-(2).jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-4" data-bs-target=".etab-p4, .etabi-img4" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-4" src="../../img/fabrics/combi-shade/diego/dg-02-ivory.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-5" data-bs-target=".etab-p5, .etabi-img5" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-5" src="../../img/fabrics/combi-shade/diego/dg-03-stone-blue.jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-6" data-bs-target=".etab-p6, .etabi-img6" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-6" src="../../img/fabrics/combi-shade/diego/dg-04-grey.jpg" />
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <a href="#tab-7" data-bs-target=".etab-p7, .etabi-img7" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-7" src="../../img/fabrics/combi-shade/diego/dg-05-brown-(2).jpg" />
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="#tab-8" data-bs-target=".etab-p8, .etabi-img8" data-bs-toggle="tab">
                                <img class="img-fluid fabric-thumb" id="fabric-8" src="../../img/fabrics/combi-shade/diego/dg-05-brown.jpg" />
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