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
                        <?php echo do_shortcode( '[juiz_sps buttons="facebook, twitter, pinterest, mail"]' ); ?>
                    </div>
                </div>
                <!-- /post share -->

                <!-- post content -->
                <div class="section-row">
                    <?php
                    $content = apply_filters( 'the_content', get_the_content() );
                    echo $content;
                    ?>
                 <figure>
                        <img src="<?php  the_post_thumbnail_url(); ?>" alt="post_img">
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
                            $post_id = $post->ID; // current post ID
                            $cat = get_the_category();
                            $current_cat_id = $cat[0]->cat_ID; // current category ID

                            $args = array(
                                'category' => $current_cat_id,
                                'orderby' => 'post_date',
                                'order' => 'DESC'
                            );
                            $posts = get_posts($args);
                            // get IDs of posts retrieved from get_posts
                            $ids = array();
                            foreach ($posts as $thepost) {
                                $ids[] = $thepost->ID;
                            }
                            // get and echo previous and next post in the same category
                            $thisindex = array_search($post_id, $ids);
                            $previd = isset($ids[$thisindex - 1]) ? $ids[$thisindex - 1] : false;
                            $nextid = isset($ids[$thisindex + 1]) ? $ids[$thisindex + 1] : false;

                            if (false !== $previd) {
                                ?>
                                <a rel="prev" class="post-img" href="<?php echo get_permalink($previd) ?>"><img src="<?php echo get_the_post_thumbnail_url($previd); ?>"/></a>
                                <h3 class="post-title">
                                    <?php
                                    echo '<a href="' . get_permalink($previd) . '">' . get_the_title($previd) . '</a>';
                                    ?>
                                </h3>
                                <span>Previous post</span>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="next-post">
                            <?php
                            if (false !== $nextid) {
                                ?>
                                <a rel="prev" class="post-img" href="<?php echo get_permalink($nextid) ?>"><img src="<?php echo get_the_post_thumbnail_url($nextid); ?>"/></a>
                                <h3 class="post-title">
                                    <?php
                                    echo '<a href="' . get_permalink($nextid) . '">' . get_the_title($nextid) . '</a>';
                                    ?>
                                </h3>
                                <span>Next post</span>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /post nav  -->

                <!-- post author -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">About <a href="author.html"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a></h3>
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
                                <?php
                                $link = get_theme_mod('Facebook link');
                                if ( strlen($link) > 0 ) {
                                    echo '<li><a href='.$link.'><i class="fa fa-facebook"></i></a></li>';
                                }
                                $link2 = get_theme_mod('Twitter link');
                                if ( strlen($link2) > 0 ) {
                                    echo '<li><a href='.$link2.'><i class="fa fa-twitter"></i></a></li>';
                                }
                                $link3 = get_theme_mod('GooglePlusLink');
                                if ( strlen($link3) > 0 ) {
                                    echo '<li><a href='.$link3.'><i class="fa fa-google-plus"></i></a></li>';
                                }
                                $link4 = get_theme_mod('Instagram Link');
                                if ( strlen($link4) > 0 ) {
                                    echo '<li><a href='.$link4.'><i class="fa fa-instagram"></i></a></li>';
                                }
                                ?>
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
		                    $lastposts = get_posts($args);
		
		                    foreach ($lastposts as $post) {
			                    setup_postdata($post); // устанавливаем данные
			                    ?>
                                <div class="col-md-4">
                                    <div class="post post-sm">
                                        <a class="post-img" href="<?php the_permalink(); ?>">
						                    <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url(); ?>">
						                    <?php endif; ?>
                                        </a>

                                        <div class="post-body">
                                            <div class="post-category">
							                    <?php the_category(' '); ?>
                                            </div>
                                            <h3 class="post-title title-sm"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <ul class="post-meta">
                                                <li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a></li>
                                                <li><?php echo get_the_date('F j, Y'); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
			                    <?php
		                    }
		                    wp_reset_postdata();
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
		                $lastposts = get_posts($args);
		
		                foreach ($lastposts as $post) {
			                setup_postdata($post); // устанавливаем данные
			                ?>
                            <div class="post post-widget">
                                <a class="post-img" href="<?php the_permalink(); ?>">
					                <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>">
					                <?php endif; ?>
                                </a>

                                <div class="post-body">
                                    <div class="post-category">
						                <?php the_category(' '); ?>
                                    </div>
                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                            </div>
			                <?php
		                }
		                wp_reset_postdata();
	                ?>
                 
                </div>
                <!-- /post widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>


<?php get_footer(); ?>
