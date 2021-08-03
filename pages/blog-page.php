<?php
/**Template Name: blog page*/
get_header();
?>
    <div class="section">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'paged' => get_query_var('page'),
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) {
                    $loop->the_post();
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
                    <?php
                }
                ?>

            </div>
        </div>
        <?php
        echo paginate_links([
            'base' => user_trailingslashit(wp_normalize_path(get_permalink() . '/%#%/')),
            'current' => max(1, get_query_var('page')),
            'total' => $loop->max_num_pages,
            'prev_next' => false,
        ]);
        ?>
    </div>

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
?>