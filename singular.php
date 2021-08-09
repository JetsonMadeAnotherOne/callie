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
                        <h3 class="title">About <a href="author.html"><?php echo(get_field('author_field')->post_title); ?></a></h3>
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
			                    setup_postdata($post);
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
                                                <li><a href="<?php the_permalink(); ?>"><?php echo(get_field('author_field')->post_title); ?></a></li>
                                                <li><?php echo get_the_date('j F Y'); ?></li>
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
	        <?php get_sidebar('home'); ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>


<?php get_footer(); ?>
