<html>
	<?php
		get_header();
			?>
	
	<body>

		Acompanhe nossas últimas postagens...
	<?php
		$frontPagePosts = new WP_Query(array(
			'posts_per_page' => 2
		));

		while($frontPagePosts->have_posts()){
			$frontPagePosts->the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			<p><?php echo wp_trim_words(get_the_content(), 18) ?><a href="<?php the_permalink(); ?>">Ler mais...</a></p>
		<?php } wp_reset_postdata();

	?>
	</body>

	<?php
		get_footer();
			?>
</html>