<?php //netteCache[01]000487a:2:{s:4:"time";s:21:"0.87324700 1447675901";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:98:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/header.php";i:2;i:1447675761;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/header.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'w9fjxhgpey')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!doctype html>
<!--[if IE 8]><html class="no-js oldie ie8 ie" lang="<?php echo NTemplateHelpers::escapeHtmlComment($site->language) ?>"><![endif]-->
<!--[if gte IE 9]><!--><html class="no-js" lang="<?php echo htmlSpecialChars($site->language) ?>"><!--<![endif]-->
	<head>
		<meta charset="<?php echo htmlSpecialChars($site->charset) ?>" />
<script type='text/javascript'>var ua = navigator.userAgent; var meta = document.createElement('meta');if((ua.toLowerCase().indexOf('android') > -1 && ua.toLowerCase().indexOf('mobile')) || ((ua.match(/iPhone/i)) || (ua.match(/iPad/i)))){ meta.name = 'viewport';	meta.content = 'target-densitydpi=device-dpi, width=device-width'; }var m = document.getElementsByTagName('meta')[0]; m.parentNode.insertBefore(meta,m);</script> 		<title><?php echo WpLatteFunctions::getTitle() ?></title>	
		<link rel="pingback" href="<?php echo htmlSpecialChars($site->pingbackUrl) ?>" />
<?php if ($themeOptions->fonts->fancyFont->type == 'google'): ?>
		<link href="http://fonts.googleapis.com/css?family=<?php echo htmlSpecialChars($themeOptions->fonts->fancyFont->font) ?>" rel="stylesheet" type="text/css" />
<?php endif ?>
	<link rel='stylesheet' id='custom-css'  href=' <?php echo get_template_directory_uri() ?>/custom-style.css' type='text/css' media='all' />
		<link id="ait-style" rel="stylesheet" type="text/css" media="all" href="<?php echo WpLatteFunctions::lessify() ?>" />
<?php if(is_singular() && get_option("thread_comments")){wp_enqueue_script("comment-reply");}wp_head() ?>
<script>  'article aside footer header nav section time'.replace(/\w+/g,function(n){ document.createElement(n) }) </script>
<script type="text/javascript" defer="defer" async> 
jQuery(document).ready(function($) { <?php if (isset($themeOptions->search->searchCategoriesHierarchical)): ?>

var categories = [ <?php echo $categoriesHierarchical ?> ]; <?php else: ?>

var categories = [ <?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($categories) as $cat): ?>
 { value: <?php echo NTemplateHelpers::escapeJs($cat->term_id) ?>, label: <?php echo NTemplateHelpers::escapeJs($cat->name) ?>
 }<?php if (!($iterator->last)): ?>,<?php endif ?> <?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?> ];
<?php endif ;if (isset($themeOptions->search->searchLocationsHierarchical)): ?> var locations = [ <?php echo $locationsHierarchical ?>
 ]; <?php else: ?>

var locations = [ <?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($locations) as $loc): ?>
 { value: <?php echo NTemplateHelpers::escapeJs($loc->term_id) ?>, label: <?php echo NTemplateHelpers::escapeJs($loc->name) ?>
 }<?php if (!($iterator->last)): ?>,<?php endif ?> <?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?> ];
