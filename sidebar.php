<div id="right-bar">
	<div id="notice">
		<span class="headline">通知公告</span>
		<span class="more"><a href=<?php bloginfo('url');?>/?cat=10>>>更多</a></span>
		<?php $args =  array(
			'post_type' => 'post',
			'posts_per_page' => 5,
			'category__in' => 10,
			); ?>
			<div class="post_list">
				<?php $query = new WP_Query($args); ?>
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
<?php get_search_form(); ?>
<div id="teacher-album">
	<span class="headline">教师风采</span>
	<span class="more"><a href=<?php bloginfo('url');?>/?page_id=277 ?>>>更多</a></span>
	<ul class="photo-list">

		<li>
			<a href="<?php bloginfo('url');?>/?page_id=314" ><img src="<?php echo get_template_directory_uri(); ?>/images/teacher/1.jpg"/> </a>
			<span class="teacher-name">李艳红</span>
		</li>
		<li>
			<a href="<?php bloginfo('url');?>/?page_id=323" ><img src="<?php echo get_template_directory_uri(); ?>/images/teacher/2.jpg"/> </a>
			<span class="teacher-name">吴彦文</span>
		</li>
		<li>
			<a href="<?php bloginfo('url');?>/?page_id=329" ><img src="<?php echo get_template_directory_uri(); ?>/images/teacher/3.jpg"/> </a>
			<span class="teacher-name">吴原</span>
		</li>
		<li>
			<a href="<?php bloginfo('url');?>/?page_id=277" ><img src="<?php echo get_template_directory_uri(); ?>/images/teacher/4.jpg"/> </a>
			<span class="teacher-name">杨学良</span>
		</li> 
		<li>
			<a href="<?php bloginfo('url');?>/?page_id=319" ><img src="<?php echo get_template_directory_uri(); ?>/images/teacher/5.jpg"/> </a>
			<span class="teacher-name">闫祯</span>
		</li>
	</ul>
</div>

<div class="class">
	<a href="<?php bloginfo('url');?>/?page_id=279"><span>教学成果</span></a>
	<a href="<?php bloginfo('url');?>/?page_id=281"><span>实习实践</span></a>
	<!-- 	<a href="<?php bloginfo('url');?>/?page_id=283"><img src="<?php echo get_template_directory_uri(); ?>/images/class.png" alt="" /></a> -->
	<img class="banner" src="<?php echo get_template_directory_uri(); ?>/images/sf.png"/>
</div>

</div>