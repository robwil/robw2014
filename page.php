<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="post" id="post-<?php the_ID(); ?>">
		<h1 class="post-title"><?php the_title(); ?></h1>

		<hr>

		<div class='post-content'>
			<?php the_content(); ?>
		</div>
	</article>

<?php endwhile; endif; ?>
 
<?php get_footer(); ?>