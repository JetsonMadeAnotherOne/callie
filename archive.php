<?php
get_header();
?>
<!-- PAGE HEADER -->
<div class="page-header">
    <div class="page-header-bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <div class="author">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
<div class="section">
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- row -->
            <div class="col-md-8">
	            <?php
		            $cats = get_the_category();
		            $args = array(
			            'post_type' => 'post',
			            'posts_per_page' => 5,
			            'cat' => $cats[0]->term_id,
		            );
		            $lastposts = get_posts($args);
		
		            foreach ($lastposts as $post) {
			            setup_postdata($post);
			            ?>
                        <div class="post post-row">
                            <a class="post-img" href="<?php the_permalink(); ?>">
					            <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('post-thumb'); ?>">
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
	        <?php get_sidebar('home'); ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<?php get_footer(); ?>
