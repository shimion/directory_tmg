<?php //netteCache[01]000487a:2:{s:4:"time";s:21:"0.35035700 1446804386";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:98:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/single.php";i:2;i:1446804379;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/single.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'hc98bn8p1x')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc589f1398a_content')) { function _lbc589f1398a_content($_l, $_args) { extract($_args)
?>
<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">

	<header class="entry-header">

		<h1 class="entry-title">
			<a href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars(__('Permalink to', 'ait')) ?>
 <?php echo htmlSpecialChars($post->title) ?>" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
		</h1>

	</header>

<?php if(isset($post->thumbnailSrc)){ ?>
	<a href="<?php echo $post->thumbnailSrc ?>">
		<div class="entry-thumbnail">
<?php if (isset($fullwidth)): ?>
			<img class="fullwidth" src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 940, 'h' => 250)) ?>" alt="" />
<?php else: ?>
			<img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 629, 'h' => 250)) ?>" alt="" />
<?php endif ?>
		</div>
	</a>
<?php } ?>

	<div class="entry-meta">
		<span class="sep blog-date"><?php echo NTemplateHelpers::escapeHtml(__('On:', 'ait'), ENT_NOQUOTES) ?> </span>
		<a href="<?php echo WpLatteFunctions::getDayLink($post->date) ?>" title="<?php echo WpLatteFunctions::getTranslatedDate($post->date) ?>
" rel="bookmark"><time class="entry-date" datetime="<?php echo WpLatteFunctions::getTranslatedDate($post->date) ?>
" pubdate=""><?php echo WpLatteFunctions::getTranslatedDate($post->date) ?></time></a>
		<span class="by-author">
			<span class="sep blog-author"> <?php echo NTemplateHelpers::escapeHtml(__('By:', 'ait'), ENT_NOQUOTES) ?> </span>
			<span class="author vcard">
				<a class="url fn n" href="<?php echo htmlSpecialChars($post->author->postsUrl) ?>
" title="<?php echo htmlSpecialChars($template->printf(__('View all posts by %s', 'ait'), $post->author->name)) ?>
" rel="author"> <?php echo NTemplateHelpers::escapeHtml($post->author->name, ENT_NOQUOTES) ?></a>
			</span>
		</span>

<?php if (($post->type == 'post' && $post->categories)): ?>
		<span class="cat-links">
			<span class="sep blog-categories entry-utility-prep entry-utility-prep-cat-links"><?php echo NTemplateHelpers::escapeHtml(__('Posted in', 'ait'), ENT_NOQUOTES) ?></span>
			<?php echo $post->categories ?>

		</span>
<?php endif ?>

		<div class="comments-link">
			<a href="<?php echo $post->permalink ?>#comments" title="<?php echo htmlSpecialChars(__('Comment on', 'ait')) ?>
 <?php echo htmlSpecialChars($post->title) ?>"><?php echo NTemplateHelpers::escapeHtml($post->commentsCount, ENT_NOQUOTES) ?></a>
		</div>
		<span class="edit-link"><?php edit_post_link(__("Edit", "ait"), "<span class=\"edit-link\">", "</span>", $post->id) ?></span>
	</div>

	<div class="entry-content">
		<?php echo $post->content ?>

	</div>

</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->

<?php NCoreMacros::includeTemplate("comments.php", array('closeable' => $themeOptions->general->closeComments, 'defaultState' => $themeOptions->general->defaultPosition) + $template->getParams(), $_l->templates['hc98bn8p1x'])->render() ?>

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
