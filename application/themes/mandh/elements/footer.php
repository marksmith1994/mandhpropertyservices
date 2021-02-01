        
    </div>
    <?php Loader::element('footer_required'); ?>
    </body>
    <script type="text/javascript" src="<?= $view->getThemePath() ?>/js/site-dist.js"></script>

    <footer>
        <div class="footer-nav">
            <?php
               $nav = BlockType::getByHandle('autonav');
               $nav->controller->orderBy = 'display_asc';
               $nav->controller->displayPages = 'top';
               $nav->controller->displaySubPages = 'all';
               $nav->controller->displaySubPageLevels = 'custom';
               $nav->controller->displaySubPageLevelsNum = 1;
               $nav->render('templates/header_menu.php');
            ?>
        </div>

        <div class="footer-logo site-logo">
            <a href="/"><img src="<?= $view->getThemePath() ?>/images/M_H-12.svg" /></a>
        </div>


        <div class="footer-items">
            <div class="copyright">
                <p>&copy;M &amp; H Property Services</p>
            </div>

            <div class="social-icons">
                <a href="https://www.facebook.com/mandhpropertyservices/"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
                <a href="https://www.instagram.com/mandhpropertyservices/"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a>
            </div>

        </div>

    </footer>
</html>