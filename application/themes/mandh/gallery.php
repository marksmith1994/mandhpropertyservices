<?php include 'elements/header.php';?>

<div class="hero">

    <div class="hero-content">
        <?php
            echo '<h1>' . $c->getCollectionName() . '</h1>';
        ?>
    </div>

</div>

<div class="gallery-container">

    <?php
        $a = new Area('Gallery Main');
        $a->display($c);
    ?>
    
</div>


<?php include 'elements/footer.php';?>