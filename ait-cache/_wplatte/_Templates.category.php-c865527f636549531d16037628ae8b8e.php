<?php //netteCache[01]000490a:2:{s:4:"time";s:21:"0.48681400 1446901337";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:100:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/category.php";i:2;i:1446901331;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/category.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'dpxnmtvcqb')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb4874ee2226_content')) { function _lb4874ee2226_content($_l, $_args) { extract($_args)
?>

<?php if ($posts): ?>
	
		<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">

				<header class="entry-header">
		
					<h1 class="entry-title">
						<span>
							<?php echo NTemplateHelpers::escapeHtml(__('Category Archives:', 'ait'), ENT_NOQUOTES) ?>

							<span><?php echo NTemplateHelpers::escapeHtml($category->title, ENT_NOQUOTES) ?></span>
						</span>
					</h1>
					
				</header>

<?php if (strlen($category->description) !== 0): ?>
				<div class="entry-content">
					<?php echo $category->description ?>

				</div>
<?php endif ?>
				
		</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->	


<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-above') + $template->getParams(), $_l->templates['dpxnmtvcqb'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['dpxnmtvcqb'])->render() ?>

		
		<?php /* {include snippets/content-nav.php location => 'nav-below'} 
			{willPaginate}
	<nav class="paginate-links">
		{paginateLinks true}
	</nav>
	{/willPaginate}	*/
			if (function_exists("c_pagination")) {
		    c_pagination($post->max_num_pages);
		} ?>
 
<?php if (isset($themeOptions->advertising->showBox4)): ?>
	<div id="advertising-box-4" class="advertising-box">
	    <?php echo $themeOptions->advertising->box4Content ?>

	</div>
<?php endif ?>

<?php else: ?>

<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['dpxnmtvcqb'])->render() ?>

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
