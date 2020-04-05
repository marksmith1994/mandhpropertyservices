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
                    <img src="<?= $view->getThemePath() ?>/images/shower.jpeg" />
                </div>

                <div class="content">
                    <h3>Bathrooms</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi inventore numquam, illum modi dignissimos dolor doloremque id, vitae pariatur ea, nulla saepe praesentium exercitationem ad tempore culpa deserunt omnis repellendus!</p>
                </div>

            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img src="<?= $view->getThemePath() ?>/images/oven.jpeg" />
                </div>

                <div class="content">
                    <h3>Kitchens</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi inventore numquam, illum modi dignissimos dolor doloremque id, vitae pariatur ea, nulla saepe praesentium exercitationem ad tempore culpa deserunt omnis repellendus!</p>
                </div>

            </div>

        </div>

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img src="<?= $view->getThemePath() ?>/images/livingroom-2.jpeg" />
                </div>

                <div class="content">
                    <h3>Flooring</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi inventore numquam, illum modi dignissimos dolor doloremque id, vitae pariatur ea, nulla saepe praesentium exercitationem ad tempore culpa deserunt omnis repellendus!</p>
                </div>

            </div>
        
        </div>

        <div class="col-12 col-md-6 col-lg-3">

            <div class="product-item">

                <div class="image">
                    <img src="<?= $view->getThemePath() ?>/images/shower-2.jpeg" />
                </div>

                <div class="content">
                    <h3>Tiling</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi inventore numquam, illum modi dignissimos dolor doloremque id, vitae pariatur ea, nulla saepe praesentium exercitationem ad tempore culpa deserunt omnis repellendus!</p>
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