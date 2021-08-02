<?php
/**Template Name: contact page*/
get_header();
?>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title">Contact Information</h2>
                    </div>
                    <p>Malis debet quo et, eam an lorem quaestio. Mea ex quod facer decore, eu nam mazim postea. Eu deleniti pertinacia ius. Ad elitr latine eam, ius sanctus eleifend no, cu primis graecis comprehensam eum. Ne vim prompta consectetuer, etiam signiferumque ea eum.</p>
                    <ul class="contact">
                        <li><i class="fa fa-phone"></i> 202-555-0194</li>
                        <li><i class="fa fa-envelope"></i> <a href="#">callie@email.com</a></li>
                        <li><i class="fa fa-map-marker"></i> 123 6th St.Melbourne, FL 32904</li>
                    </ul>
                </div>

                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title">Mail us</h2>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="109" title="contact-us-form"]' ); ?>
                </div>
            </div>
            <div class="col-md-4">
                <!-- ad widget-->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="<?php the_field('banner1', 7); ?>" alt="">
                    </a>
                </div>
                <!-- /ad widget -->

                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a target="_blink"
                                   href="https://www.facebook.com/sharer/sharer.php?u=http://cw22762-wordpress-66.tw1.ru/"
                                   class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blink"
                                   href="http://twitter.com/share?text=http://cw22762-wordpress-66.tw1.ru/&url=http://cw22762-wordpress-66.tw1.ru/"
                                   class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blink"
                                   href="https://plus.google.com/share?url=http://cw22762-wordpress-66.tw1.ru/"
                                   class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="category-widget">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<ul><li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>' . '</span></a></li></ul>';
                        }
                        ?>

                    </div>
                </div>
                <!-- /category widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                        <?php echo do_shortcode('[contact-form-7 id="27" title="Контактная форма 1"]'); ?>
                    </div>
                </div>
                <!-- /newsletter widget -->

                <!-- post widget -->
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
