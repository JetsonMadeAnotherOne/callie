<?php get_header(); ?>
    
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div id="hot-post" class="row hot-post">
				<?php
					$args = array(
						'posts_per_page' => 3,
					);
					$lastposts = get_posts($args);
					
					foreach ($lastposts as $post) {
						setup_postdata($post);
						?>
						<?php if ($lastposts[0]->ID == $post->ID) : ?>
                            <div class="col-md-8 hot-post-left">
						<?php endif; ?>
						<?php if ($lastposts[1]->ID == $post->ID) : ?>
                        <div class="col-md-4 hot-post-right">
					<?php endif; ?>
                            <div class="post post-thumb">
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
                                    <ul class="post-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a>
                                        </li>
                                        <li><?php echo get_the_date('F j, Y'); ?></li>
                                    </ul>
                                </div>
                            </div>
						<?php if ($lastposts[0]->ID == $post->ID || $lastposts[2]->ID == $post->ID) : ?>
                        </div>
					<?php endif; ?>
						<?php
					}
					wp_reset_postdata();
				?>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Recent posts</h2>
                            </div>
                        </div>
	                    <?php
		                    $args = array(
			                    'posts_per_page' => 4,
		                    );
		                    $lastposts = get_posts($args);
		
		                    foreach ($lastposts as $post) {
		                    setup_postdata($post);
	                    ?>
                                <div class="col-md-6">
                                    <div class="post">
                                        <a class="post-img" href="<?php the_permalink(); ?>">
				                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url(); ?>">
				                            <?php endif; ?>
                                        </a>
                                        <div class="post-body">
                                            <div class="post-category">
					                            <?php the_category(' '); ?>
                                            </div>
                                            <h3 class="post-title"><a
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <ul class="post-meta">
                                                <li>
                                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a>
                                                </li>
                                                <li><?php echo get_the_date('F j, Y'); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
		                    <?php
			                    }
			                    wp_reset_postdata();
		                    ?>
                    </div>
                    <!-- /row -->
                            <!-- row -->
                            <div class="row">
	                            <?php
		                            $args = array(
			                            'posts_per_page' => 3,
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
                                                    <h3 class="post-title"><a
                                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                    <ul class="post-meta">
                                                        <li>
                                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a>
                                                        </li>
                                                        <li><?php echo get_the_date('F j, Y'); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
			                            <?php
		                            }
		                            wp_reset_postdata();
	                            ?>
                            </div>
                            <!-- /row -->

                    <!-- /row -->
                </div>
                <?php get_sidebar('home'); ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
	            <?php
		            $args = array(
			            'posts_per_page' => 3,
		            );
		            $lastposts = get_posts($args);
		
		            foreach ($lastposts as $post) {
			            setup_postdata($post);
			            ?>
                        <div class="col-md-4">
                            <div class="post">
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
                                    <ul class="post-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a>
                                        </li>
                                        <li><?php echo get_the_date('F j, Y'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
			            <?php
		            }
		            wp_reset_postdata();
	            ?>

            </div>
            <!-- row -->
            <div class="row">
	            <?php
		            $args = array(
			            'posts_per_page' => 5,
		            );
		            $lastposts = get_posts($args);
		
		            foreach ($lastposts as $post) {
			            setup_postdata($post);
			            ?>
                        <div class="col-md-4">
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
                        </div>
			            <?php
		            }
		            wp_reset_postdata();
	            ?>
             
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
	            <?php
		            $args = array(
			            'posts_per_page' => 9,
		            );
		            $lastposts = get_posts($args);
		
		            foreach ($lastposts as $post) {
			            setup_postdata($post);
			            ?>
                        <div class="col-md-8">
                            <div class="post post-row">
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
                                    <ul class="post-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', the_field('author_id')); ?></a>
                                        </li>
                                        <li><?php echo get_the_date('F j, Y'); ?></li>
                                    </ul>
                                    <p>        <?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>
			            <?php
		            }
		            wp_reset_postdata();
	            ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


<?php get_footer(); ?>