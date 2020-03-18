<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<div>
    <div><?php echo t('Boolean')?></div>
    <div>
    <?php if ($booleanfield) { ?>
        <?php echo t('Yes')?>
    <?php } else { ?>
        <?php echo t('No')?>
    <?php } ?>
    </div>
</div>

<div class="col-12 col-md-3">

    <div class="product-item">

        <div class="image">
            <img src="<?= $view->getThemePath() ?>/images/shower.jpeg" />
        </div>

        <div class="content">
            <h3><?php echo $title ?></h3>
            <p><?php //echo $description ?></p>
        </div>

    </div>

</div>
