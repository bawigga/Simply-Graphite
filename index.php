<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

			<article>
				<header>
					<hgroup>
						<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
						<time datetime="<?php echo get_the_date('c'); ?>" pubdate><span><?php echo get_the_date('F j, Y'); ?></span></time>
					</hgroup>
				</header>
				<div class="content">
					<div class="entry-content">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<div class="meta">
					<?php if ('closed' == $post->comment_status) : ?>
						<div class="comments closed">
					<?php else : ?>
						<div class="comments">
					<?php endif; ?>
					<?php comments_popup_link('leave a comment', '1 comment', '% comments', '', 'comments closed'); ?>
						</div>
					</div>
				</div>
			</article>
		<?php endwhile; ?>

			<div class="page-nav">
				<div class="prev"><?php next_posts_link('&laquo; older') ?></div>
				<div class="next"><?php previous_posts_link('Newer &raquo;') ?></div>
			</div>

<?php else : ?>

			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>



	<?php get_footer(); ?>
