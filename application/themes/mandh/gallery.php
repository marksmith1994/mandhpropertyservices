<?php include 'elements/header.php';?>

<div class="hero">

    <div class="hero-content">
        <?php
            echo '<h1>' . $c->getCollectionName() . '</h1>';
        ?>
    </div>

</div>

<div class="gallery-container">

    <div class="image-container">
        <img src="https://via.placeholder.com/500" />
        <div class="button-group">
            <a class="button black">VIEW IMAGE</a>
        </div>
    </div>
    <div class="image-container">
        <img src="https://via.placeholder.com/500" />
        <div class="button-group">
            <a class="button black">VIEW IMAGE</a>
        </div>
    </div>
    <div class="image-container">
        <img src="https://via.placeholder.com/500" />
        <div class="button-group">
            <a class="button black">VIEW IMAGE</a>
        </div>
    </div>
    
</div>


<?php include 'elements/footer.php';?>