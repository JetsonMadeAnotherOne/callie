<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!-- FOOTER -->
<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="footer-logo">
	                    <?php
		                    $home = get_option("home");
		                    if (!is_home()) {
			                    echo '<a class="logo" href="'.$home.'">';
		                    }
		                    else {
			                    echo '<div class="logo">';
		                    }
	                    ?>
                            <?php
                            $footerLogo = get_theme_mod('Footer logo');
                            if ($footerLogo) {
                                echo '<img class="footer-logo" src="' . $footerLogo . '" alt="logo">';
                            }
                            ?>
	                    <?php
		                    if (!is_home()) {
			                    echo '</a>';
		                    }
		                    else {
			                    echo '</div>';
		                    }
	                    ?>
                    </div>
                    <p><?php echo get_theme_mod('Footer text'); ?></p>
                    <ul class="contact-social">
                        <?php
                        $linkFacebook = get_theme_mod('Facebook link');
                        if ($linkFacebook) {
                            echo '<li><a class="social-facebook" href=' . $linkFacebook . '><i class="fa fa-facebook"></i></a></li>';
                        }
                        $linkTwitter = get_theme_mod('Twitter link');
                        if ($linkTwitter) {
                            echo '<li><a class="social-twitter" href=' . $linkTwitter . '><i class="fa fa-twitter"></i></a></li>';
                        }
                        $linkGoogle = get_theme_mod('GooglePlusLink');
                        if ($linkGoogle) {
                            echo '<li><a class="social-google-plus" href=' . $linkGoogle . '><i class="fa fa-google-plus"></i></a></li>';
                        }
                        $linkInstagram = get_theme_mod('Instagram Link');
                        if ($linkInstagram) {
                            echo '<li><a class="social-instagram" href=' . $linkInstagram . '><i class="fa fa-instagram"></i></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Categories</h3>
                    <div class="category-widget">
                        <ul>
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>' . '</span></a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="tags-widget">
                        <ul>
                            <?php
                            dynamic_sidebar('test-1');
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Newsletter</h3>
                    <div class="newsletter-widget">
                        <p><?php echo get_theme_mod('Footer text'); ?></p>
                        <?php echo do_shortcode('[contact-form-7 id="27" title="Контактная форма 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Footer-menu',
                        'container' => '',
                        'items_wrap' => '<ul id="" class="footer-nav">%3$s</ul>',
                    )
                );
                ?>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
	                <?php echo get_theme_mod('Copyright text'); ?><i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a
                            href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->


<?php wp_footer(); ?>
</body>

</html>

