<?php //netteCache[01]000504a:2:{s:4:"time";s:21:"0.50790100 1446335077";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:114:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/nothing-found.php";i:2;i:1446133819;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/nothing-found.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'fszvy387p2')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><span><?php echo NTemplateHelpers::escapeHtml(__('Nothing Found', 'ait'), ENT_NOQUOTES) ?></span></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
<?php if (isset($type)): ?>
			<p><?php echo NTemplateHelpers::escapeHtml(__('Apologies, but no results were found for the request.', 'ait'), ENT_NOQUOTES) ?></p>
<?php else: ?>
			<p><?php echo NTemplateHelpers::escapeHtml(__('Apologies, but no results were found for the request. Perhaps searching will help find a related post.', 'ait'), ENT_NOQUOTES) ?></p>
<?php NCoreMacros::includeTemplate("search-form.php", $template->getParams(), $_l->templates['fszvy387p2'])->render() ;endif ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 -->