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
				'posts_per_page' => 5,
			);
			$lastposts = get_posts($args);
			
			foreach ($lastposts as $post) {
				setup_postdata($post);
				?>
				<div class="post post-widget">
					<a class="post-img" href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) : ?>
							<img src="<?php the_post_thumbnail_url('post-thumb'); ?>">
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
</div>