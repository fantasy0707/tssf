<?php 
//后台管理功能
function tssf_admin_menu() {
	 // add_theme_page( '教育学院主题设置', '教育学院设置', 'edit_theme_options', 'tssf_slug','display_function');
	add_submenu_page( 'themes.php', '教育学院设置', '教育学院主题设置', 'edit_theme_options', 'tssf_slug', 'display_function');

}
add_action( 'admin_menu', 'tssf_admin_menu' ); 
  
function display_function(){ ?>   
	<table>
    <form method="post" name="tssf_form" id="tssf_form" action="options.php">   
    <tr>
    	<td  colspan="2">教育学院主题配置</td></tr>
     
    <tr> 
    	<td>版权信息：</td> 
    <td> 
    <input name="tssf_copy_right" size="40" value="<?php echo get_option('tssf_copy_right'); ?>"/> 
    </td>  
   
    </tr>
      <tr>
    <?php wp_nonce_field('update-options'); ?>   
    <input type="hidden" name="action" value="update" />   
    <input type="hidden" name="page_options" value="tssf_copy_right" />   
    <p class="submit">   
        <input type="submit" name="option_save" value="<?php _e('保存设置'); ?>" />   
    </p>    
</tr>
    </form>   
       </table>
<?php } ?>  
