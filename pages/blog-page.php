<?php
/**Template Name: blog page*/
get_header();
?>
    <div class="section">
        <div class="container">
            <div class="row">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged);
                $wp_query = new WP_Query($args);
                while (have_posts()) : the_post(); ?>
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
                                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <ul class="post-meta">
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name', 1); ?></a>
                                    </li>
                                    <li><?php echo get_the_date('F j, Y'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!-- then the pagination links -->
                <?php
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => ((get_option('permalink_structure') && !$wp_query->is_search) || (is_home() && get_option('show_on_front') !== 'page' && !get_option('page_on_front'))) ? '?paged=%#%' : '&paged=%#%',
                    'currennext' => get_query_var('pages'),
                    'total' => $wp_query->max_num_pages,
                    'prev_t' => false,
                    'prev_next' => false,
                ));
                ?>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
?>