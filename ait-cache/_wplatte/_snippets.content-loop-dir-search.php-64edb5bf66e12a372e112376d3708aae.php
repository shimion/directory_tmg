<?php //netteCache[01]000514a:2:{s:4:"time";s:21:"0.76063400 1446716859";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:124:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/content-loop-dir-search.php";i:2;i:1446635790;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/content-loop-dir-search.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'bs4xod30jd')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
NCoreMacros::includeTemplate('sorting.php', $template->getParams(), $_l->templates['bs4xod30jd'])->render() ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($posts) as $item): if ($iterator->isFirst()): ?>
<ul class="items"><?php endif ?>

	<li class="item clear<?php if (isset($item->packageClass)): ?> <?php echo htmlSpecialChars($item->packageClass) ;endif ;if (isset($item->optionsDir['featured'])): ?>
 featured<?php endif ?>">
<?php if ($item->thumbnailDir): ?>
		<div class="thumbnail">
			<img src="<?php echo AitImageResizer::resize($item->thumbnailDir, array('w' => 100, 'h' => 100)) ?>
" alt="<?php echo htmlSpecialChars(__('Item thumbnail', 'ait')) ?>" />
			<div class="comment-count"><?php echo NTemplateHelpers::escapeHtml($item->comment_count, ENT_NOQUOTES) ?></div>
		</div>
<?php endif ?>

		<div class="description">
			<h3>
				<a href="<?php echo $item->link ?>"><?php echo NTemplateHelpers::escapeHtml($item->post_title, ENT_NOQUOTES) ?></a>
<?php if ($item->rating): ?>
				<span class="rating">
<?php for ($i = 1; $i <= $item->rating['max']; $i++): ?>
						<span class="star<?php if ($i <= $item->rating['val']): ?> active<?php endif ?>"></span>
<?php endfor ?>
				</span>
<?php endif ?>
			</h3>
			<?php $itemLocation = get_post_meta($item->id, '_ait-dir-item', true) ?>
			<?php if(!empty($itemLocation['address'])){ ?>
			<p><?php echo $itemLocation['address'] ?></p>
			<?php } if (shortcode_exists( 'loop' )): ?>
				<?php echo do_shortcode("[loop id=".$item->ID."]") ?>

<?php endif ?>
			<?php echo $item->excerptDir ?>

		</div>
	</li>
<?php if ($iterator->isLast()): ?></ul><?php endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ;
