<?php //netteCache[01]000501a:2:{s:4:"time";s:21:"0.76398200 1446562767";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:111:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/wpml-flags.php";i:2;i:1446562718;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/snippets/wpml-flags.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'ed4xelryry')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!-- WPML plugin required -->
<?php if (function_exists('icl_get_languages')): if (icl_get_languages('skip_missing=0')): ?>
<div class="wpml-switch right">
    <div class="language-button">
        <span class="language-title">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator(icl_get_languages('skip_missing=0')) as $lang): ?>
            <?php if ($lang['active'] == 1): echo NTemplateHelpers::escapeHtml($lang['translated_name'], ENT_NOQUOTES) ;endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
        </span> <!-- /.language-title -->
    </div>
        <ul id="language-bubble" class="bubble clearfix">
            <li class="arrow">&nbsp;</li>
            <li class="holder">&nbsp;</li>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator(icl_get_languages('skip_missing=0')) as $lang): ?>
            <li class="lang"><a href="<?php echo htmlSpecialChars($lang['url']) ?>
"><img src="<?php echo htmlSpecialChars($lang['country_flag_url']) ?>" class="lang" alt="lang" /><?php echo NTemplateHelpers::escapeHtml($lang['translated_name'], ENT_NOQUOTES) ?></a></li>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
        </ul>
</div> <!-- /.language-button -->
<?php endif ;endif ;
