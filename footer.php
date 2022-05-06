<footer class="footer">
    <div class="grid-container">
        <div class="grid footer__content">
            <div class="grid__item grid__item--ds-4 grid__item--mb-12">
                <div class="footer__logo logo">
                    <a href="#"
                       class="logo__wrap">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            if ($custom_logo_id) {
                                $logo = wp_get_attachment_image_src($custom_logo_id);
                            } else {
                                $homeurl = home_url('/wp-content/themes/sketchify/assets/img/logo.svg');
                                $logo = array($homeurl);
                            }
                        } 
                        ?>
                        <img src="<?php echo $logo[0] ?>"
                             alt="Sketchify.AI" />
                    </a>
                </div>
            </div>
            <div class="grid__item grid__item--ds-4 grid__item--mb-12">
                <nav class="footer__nav nav-footer">
                    <div class="nav-footer__column grid__item--mb-6 order-1-mb">
                        <a href="#"
                           class="nav-footer__title">Product</a>
                        <ul class="nav-footer__list">
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Main</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Opportunity</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-footer__column grid__item--mb-6 order-3-mb">
                        <a href="#"
                           class="nav-footer__title">Partnerts</a>
                        <ul class="nav-footer__list">
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Tariffs</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Advantages</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-footer__column grid__item--mb-6 order-2-mb">
                        <a href="#"
                           class="nav-footer__title">About</a>
                        <ul class="nav-footer__list">
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Company</a>
                            </li>
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Founder</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-footer__column grid__item--mb-6 order-4-mb">
                        <a href="#"
                           class="nav-footer__title">Blog</a>
                        <ul class="nav-footer__list">
                            <li class="nav-footer__item">
                                <a href="#"
                                   class="nav-footer__link">Materials</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="grid__item grid__item--ds-4 grid__item--mb-12 footer-flex-end order-4-mb">
                <div class="footer__contacts">
                    <div class="footer__socials">
                        <a href="#"
                           class="footer__icon _icon-twitter"></a>
                        <a href="#"
                           class="footer__icon _icon-facebook"></a>
                        <a href="#"
                           class="footer__icon _icon-linkedin"></a>
                    </div>
                    <div class="footer__address">
                        <p>Russia, Tatarstan,</p>
                        <p>Kazan, Svetlya 16</p>
                    </div>
                </div>
            </div>
            <div class="grid__item grid__item--ds-12 grid__item--mb-12 text-center order-3-mb">
                <div class="footer__bottom desc-sec">
                    <p>© SketchifyAI. 2021 All rights reserved.</p>
                    <p>Powered by Noble Scripts</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php
  wp_footer();
  ?>
</body>

</html>