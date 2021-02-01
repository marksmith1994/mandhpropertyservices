<?php include 'elements/header.php';?>
<div class="hero">

    <div class="hero-content">
    <?php
        echo '<h1>' . $c->getCollectionName() . '</h1>';
    ?>
    </div>

</div>


<div class="intro-para">

    <div class="container ">

        <div class="row justify-content-md-center">

            <div class="col-12 col-lg-8">

                <?php
                    $a = new Area('About us');
                    $a->display($c);
                ?>

            </div>

        </div>

    </div>

</div>


<?php include 'elements/footer.php';?>