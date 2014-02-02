<section class="span3 banner">
  	<h1><a href="/"><span class="home">Rob Williams</span></a></h1>

  	<?php
  		$resumePageId = 13;
  		$contactPageId = 26;
  	?>
  	<section>
		<a href="<?php echo get_permalink($resumePageId); ?>" class="btn color-A btn-large">Resume</a>
		<a href="<?php echo get_permalink($contactPageId); ?>" class="btn color-B btn-large">Contact</a>
	</section>

  	<h3>Search</h3>
    <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
        <div id="search">
            <input type="text" name="s" id="s" style="width:140px;" />
        </div>
    </form>

    <ul class="nav nav-list">
    	<li class="nav-header">Categories</li>
        <?php wp_list_categories('title_li='); ?>
    </ul>

	<ul class="nav nav-list">
		<li class="nav-header">Recent Posts</li>
		<?php $recent_posts = new WP_Query('posts_per_page=10&post_type=post'); ?>
		<?php if ($recent_posts->have_posts()) : while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			</li>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	</ul>
	
</section>

<section class="span9 main">