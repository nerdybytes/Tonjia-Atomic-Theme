<?php
	/*
		Template Name: page_main
	*/
?>


<?php get_header(); ?>

<div id="main_image">

  <img src="images/TonjiaAtomic_main_700x540.gif" alt="Tonjia" height="540" width="700" />

</div>

<?php get_sidebar(); ?>

</body>
</html>



	<?php /*?><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?><?php */?>

<?php /*?><?php get_footer(); ?><?php */?>
