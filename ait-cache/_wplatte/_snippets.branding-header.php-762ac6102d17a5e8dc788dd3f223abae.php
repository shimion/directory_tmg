<?php //netteCache[01]000513a:2:{s:4:"time";s:21:"0.00329300 1436974581";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:123:"/hermes/waloraweb066/b967/pow.churchofchristglob4/htdocs/wp-content/themes/directory/Templates/snippets/branding-header.php";i:2;i:1436974422;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb066/b967/pow.churchofchristglob4/htdocs/wp-content/themes/directory/Templates/snippets/branding-header.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'q4rg5srdy9')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($registerErrors)): ?>
<div id="ait-dir-register-notifications" class="error">
	<div class="message defaultContentWidth">
	<?php echo $registerErrors ?>

	<div class="close"></div>
	</div>
</div>
<?php endif ?>

<?php if (isset($registerMessages)): ?>
<div id="ait-dir-register-notifications" class="info">
	<div class="message defaultContentWidth">
	<?php echo $registerMessages ?>

	<div class="close"></div>
	</div>
</div>
<?php endif ?>

<?php if (isset($themeOptions->advertising->showBox1)): ?>
<div id="advertising-box-1" class="advertising-box">
	<div class="defaultContentWidth clearfix">
		<div><?php echo $themeOptions->advertising->box1Content ?></div>
	 </div>
</div>
<?php endif ?>

<div class="topbar clearfix">
<?php if (!empty($themeOptions->general->topBarContact)): ?>
		<div id="tagLineHolder">
			<div class="defaultContentWidth clearfix">
				<p class="left info"><?php echo NTemplateHelpers::escapeHtml($themeOptions->general->topBarContact, ENT_NOQUOTES) ?></p>
<?php NCoreMacros::includeTemplate('social-icons.php', $template->getParams(), $_l->templates['q4rg5srdy9'])->render() ;if (!is_admin()): NCoreMacros::includeTemplate('wpml-flags.php', $template->getParams(), $_l->templates['q4rg5srdy9'])->render() ;endif ?>
				<!-- <?php NCoreMacros::includeTemplate('search-form.php', $template->getParams(), $_l->templates['q4rg5srdy9'])->render() ?> -->
			</div>
		</div>
<?php endif ?>
</div>

<header id="branding" role="banner">
	<div class="defaultContentWidth clearfix">
		<div id="logo" class="left">
<?php if (is_admin()): if (!empty($themeOptions->general->easyadmin_logo_img)): ?>
				<a class="trademark" href="<?php echo htmlSpecialChars($homeUrl) ?>">
					<img src="<?php echo WpLatteFunctions::linkTo($themeOptions->general->easyadmin_logo_img) ?>" alt="logo" />
				</a>
<?php else: ?>
				<a href="<?php echo htmlSpecialChars($homeUrl) ?>">
					<span><?php echo NTemplateHelpers::escapeHtml($themeOptions->general->logo_text, ENT_NOQUOTES) ?></span>
				</a>
<?php endif ;else: if (!empty($themeOptions->general->logo_img)): ?>
				<a class="trademark" href="<?php echo htmlSpecialChars($homeUrl) ?>">
					<img src="<?php echo WpLatteFunctions::linkTo($themeOptions->general->logo_img) ?>" alt="logo" />
				</a>
<?php else: ?>
				<a href="<?php echo htmlSpecialChars($homeUrl) ?>">
					<span><?php echo NTemplateHelpers::escapeHtml($themeOptions->general->logo_text, ENT_NOQUOTES) ?></span>
				</a>
<?php endif ;endif ?>
		</div>

		<nav id="access" role="navigation">

<?php if (!is_admin()): ?>
				<h3 class="assistive-text"><?php echo NTemplateHelpers::escapeHtml(__('Main menu', 'ait'), ENT_NOQUOTES) ?></h3>
<?php wp_nav_menu(array('theme_location' => 'primary-menu', 'fallback_cb' => 'default_menu', 'container' => 'nav', 'container_class' => 'mainmenu', 'menu_class' => 'menu')); else: ?>
				
				<!-- EASY ADMIN MENU -->
<?php $screen = get_current_screen() ;$subscriber = in_array('subscriber', $GLOBALS['current_user']->roles) ?>

<?php if (!$subscriber): ?>
					<a href="<?php echo admin_url('edit.php?post_type=ait-dir-item') ?>" class="items button<?php if ((($screen->base == 'edit' && $screen->post_type == 'ait-dir-item') || ($screen->base == 'post' && $screen->post_type == 'ait-dir-item'))): ?>
 button-primary<?php endif ?>">
						<?php echo NTemplateHelpers::escapeHtml(__('My Items', 'ait'), ENT_NOQUOTES) ?>

					</a>
<?php if (isset($themeOptions->rating->enableRating) and !isset($themeOptions->rating->disallowDirectoryUsers)): ?>
					<a href="<?php echo admin_url('edit.php?post_type=ait-rating') ?>" class="ratings button<?php if (($screen->base == 'edit' && $screen->post_type == 'ait-rating')): ?>
 button-primary<?php endif ?>">
						<?php echo NTemplateHelpers::escapeHtml(__('Ratings', 'ait'), ENT_NOQUOTES) ?>

					</a>
<?php endif ;endif ?>
				<a href="<?php echo admin_url('profile.php') ?>" class="account button<?php if (($screen->base == 'profile')): ?>
 button-primary<?php endif ?>">
					<?php echo NTemplateHelpers::escapeHtml(__('Account', 'ait'), ENT_NOQUOTES) ?>

				</a>
				<a href="<?php echo htmlSpecialChars(home_url()) ?>" class="view-site button">
					<?php echo NTemplateHelpers::escapeHtml(__('View site', 'ait'), ENT_NOQUOTES) ?>

				</a>

<?php if (is_user_logged_in()): ?>
				<a href="<?php echo wp_logout_url(home_url()) ?>" class="menu-login menu-logout"><?php echo NTemplateHelpers::escapeHtml(__("Logout", 'ait'), ENT_NOQUOTES) ?></a>
<?php endif ?>

<?php endif ?>

		</nav><!-- #accs -->

	</div>
</header><!-- #branding -->