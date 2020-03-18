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

            <div class="col-12 col-md-8">

                <?php
                    $a = new Area('About us');
                    $a->display($c);
                ?>

            </div>

        </div>

    </div>

</div>

<div class="full-width_cta">

    <div class="image-container">
        <?php
            $a = new Area('Full image 1');
            $a->display($c);
        ?>
    </div>

    <div class="content-container">
        <div class="content-container_inner">
            <?php
                $a = new Area('Full content 1');
                $a->display($c);
            ?>
        </div>
    </div>

</div>

<div class="double-column">

    <div class="container ">

        <div class="row justify-content-md-center">

            <div class="col-12 col-md-8">
                <h2>What people say about us</h2>
                
                <div class="review-block">
                    <p>"Mark and Huw were punctual every day they listened carefully to what we wanted and went above and beyond. First job we had them to do was tile our kitchen I had chosen a slightly glitter grout which turned out to be a nightmare but they persisted and got it how we wanted. Old houses the walls were terrible but they tiled perfect. We then asked them to transform our small downstairs toilet and they did everything from boxing pipes laying floor tiling plumbing etc we were very happy with the outcome. Highly recommend. Thank you."</p>
                    <h4>Christine Ambrose</h4>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="full-width_cta reverse">

    <div class="image-container">
        <?php
            $a = new Area('Full image 2');
            $a->display($c);
        ?>
    </div>

    <div class="content-container">
        <div class="content-container_inner">
            <?php
                $a = new Area('Full content 2');
                $a->display($c);
            ?>
        </div>
    </div>

</div>



<div class="contact-box">

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-12 col-md-8">

                <div class="contact-box-container">

                <h2>Like what you see?</h2>
                <p>Click the link below and get in touch, we can help you out with any problem big or small!</p>
                <a href="/contact" class="button white no-hover">Contact us</a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'elements/footer.php';?>