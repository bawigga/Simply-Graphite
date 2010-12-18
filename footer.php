

<footer>

<?php /* DISABLE BOOKMARKS

<!-- Footer Links -->

<h5>Elsewhere</h5>

  <ul class="elsewhere">
    <?php wp_list_bookmarks('categorize=0&title_li=&category_name=footer&show_images=0'); ?>
  </ul>
*/ ?>
  
	<div class="content">
	<?php /* DISABLE THE SEARCH FORM

	<!-- Search Field -->

		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<div id="search">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Search" />
		</div>
		</form>

	*/?>

		<p>&copy; <?php bloginfo('name'); ?>. Powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://bwigg.com/">Simple Graphite</a></p>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
