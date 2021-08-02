<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post share -->
                <div class="section-row">
                    <div class="post-share">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                        <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                        <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
                        <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
                    </div>
                </div>
                <!-- /post share -->

                <!-- post content -->
                <div class="section-row">
                    <h3>Ea vix periculis sententiae, ea blandit pericula abhorreant pri.</h3>
                    <p>Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p>
                    <p>Est in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.</p>
                    <figure class="pull-right">
                        <img src="./img/media-1.jpg" alt="">
                        <figcaption>Lorem ipsum dolor sit amet, mea ad idque detraxit,</figcaption>
                    </figure>
                    <p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>
                    <p>Sit nulla quidam et, eam ea legimus deserunt neglegentur. Et veri nostrud vix, meis minimum atomorum ex sea, stet case habemus mea no. Ut dignissim dissentiet his, mei ea delectus delicatissimi, debet dissentiunt te duo. Sonet partiendo et qui, pro et veri solet singulis. Vidit viderer eleifend ad nam. Minimum eligendi suscipit ius et, vis ex laoreet detracto scripserit, at sumo sale solum pro.</p>
                    <blockquote class="blockquote">
                        <p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
                        <footer class="blockquote-footer">John Doe</footer>
                    </blockquote>
                    <p>Mei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel. Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait oporteat eos, id usu sint numquam sententiae.</p>
                    <figure>
                        <img src="./img/media-2.jpg" alt="">
                    </figure>
                    <h3>Sit nulla quidam et, eam ea legimus deserunt neglegentur.</h3>
                    <p>No possim singulis sea, dolores salutatus interpretaris eam ad. An singulis postulant his, an inermis urbanitas mel. Wisi veri noster eu est, diam ridens eum in. Omnium imperdiet patrioque quo in, est sumo persecuti abhorreant ei. Sed feugiat iracundia id, inermis percipit eu has.</p>
                    <p>In vidit homero ullamcorper his, ea mea senserit constituto, et alia idque congue sit. Postea percipit his ne. Probo movet noluisse in nam, sed ex utroque inermis corrumpit, oratio tation vix at. Usu aperiri assentior at, eam et melius iudicabit pertinacia.</p>
                </div>
                <!-- /post content -->

                <!-- post tags -->
                <div class="section-row">
                    <div class="post-tags">
                        <ul>
                            <li>TAGS:</li>
                            <?php
                            $post = get_post();
                            $tags = wp_get_post_tags( $post->ID );
                            foreach ($tags as $tag) {
                                echo '<li>' . $tag->name . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- /post tags -->

                <!-- post nav -->
                <div class="section-row">
                    <div class="post-nav">
                        <div class="prev-post">
                                <?php
                                $prev_post = get_previous_post();
                                if ( has_post_thumbnail() ) : ?>
                                <a class="post-img" href="<?php  get_permalink($prev_post); ?>"><img src="<?php  the_post_thumbnail_url(); ?>" >   </a>
                                <?php endif; ?>
                            <h3 class="post-title">
                                <?php
                                $prev_post = get_previous_post();
                                echo '<a href="' . get_permalink($prev_post) . '">' . esc_html($prev_post->post_title) . '</a>';
                                ?>
                            </h3>
                            <span>Previous post</span>
                        </div>

                        <div class="next-post">
                            <?php
                            $next_post = get_next_post();
                            if ( has_post_thumbnail() ) : ?>
                                <a class="post-img" href="<?php  get_permalink($next_post); ?>"><img src="<?php  the_post_thumbnail_url(); ?>" >   </a>
                            <?php endif; ?>
                            <h3 class="post-title">
                                <?php
                                $next_post = get_next_post();
                                echo '<a href="' . get_permalink($next_post) . '">' . esc_html($next_post->post_title) . '</a>';
                                ?>
                            </h3>
                            <span>Next post</span>
                        </div>
                    </div>
                </div>
                <!-- /post nav  -->

                <!-- post author -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">About <a href="author.html">John Doe</a></h3>
                    </div>
                    <div class="author media">
                        <div class="media-left">
                            <a href="author.html">
                                <img class="author-img media-object" src="./img/avatar-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class="author-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /post author -->

                <!-- /related post -->
                <div>
                    <div class="section-title">
                        <h3 class="title">Related Posts</h3>
                    </div>

                    <div class="row">
                        <!-- post -->
                            <?php

                            $cats = get_the_category();
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'cat' => $cats[0]->term_id,
                            );

                            $loop = new WP_Query($args);

                            while ($loop->have_posts()) {
                                $loop->the_post();
                                ?>


                                <!-- post -->
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                        <?php endif; ?>
                                    </a>

                                    <div class="post-body">
                                        <div class="post-category">
                                            <?php the_category(); ?>
                                        </div>
                                        <h3 class="post-title title-sm"><a
                                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <ul class="post-meta">
                                            <li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name', 1 ); ?></a></li>
                                            <li><?php echo get_the_date('F j, Y'); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                <?php
                            }
                            ?>
                        <!-- /post -->
                    </div>
                </div>
                <!-- /related post -->
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
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Popular Posts</h2>
                    </div>
                    <?php

                    $cats = get_the_category();
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'cat' => $cats[0]->term_id,
                    );

                    $loop = new WP_Query($args);

                    while ($loop->have_posts()) {
                        $loop->the_post();
                        ?>


                        <!-- post -->
                        <div class="post post-widget">
                            <a class="post-img" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                <?php endif; ?>
                            </a>

                            <div class="post-body">
                                <div class="post-category">
                                    <?php the_category(); ?>
                                </div>
                                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>


                        <?php
                    }
                    ?>


                </div>
                <!-- /post widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>





















<!---->
<!--<div class="container">-->
<!--    <div class="post post-sm">-->
<!--        <a class="post-img" href="--><?php //the_permalink(); ?><!--">-->
<!--            --><?php //if ( has_post_thumbnail() ) : ?>
<!--                <img src="--><?php // the_post_thumbnail_url(); ?><!--" >-->
<!--            --><?php //endif; ?>
<!--        </a>-->
<!--        <div class="post-body">-->
<!--            <div class="post-category">-->
<!--                --><?php //the_category(' '); ?>
<!--            </div>-->
<!--            <h3 class="post-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!--            <p>		--><?php //the_content()  ?><!--</p>-->
<!--            <ul class="post-meta">-->
<!--                <li><a href="--><?php //the_permalink(); ?><!--">--><?php //echo get_the_author_meta( 'display_name', 1 ); ?><!--</a></li>-->
<!--                <li>--><?php //echo get_the_date('F j, Y'); ?><!--</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
