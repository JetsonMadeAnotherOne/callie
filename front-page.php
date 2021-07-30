<?php get_header(); ?>


<style type="text/css">
	.hot-post-right .post:first-child {
		display: none;
	}
</style>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<?php
					$category = get_field('twoBlocks',7);

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'category_name'=> $category
					);

					$loop = new WP_Query( $args );

					while ($loop->have_posts()) {
						$loop->the_post();
					?>
					<!-- post -->
					<div class="post post-thumb">
							<a class="post-img" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<img src="<?php  the_post_thumbnail_url(); ?>" >
							<?php endif; ?>
							</a>
						<div class="post-body">
							<div class="post-category">
                                <?php the_category(' '); ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name', 1 ); ?></a></li>
								<li><?php echo get_the_date('F j, Y'); ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<?php
					}
					?>
				</div>
				<div class="col-md-4 hot-post-right">
					<?php
					$namecat = get_field('twoBlocks',7);

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'category_name'=> $namecat
					);

					$loop = new WP_Query( $args );

					while ($loop->have_posts()) {
						$loop->the_post();
					?>
					<!-- post -->
					<div class="post post-thumb">
							<a class="post-img" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<img src="<?php  the_post_thumbnail_url(); ?>" >
							<?php endif; ?>
							</a>
						<div class="post-body">
							<div class="post-category">
							<?php the_category(' '); ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name', 1 ); ?></a></li>
								<li><?php echo get_the_date('F j, Y'); ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<?php
					}
					?>


					<!-- /post -->
				</div>
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
							'post_type' => 'post',
							'posts_per_page' => 4
						);

						$loop = new WP_Query( $args );

						while ($loop->have_posts()) {
							$loop->the_post();
						?>
						<!-- post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php  the_post_thumbnail_url(); ?>" >
								<?php endif; ?>
								</a>
								<div class="post-body">
									<div class="post-category">
                                        <?php the_category(' '); ?>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name', 1 ); ?></a></li>
										<li><?php echo get_the_date('F j, Y'); ?></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- /post -->

						<?php
						}
						?>

					
					</div>
					<!-- /row -->
					<?php
					if( have_rows('catitem',7) ):
					    while ( have_rows('catitem',7) ) : the_row();
					?>
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title"><?php the_sub_field('catitem-title',7) ?></h2>
							</div>
						</div>
						
						<?php

						$sec_category = get_sub_field('category_name',7);

						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3,
							'category_name'=> $sec_category
						);

						$loop = new WP_Query( $args );

						while ($loop->have_posts()) {
							$loop->the_post();
						?>

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php  the_post_thumbnail_url(); ?>" >
								<?php endif; ?>
								</a>
								<div class="post-body">
									<div class="post-category">
                                        <?php the_category(' '); ?>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
					<!-- /row -->


					<?php
						endwhile;
						else :
						endif;
					?>
				
					<!-- /row -->
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="<?php the_field('banner1',7); ?>" alt="">
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
									<a target="_blink" href="https://www.facebook.com/sharer/sharer.php?u=http://cw22762-wordpress-66.tw1.ru/" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a target="_blink" href="http://twitter.com/share?text=http://cw22762-wordpress-66.tw1.ru/&url=http://cw22762-wordpress-66.tw1.ru/" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a target="_blink" href="https://plus.google.com/share?url=http://cw22762-wordpress-66.tw1.ru/" class="social-google-plus">
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

foreach($categories as $category) {
   echo '<ul><li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>'.'</span></a></li></ul>';
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
							<?php echo do_shortcode( '[contact-form-7 id="27" title="Контактная форма 1"]' ); ?>
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
							  'orderby' => 'rand'
						);

						$loop = new WP_Query( $args );

						while ($loop->have_posts()) {
							$loop->the_post();
						?>


						<!-- post -->
						<div class="post post-widget">
								<a class="post-img" href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php  the_post_thumbnail_url(); ?>" >
								<?php endif; ?>
								</a>

								<div class="post-body">
								<div class="post-category">
                                    <?php the_category(' '); ?>
								</div>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="<?php the_field('баннер2',7); ?>" alt="">
					</a>
				</div>
				<!-- /ad -->
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
					if( have_rows('catitem1',7) ):
					while ( have_rows('catitem1',7) ) : the_row();
					?>

			
						
						<?php
						//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$namecat101 = get_sub_field('cat_name1',7);

						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 1,
							'category_name'=> $namecat101

							//'paged'  => $paged
						);

						$loop = new WP_Query( $args );

						while ($loop->have_posts()) {
							$loop->the_post();
						?>

						<div class="col-md-4">
								<div class="section-title">
									<h2 class="title"><?php the_sub_field('catitem-title1',7) ?></h2>
								</div>
								<!-- post -->
								<div class="post">
								
									<a class="post-img" href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<img src="<?php  the_post_thumbnail_url(); ?>" >
									<?php endif; ?>
									</a>

									<div class="post-body">
										<div class="post-category">
                                            <?php the_category(' '); ?>
										</div>
										<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<ul class="post-meta">
										<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name', 1 ); ?></a></li>
										<li><?php echo get_the_date('F j, Y'); ?></li>
										</ul>
									</div>
								</div>
								<!-- /post -->
						</div>


						<?php
						}
						?>

				<?php
						endwhile;
						else :
						endif;
					?>
				
			</div>
			<!-- row -->
			<div class="row">
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 9
					);

					$loop = new WP_Query( $args );

					while ($loop->have_posts()) {
						$loop->the_post();
					?>
					<div class="col-md-4">
					<div class="post post-widget">
							<a class="post-img" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<img src="<?php  the_post_thumbnail_url(); ?>" >
							<?php endif; ?>
							</a>
							<div class="post-body">
							<div class="post-category">
                                <?php the_category(' '); ?>
							</div>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
					</div>

				
					<!-- /post -->

					<?php
					}
					?>

					<!-- /post -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
<style type="text/css">
	
	.skip-link.screen-reader-text {
			display: none;
	}
</style>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 5
					);

					$loop = new WP_Query( $args );

					while ($loop->have_posts()) {
						$loop->the_post();
					?>
					<div class="post post-row">
							<a class="post-img" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<img src="<?php  the_post_thumbnail_url(); ?>" >
							<?php endif; ?>
							</a>
							<div class="post-body">
							<div class="post-category">
                                <?php the_category(' '); ?>

							</div>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta( 'display_name', 1 ); ?></a></li>
								<li><?php echo get_the_date('F j, Y'); ?></li>
							</ul>
							<p>		<?php the_excerpt()  ?></p>
						</div>
					</div>
				
				
					<!-- /post -->

					<?php
					}
					?>

					<!-- post -->

					<!-- /post -->
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/new/img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/new/img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/new/img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/new/img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/new/img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/new/img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="<?php the_field('banner3',7); ?>" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


<?php get_footer(); ?>