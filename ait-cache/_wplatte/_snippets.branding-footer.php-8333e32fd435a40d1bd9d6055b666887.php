<?php //netteCache[01]000506a:2:{s:4:"time";s:21:"0.26740900 1446207920";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:116:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/branding-footer.php";i:2;i:1446133819;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/branding-footer.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'udp1ebvjgr')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div id="site-generator" class="clearfix">
	<div class="defaultContentWidth">
		<div id="footer-text">
			<?php echo $themeOptions->general->footer_text ?>

		</div>
<?php if ((!is_admin())): wp_nav_menu(array('theme_location' => 'footer-menu', 'fallback_cb' => 'default_footer_menu', 'container' => 'nav', 'container_class' => 'footer-menu', 'menu_class' => 'menu', 'depth' => 1)); endif ?>
	</div>
</div>