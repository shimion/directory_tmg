<?php //netteCache[01]000485a:2:{s:4:"time";s:21:"0.91756100 1446267815";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:96:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/page.php";i:2;i:1446132757;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/page.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'nf1uixbzzg')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb62247eafc8_content')) { function _lb62247eafc8_content($_l, $_args) { extract($_args)
?>
<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">

	<header class="entry-header">

		<h1 class="entry-title">
			<a href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars(__('Permalink to', 'ait')) ?>
 <?php echo htmlSpecialChars($post->title) ?>" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
		</h1>

	</header>

<?php if ($post->thumbnailSrc): ?>
	<a href="<?php echo $post->thumbnailSrc ?>">
<?php if (isset($fullwidth)): ?>
		<div class="entry-thumbnail"><img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 940, 'h' => 250)) ?>" alt="" /></div>
<?php else: ?>
		<div class="entry-thumbnail"><img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 629, 'h' => 250)) ?>" alt="" /></div>
<?php endif ?>
	</a>
<?php endif ?>

	<div class="entry-content">
		<?php echo $post->content ?>

	</div>

</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->

<?php NCoreMacros::includeTemplate("comments.php", array('closeable' => $themeOptions->general->closeComments, 'defaultState' => $themeOptions->general->defaultPosition) + $template->getParams(), $_l->templates['nf1uixbzzg'])->render() ?>

<?php if (isset($themeOptions->advertising->showBox4)): ?>
<div id="advertising-box-4" class="advertising-box">
    <?php echo $themeOptions->advertising->box4Content ?>

</div>
<?php endif ?>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = true; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
$_l->extends = $layout ?>

<?php 
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
