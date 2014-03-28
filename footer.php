	<div class="clear"></div>
	<div id="footer">
		<div id="footer-content">
			<div id="link"><span>友情链接：</span>
				<ul class="link-list">
					<?php  wp_list_bookmarks('title_li=&categorize=0&orderby=rating'); ?>
				</ul>
			</div>

			<div class="copyright">
				<p>地址：天水师范学院教育学院 邮编：741001</p>
				<p>Copyright &copy <?php echo get_the_date('Y' );?> College Of Education TianShui Nornmal Univeristy,All rights reserved.</p>
				<p><?php bloginfo('name' ); ?> 版权所有</p>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>