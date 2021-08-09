<?php
/**Template Name: author page*/
get_header();
?>
<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <div class="author">
                    <img class="author-img center-block" src="./img/avatar-1.jpg" alt="">
                    <h1 class="text-uppercase"><?php echo(get_field('author_field')->post_title); ?></h1>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <ul class="author-social">
                        <?php
                        $link = get_theme_mod('Facebook Author link');
                        if ( strlen($link) > 0 ) {
                            echo '<li><a href='.$link.'><i class="fa fa-facebook"></i></a></li>';
                        }
                        $link2 = get_theme_mod('Twitter Author link');
                        if ( strlen($link2) > 0 ) {
                            echo '<li><a href='.$link2.'><i class="fa fa-twitter"></i></a></li>';
                        }
                        $link3 = get_theme_mod('Author GooglePlusLink');
                        if ( strlen($link3) > 0 ) {
                            echo '<li><a href='.$link3.'><i class="fa fa-google-plus"></i></a></li>';
                        }
                        $link4 = get_theme_mod('Instagram Author Link');
                        if ( strlen($link4) > 0 ) {
                            echo '<li><a href='.$link4.'><i class="fa fa-instagram"></i></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
	            <?php
		            $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 5,
			            'author__in' => array(1),
		            );
		            $lastposts = get_posts($args);
		
		            foreach ($lastposts as $post) {
			            setup_postdata($post);
			            ?>
                        <div class="post post-row">
                            <a class="post-img" href="<?php the_permalink(); ?>">
					            <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>">
					            <?php endif; ?>
                            </a>
                            <div class="post-body">
                                <div class="post-category">
						            <?php the_category(); ?>

                                </div>
                                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <ul class="post-meta">
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php echo(get_field('author_field')->post_title); ?></a>
                                    </li>
                                    <li><?php echo get_the_date('j F Y'); ?></li>
                                </ul>
                                <p>        <?php the_excerpt() ?></p>
                            </div>
                        </div>
			            <?php
		            }
		            wp_reset_postdata();
	            ?>
            </div>
            <div class="col-md-4">
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
		                $args = array(
			                'post_type' => 'post',
			                'posts_per_page' => 4,
			                'orderby' => 'rand',
			                'author__in' => array(1),
		                );
		                $lastposts = get_posts($args);
		
		                foreach ($lastposts as $post) {
			                setup_postdata($post);
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
<!-- /SECTION -->


<?php get_footer(); ?>
