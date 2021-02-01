<?php $view->inc('elements/header.php');?>

<?php
    $a = new Area('Home Slider');
    $a->display($c);
?>


<div class="intro-para">

    <div class="container ">

        <div class="row justify-content-md-center">

            <div class="col-12 col-lg-8">

                <?php
                    $a = new Area('Introduction');
                    $a->display($c);
                ?>

            </div>

        </div>

    </div>

</div>

<div class="pull-out_block">

    <div class="image-container">
        <?php
            $a = new Area('Pull Out Image 1');
            $a->display($c);
        ?>
    </div>

    <div class="content-container">
        <div class="content-container_inner">
            <?php
                $a = new Area('Pull Out Content 1');
                $a->display($c);
            ?>

        </div>
    </div>

</div>

<div class="pull-out_block reverse">

    <div class="image-container">
        <?php
            $a = new Area('Pull Out Image 2');
            $a->display($c);
        ?>
    </div>

    <div class="content-container">
        <div class="content-container_inner">
            <?php
                $a = new Area('Pull Out Content 2');
                $a->display($c);
            ?>
        </div>
    </div>

</div>

<div class="products-group">

    <div class="row justify-content-md-center no-gutters">

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img alt="bathrooms" src="<?= $view->getThemePath() ?>/images/shower.jpeg" />
                </div>

                <div class="content">
                    <h3>Bathrooms</h3>
                    <p>A bathroom should be more than just a necessity - a place to unwind and relax. M &amp; H Property Services aim to create a truly beautiful bathroom experience, leaving you refreshed and energised.</p>
                </div>

            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img alt="kitchens" src="<?= $view->getThemePath() ?>/images/oven.jpeg" />
                </div>

                <div class="content">
                    <h3>Kitchens</h3>
                    <p>Whether you need a whole new kitchen or fancy a new worktop, M &amp; H Property Services are the team for you. No Kitchen is too big for our team to fit.</p>
                </div>

            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img alt="flooring" src="<?= $view->getThemePath() ?>/images/livingroom-2.jpeg" />
                </div>

                <div class="content">
                    <h3>Flooring</h3>
                    <p>As the saying goes, start from the ground up. Whether its a new patio, or a wood floor for the lounge, helping you start and finish your dream project is what we aim to achieve at M &amp; H Property Services.</p>
                </div>

            </div>
        
        </div>

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img alt="Tiling" src="<?= $view->getThemePath() ?>/images/shower-2.jpeg" />
                </div>

                <div class="content">
                    <h3>Tiling</h3>
                    <p>Struggled to find someone to do a complete job in the past? M &amp; H Property Services pride ourselves with doing a complete job. From fitting whole kitchens and bathrooms, or just tiling your new shower. No job is too small.</p>
                </div>

            </div>
        
        </div>

    </div>

</div>

<div class="contact-box">

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-12 col-md-10 col-lg-8">

                <div class="contact-box-container">

                <?php
                    $a = new Area('Contact box');
                    $a->display($c);
                ?>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $view->inc('elements/footer.php');?>