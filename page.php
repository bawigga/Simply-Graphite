<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>">
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
	<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
</article>
 	<?php comments_template(); ?>
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<?php get_footer(); ?>
