<?php //netteCache[01]000495a:2:{s:4:"time";s:21:"0.14509500 1436974597";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:105:"/hermes/waloraweb066/b967/pow.churchofchristglob4/htdocs/wp-content/themes/directory/Templates/footer.php";i:2;i:1436974418;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb066/b967/pow.churchofchristglob4/htdocs/wp-content/themes/directory/Templates/footer.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'xselgusqxg')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
		<footer id="colophon" role="contentinfo">

			<div id="supplementary" class="widgets defaultContentWidth">

<?php if(is_active_sidebar("footer-widgets")): ?>
				<div id="footer-widgets" class="widget-area" role="complementary">
<?php dynamic_sidebar('footer-widgets') ?>
				</div>
<?php endif ?>

			</div>

<?php NCoreMacros::includeTemplate('snippets/branding-footer.php', $template->getParams(), $_l->templates['xselgusqxg'])->render() ?>

		</footer>

	</div><!-- #page -->

<?php wp_footer() ?>

	<?php echo WpLatteMacros::googleAnalyticsCode($themeOptions->general->ga_code) ?>


</body>
</html>