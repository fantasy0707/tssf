<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<title><?php wp_title('-',true,'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/marquee.js"></script> 
	<!--<script type="text/javascript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function($) {
		//菜单功能
	    $('#menu-list li').hover(function() {
		        $('ul', this).slideDown(50)
		    },
		    function() {
		        $('ul', this).slideUp(50)
		    });


		    $('.content-box img').each(function(i){
		    	if (! this.parentNode.href) {
		    		$(this).wrap("<a href='"+this.src+"' class='highslide-image' onclick='return hs.expand(this);'></a>");
		    	}
		    });

		    //表单验证
		    $('#s').click(function(){
		    	var str = $(this).val();
		    	if(str == "请输入关键字") {
		    		$(this).val("") ;
		    	}
		    });
		    $('#s').focus(function(){
		    	var str = $(this).val();
		    	if(str=="请输入关键字") {
		    		$(this).val("") ;
		    	}
		    });

			 $("#searchform").submit(function (){
			 	if($('#s').val() == "请输入关键字" || $('#s').val()==""){
			 		alert("请输入关键字");
	  				return false;
	  			}
	  			return true;
			});

			$("#right-bar").height($('#container').height());

			if($('.menu-left>.current-post-ancestor').size()>1) {
				$('.menu-left>.current-post-ancestor').hide();
				$('.menu-left>.current-post-ancestor').last().show();
			}
			if($('.menu-left>.current-post-parent').size()>1) {
				$('.menu-left>.current-post-parent').hide();
				$('.menu-left>.current-post-parent').last().show();
			}
		});
	</script>
	<?php wp_head();?>
</head>
<body>
	<div id="header">
		<a href=<?php echo esc_url(home_url('/' ));?> title='回到首页' >
			<img src="<?php echo get_template_directory_uri(); ?>/images/header_bg.png" />
		</a>
	</div>
	<div id="nav">
	<?php wp_nav_menu(array(
		'theme_location'  =>'primary',
		'container'       =>false,
		'menu_id'          =>'menu-list',
		'menu_class'	  =>'menu',
		) );
	?>
	</div>
