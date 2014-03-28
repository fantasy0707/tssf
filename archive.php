<?php get_header() ;?>
<div id="container">
	<?php get_sidebar('left' ); ?>
	<div id="main-content">
		<?php tssf_breadcrumbs(); ?> 
		<div class="post_list padding-r-20" >
		<?php if(have_posts()): ?>
		<ul>
			<?php while(have_posts()):the_post() ?>
			<li>
				<span class="post_title"><a href="<?php the_permalink();?>"><?php echo mb_strimwidth(get_the_title(), 0, 660, '…');?></a></span>
				<span class="post_date"><?php echo get_the_date('Y-m-d'); ?></span>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php else: ?>
			<h3>本分类下暂无文章，请查看其它分类！</h3>
		<?php endif?>
		<?php wp_reset_postdata(); ?>
	</div>

	<?php wp_pagenavi(); ?>
	</div>
	
</div>
<?php get_footer(); ?>