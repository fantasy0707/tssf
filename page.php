<?php get_header(); ?>
<div id="container">
	<?php get_sidebar('left'); ?>
	<div id="main-content">
		<?php tssf_breadcrumbs(); ?>
		<div class='content-box'>
			<?php if(have_posts()): ?>
			<?php while(have_posts()) : the_post(); ?>
			<h3 class="post-title"><?php the_title(); ?></h3>
			<span class="post-info">
				<!-- 作者：<?php the_author(); ?> ||  -->
				发布时间： <?php echo  get_the_date('Y-m-d h:m:s') ?></span>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer();?>