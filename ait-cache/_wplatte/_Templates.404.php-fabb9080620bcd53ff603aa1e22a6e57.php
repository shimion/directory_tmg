<?php //netteCache[01]000492a:2:{s:4:"time";s:21:"0.32409700 1446065948";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:102:"/hermes/waloraweb066/b967/pow.churchofchristglob4/htdocs/wp-content/themes/directory/Templates/404.php";i:2;i:1436974417;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb066/b967/pow.churchofchristglob4/htdocs/wp-content/themes/directory/Templates/404.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'kb5cmpfgzx')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7990e1ad06_content')) { function _lb7990e1ad06_content($_l, $_args) { extract($_args)
?>

<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['kb5cmpfgzx'])->render() ?>

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
