<?php get_header();?>
<div id="container">
	<div id="main">
		<div id="ppt">
			<?php if (function_exists('wp_flash_img_show')) {wp_flash_img_show('default');} ?>

		</div>
		<div class="left">
			<span class="headline">学院新闻</span>
			<span class="more"><a href=<?php bloginfo('url');?>/?cat=9>>>更多</a></span>
			<div class="post_list">
				<?php $query = new WP_Query('cat=9&posts_per_page=10'); ?>
				<?php if($query->have_posts()): ?>
				<ul>
					<?php while($query -> have_posts()) : $query ->the_post(); ?>
						<li>
							<span class="post_title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),18, '…');?></a></span>
							<span class="post_date"><?php echo get_the_date('Y-m-d'); ?></span>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php endif;?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="right">
			<span class="headline">党政工作</span>
			<span class="more"><a href=<?php bloginfo('url');?>/?cat=4>>>更多</a></span>
			<div class="post_list">
				<?php $query = new WP_Query('cat=4&posts_per_page=10'); ?>
				<?php if($query->have_posts()): ?>
				<ul>
					<?php while($query -> have_posts()) : $query ->the_post(); ?>
					<li>
						<span class="post_title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),18, '…');?></a></span>
						<span class="post_date"><?php echo get_the_date('Y-m-d'); ?></span>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>
	</div>
	<?php get_sidebar();?>
</div>

<?php get_footer(); ?>