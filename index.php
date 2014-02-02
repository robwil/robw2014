<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="post" id="post-<?php the_ID(); ?>">
		<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<h2><small class='muted'><?php _e("Filed under:"); ?> <?php the_category(',') ?> &#8212; posted by <?php the_author() ?> on <?php the_date() ?></small></h2>
		<hr>

		<div class='post-content'>
			<?php the_excerpt(); ?>
		</div>
	</article>

<?php endwhile; else: ?>
	<article class="post">
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	</article>

<?php endif; ?>
 
<?php get_footer(); ?>