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
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
				
			</div>

            <footer class="postmetadata">
                <?php posted_on(); ?>
                <span style="padding:0 10px;" > • </span>
                <?php the_tags('', ' · ', ''); ?>
                <span style="padding:0 10px;" > • </span>
                <?php the_category(' · ') ?>
                <span style="padding:0 10px;" > • </span>
                <?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
            </footer>
			
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
