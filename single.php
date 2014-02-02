<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="post" id="post-<?php the_ID(); ?>">
		<h1 class="post-title"><?php the_title(); ?></h1>
		<h2><small class='muted'><?php _e("Filed under:"); ?> <?php the_category(',') ?> &#8212; posted by <?php the_author() ?> on <?php the_date() ?></small></h2>

		<hr>

		<div class='post-content'>
			<?php the_content(); ?>
		</div>
	</article>

<?php endwhile; endif; ?>
 
<?php get_footer(); ?>