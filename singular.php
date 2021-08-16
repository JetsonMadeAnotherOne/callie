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
	                <?php if (has_post_thumbnail()) : ?>
                        <figure>
                            <?php the_post_thumbnail('post-thumb'); ?>
                        </figure>
	                <?php endif; ?>
                    <?php
	                   the_content();
                    ?>
                  </div>
                <!-- /post content -->

                <!-- post tags -->
                <div class="section-row">
                    <?php if( has_tag() ) : ?>
                    <div class="post-tags">
                        <ul>
                            <li>TAGS:</li>
                            <?php
                            $tags = wp_get_post_tags( $post->ID );
                            foreach ($tags as $tag) {
                                echo '<li>' . $tag->name . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- /post tags -->

                <!-- post nav -->
                <div class="section-row">
                    <div class="post-nav">
			            <?php
				            if (get_previous_post()) {
					            $prev_post_id = get_previous_post()->ID; ?>

                                <div class="prev-post">
                                    <a rel="prev" class="post-img"
                                       href="<?php echo get_permalink($prev_post_id) ?>"><img
                                                src="<?php echo get_the_post_thumbnail_url($prev_post_id); ?>"/></a>
                                    <h3 class="post-title">
							            <?php
								            echo '<a href="' . get_permalink($prev_post_id) . '">' . get_the_title($prev_post_id) . '</a>';
							            ?>
                                    </h3>
                                    <span>Previous post</span>
                                </div>
					            <?php
				            }
			            ?>
			            <?php
				            if (get_next_post()) {
					            $next_post_id = get_next_post()->ID; ?>
                                <div class="next-post">
                                    <a rel="prev" class="post-img"
                                       href="<?php echo get_permalink($next_post_id) ?>"><img
                                                src="<?php echo get_the_post_thumbnail_url($next_post_id); ?>"/></a>
                                    <h3 class="post-title">
							            <?php
								            echo '<a href="' . get_permalink($next_post_id) . '">' . get_the_title($next_post_id) . '</a>';
							            ?>
                                    </h3>
                                    <span>Next post</span>
                                </div>
					            <?php
				            }
			            ?>
                    </div>

                </div>
                <!-- /post nav  -->

                <!-- post author -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">About <a href="author.html"><?php $author_field = get_field('author_field'); echo($author_field->post_title); ?></a></h3>
                    </div>
                    <div class="author media">
                        <div class="media-left">
                            <img class="author-img media-object" src='<?php echo get_the_post_thumbnail_url($author_field->ID); ?>' alt="">
                        </div>
                        <div class="media-body">
                            <p>
		                        <?php
			                        echo apply_filters( 'the_content', $author_field->post_content );
		                        ?>
                            </p>
                            <ul class="author-social">
                                <?php
                                    $author_field_arr = get_fields($author_field->ID);
	                                $linkFacebook = $author_field_arr["facebook-link"];
	                                if ($linkFacebook) {
		                                echo '<li><a href='.$linkFacebook.'><i class="fa fa-facebook"></i></a></li>';
	                                }
	                                $linkTwitter = $author_field_arr["twitter-link"];
	                                if ($linkTwitter) {
		                                echo '<li><a href='.$linkTwitter.'><i class="fa fa-twitter"></i></a></li>';
	                                }
	                                $linkGooglePlus = $author_field_arr["google-plus-link"];
	                                if ($linkGooglePlus) {
		                                echo '<li><a href='.$linkGooglePlus.'><i class="fa fa-google-plus"></i></a></li>';
	                                }
	                                $linkInstagram = $author_field_arr["instagram-link"];
	                                if ($linkGooglePlus) {
		                                echo '<li><a href='.$linkInstagram.'><i class="fa fa-instagram"></i></a></li>';
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
                                                <img src="<?php the_post_thumbnail_url('post-thumb'); ?>">
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
                                                <li><a href="<?php the_permalink(); ?>"><?php echo($author_field->post_title); ?></a></li>
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