<?php endif ?>
var catInput = $( "#dir-searchinput-category" ), catInputID = $( "#dir-searchinput-category-id" ), locInput = $( "#dir-searchinput-location" ),locInputID = $( "#dir-searchinput-location-id" );
catInput.autocomplete({ minLength: 0, source: categories, focus: function( event, ui ) { var val = ui.item.label.replace(/&amp;/g, "&");
val = val.replace(/&nbsp;/g, " ").replace(/&#039;/g, "'"); catInput.val( val ); return false; },
select: function( event, ui ) { var val = ui.item.label.replace(/&amp;/g, "&"); val = val.replace(/&nbsp;/g, " ").replace(/&#039;/g, "'");
catInput.val( val ); catInputID.val( ui.item.value ); return false; } }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
return $( "<li>" ).data( "item.autocomplete", item ).append( "<a>" + item.label + "</a>" ).appendTo( ul ); };
var catList = catInput.autocomplete( "widget" ); catList.niceScroll({ autohidemode: false });
catInput.click(function(){ catInput.val(''); catInputID.val('0'); catInput.autocomplete( "search", "" ); });
locInput.autocomplete({ minLength: 0, source: locations, focus: function( event, ui ) { var val = ui.item.label.replace(/&amp;/g, "&");
val = val.replace(/&nbsp;/g, " ").replace(/&#039;/g, "'"); locInput.val( val ); return false; },
select: function( event, ui ) { var val = ui.item.label.replace(/&amp;/g, "&"); val = val.replace(/&nbsp;/g, " ").replace(/&#039;/g, "'");
locInput.val( val ); locInputID.val( ui.item.value ); return false; } }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
return $( "<li>" ).data( "item.autocomplete", item ).append( "<a>" + item.label + "</a>" ).appendTo( ul ); };
var locList = locInput.autocomplete( "widget" ); locList.niceScroll({ autohidemode: false });
locInput.click(function(){ locInput.val(''); locInputID.val('0'); locInput.autocomplete( "search", "" ); });
<?php if (isset($_GET['dir-search']) && $_GET['dir-search'] == true): ?> $('#dir-searchinput-text').val(<?php echo NTemplateHelpers::escapeJs($searchTerm) ?>); 
catInputID.val(<?php echo NTemplateHelpers::escapeJs($_GET["categories"]) ?>); 
for(var i=0;i<categories.length;i++){ if(categories[i].value == <?php echo NTemplateHelpers::escapeJs($_GET["categories"]) ?>) { var val = categories[i].label.replace(/&amp;/g, "&");
val = val.replace(/&nbsp;/g, " ").replace(/&#039;/g, "'"); catInput.val(val);	} }
locInputID.val(<?php echo NTemplateHelpers::escapeJs($_GET["locations"]) ?>); 
for(var i=0;i<locations.length;i++){ if(locations[i].value == <?php echo NTemplateHelpers::escapeJs($_GET["locations"]) ?>) { var val = locations[i].label.replace(/&amp;/g, "&");
val = val.replace(/&nbsp;/g, " ").replace(/&#039;/g, "'"); locInput.val(val); } } <?php endif ?> });
</script>
</head>
<body <?php body_class('ait-directory') ?> data-themeurl="<?php echo NTemplateHelpers::escapeHtml($themeUrl, ENT_NOQUOTES) ?>">
<?php do_action("ait-html-body-begin") ?>
<div id="page" class="hfeed <?php if ((isset($themeOptions->general->layoutStyle) && $themeOptions->general->layoutStyle == 'narrow')): ?>
 narrow<?php endif ?>" >
<?php NCoreMacros::includeTemplate('snippets/branding-header.php', $template->getParams(), $_l->templates['w9fjxhgpey'])->render() ?>
			<div id="directory-main-bar" data-category="<?php echo htmlSpecialChars($mapCategory) ?>
" data-location="<?php echo htmlSpecialChars($mapLocation) ?>" data-search="<?php echo htmlSpecialChars($mapSearch) ?>
" data-geolocation="<?php if (isset($isGeolocation)): ?>true<?php else: ?>false<?php endif ?>
"<?php if ($headerType == 'image'): ?> class="directory-main-bar-image"<?php endif ?>>
<?php if ($headerType == 'slider'): if (function_exists('putRevSlider')): putRevSlider($headerSlider) ;endif ;elseif ($headerType == 'image'): ?>
				<img src="<?php echo htmlSpecialChars($headerImage) ?>" style="width: 100%; height: auto;" />
<?php endif ?>
			</div>
<?php if (isset($isDirSingle)): NCoreMacros::includeTemplate('snippets/map-single-javascript.php', $template->getParams(), $_l->templates['w9fjxhgpey'])->render() ;else: if ($headerType == 'map'): NCoreMacros::includeTemplate('snippets/map-javascript.php', $template->getParams(), $_l->templates['w9fjxhgpey'])->render() ;endif ;endif ?>
			<div id="directory-search" data-interactive="<?php if (isset($themeOptions->search->enableInteractiveSearch)): ?>
yes<?php else: ?>no<?php endif ?>">
				<div class="defaultContentWidth clearfix">
					<form action="<?php echo htmlSpecialChars($homeUrl) ?>" id="dir-search-form" method="get" class="dir-searchform">
						<div id="dir-search-inputs">
							<div id="dir-holder">
								<div class="dir-holder-wrap">
								<input type="text" name="s" id="dir-searchinput-text" placeholder="<?php echo htmlSpecialChars(__('Search keyword...', 'ait')) ?>
" class="dir-searchinput"<?php if (isset($isDirSearch)): ?> value="<?php echo htmlSpecialChars($site->searchQuery) ?>
"<?php endif ?> />

<?php if (isset($themeOptions->search->showAdvancedSearch) and $headerType == 'map'): ?>
								<div id="dir-searchinput-settings" class="dir-searchinput-settings">
									<div class="icon"></div>
									<div id="dir-search-advanced" style="display: none;">
										<?php if (isset($themeOptions->search->advancedSearchText)): ?><div class="text"><?php echo NTemplateHelpers::escapeHtml($themeOptions->search->advancedSearchText, ENT_NOQUOTES) ?>
</div><?php endif ?>

										<div class="text-geo-radius clear">
											<div class="geo-radius"><?php echo NTemplateHelpers::escapeHtml(__('Radius:', 'ait'), ENT_NOQUOTES) ?></div>
											<div class="metric">km</div>
											<input type="text" name="geo-radius" id="dir-searchinput-geo-radius" value="<?php if (isset($isGeolocation)): echo htmlSpecialChars($geolocationRadius) ;else: if (isset($themeOptions->search->advancedSearchDefaultValue)): echo htmlSpecialChars($themeOptions->search->advancedSearchDefaultValue) ;else: ?>
100<?php endif ;endif ?>" data-default-value="<?php if (isset($themeOptions->search->advancedSearchDefaultValue)): echo htmlSpecialChars($themeOptions->search->advancedSearchDefaultValue) ;else: ?>
100<?php endif ?>" />
										</div>
										<div class="geo-slider">
											<div class="value-slider"></div>
										</div>
										<div class="geo-button">
											<input type="checkbox" name="geo" id="dir-searchinput-geo"<?php if (isset($isGeolocation)): ?>
 checked="true"<?php endif ?> />
										</div>
										<div id="dir-search-advanced-close"></div>
									</div>
								</div>
								<input type="hidden" name="geo-lat" id="dir-searchinput-geo-lat" value="<?php echo htmlSpecialChars(empty($_GET['geo-lat']) ? 0 : $_GET['geo-lat']) ?>" />
								<input type="hidden" name="geo-lng" id="dir-searchinput-geo-lng" value="<?php echo htmlSpecialChars(empty($_GET['geo-lng']) ? 0 : $_GET['geo-lng']) ?>" />
<?php endif ?>

								<input type="text" id="dir-searchinput-category" placeholder="<?php echo htmlSpecialChars(__('All categories', 'ait')) ?>" />
								<input type="text" name="categories" id="dir-searchinput-category-id" value="<?php echo htmlSpecialChars($mapCategory) ?>" style="display: none;" />

								<input type="text" id="dir-searchinput-location" placeholder="<?php echo htmlSpecialChars(__('All locations', 'ait')) ?>" />
								<input type="text" name="locations" id="dir-searchinput-location-id" value="<?php echo htmlSpecialChars($mapLocation) ?>" style="display: none;" />

								<div class="reset-ajax"></div>
								</div>
							</div>
						</div>
<?php if (isset($themeOptions->search->showAdvancedSearch)): ?>

<?php endif ?>
						<div id="dir-search-button">
							<input type="submit" value="<?php echo htmlSpecialChars(__('Search', 'ait')) ?>" class="dir-searchsubmit" />
						</div>
						<input type="hidden" name="dir-search" value="yes" />
						<?php if (!empty($_GET['lang'])): ?><input type="hidden" name="lang" value="<?php echo htmlSpecialChars($_GET['lang']) ?>
" /><?php endif ?>

					</form>
				</div>
			</div>
