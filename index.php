<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div id="container" class="clearfix">
    <div id="primary">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                <div class="entry">
                    <?php the_content(__('Read more...', '')); ?>
                </div>

                <footer class="postmetadata">
                    <?php posted_on(); ?>
                    <span style="padding:0 10px;" > • </span>
                    <?php the_tags('', ' · ', ''); ?>
                    <span style="padding:0 10px;" > • </span>
                    <?php the_category(' · ') ?>
                </footer>

            </article>

        <?php endwhile; ?>

        <?php post_navigation(); ?>

        <?php else : ?>

            <h2><?php _e('Nothing Found','html5reset'); ?></h2>

        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
