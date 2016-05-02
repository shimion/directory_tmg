<?php

/**
 * AIT WordPress Framework
 *
 * Copyright (c) 2011, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */
?>



<?php
$dWidgets = array(
	array('about-us', __('About us', THEME_CODE_NAME), 'aitAboutUsWidget'),
);

if(class_exists('AitUpdater')){
	$dWidgets[] = array('ait-theme-changelog', sprintf(__('%s Changelog', THEME_CODE_NAME), THEME_SHORT_NAME), 'aitThemeChangelog');
}
aitAddDashboardWidgets($dWidgets);
?>



<?php function aitAboutUsWidget(){ ?>
	<div class="ait-about">
		<div class="ait-box">

			<div class="ait-logo">
				<div class="ait-wrap">
					<a class="ait" href="http://www.ait-themes.club" target="_blank">AitThemes.club</a>
					<p>tools for your<br /><strong>professional theme</strong><br />administration</p>
				</div>
			</div>

			<div class="ait-links">
				<div class="ait-wrap">
					<a class="ait-button facebook" href="http://www.facebook.com/AitThemes" target="_blank">
						<span class="ait-butwrap">
							<span class="title">Facebook</span>
						</span>
					</a>
					<a class="ait-button twitter" href="http://twitter.com/AitThemes" target="_blank">
						<span class="ait-butwrap">
							<span class="title">Twitter</span>
						</span>
					</a>
					<a class="ait-button youtube" href="http://www.youtube.com/user/AitThemes" target="_blank">
						<span class="ait-butwrap">
							<span class="title">YouTube</span>
						</span>
					</a>
					<a class="ait-button google" href="https://plus.google.com/106741986791543596667/posts" target="_blank">
						<span class="ait-butwrap">
							<span class="title">Google Plus</span>
						</span>
					</a>
					<a class="ait-button rss" href="http://feeds.feedburner.com/AitThemes" target="_blank">
						<span class="ait-butwrap">
							<span class="title">RSS</span>
						</span>
					</a>
				</div>
				<p>socialize with us</p>
			</div>

		</div>
	</div>
<?php } ?>


<?php function aitThemeChangelog() {

	if (function_exists('wp_get_theme')) {
		$currentVersion = wp_get_theme()->version;
	} else {
		$theme = get_theme_data(get_current_theme());
		$currentVersion = isset($theme['Version']) ? $theme['Version'] : 1.0;
	}

	$apiResponse = AitUpdater::getInstance()->getApiClient()->getModule('themes')->getThemeChangelog(THEME_CODE_NAME, 'all', false);
	$versions = array();
	if($apiResponse->isSuccessful()){
		$versions = (array) $apiResponse->getData();
	}
	?>
	<div class="ait-info ait-update">
		<div class="ait-box">
			<div class="ait-wrap">
				<p class="ait-current-version-msg"><?php echo sprintf(__('Your current version of <strong>%s</strong> is <strong class="ait-your-theme-version">%s</strong>.</p>', THEME_CODE_NAME), THEME_LONG_NAME, $currentVersion) ?>
	<?php
	if(!empty($versions)):
		?><div class="ait-versions-list"><?php
		foreach($versions as $version):
			$dd = mysql2date('d', $version->releasedAt);
			$mm = mysql2date('M', $version->releasedAt);
			$yyyy = mysql2date('Y', $version->releasedAt);


			?>
				<div class="ait-button ait-version">
					<span class="ait-butwrap">
						<span class="ait-day"><?php echo $dd; ?></span>
						<span class="ait-month"><?php echo strtoupper($mm); ?></span>
						<span class="ait-year"><?php echo $yyyy; ?></span>
					</span>
				</div>
				<h3 class="ait-news-title">
					v<?php echo $version->version; ?>
				</h3>
				<div class="ait-news-content">
					<ul>
					<?php
						$items = explode("\n", $version->changelog);
						foreach($items as $i){
							$i = str_replace('- ', '', $i);
							$i = esc_html($i);
							echo "<li>{$i}</li>";
						}
					?>
					</ul>
				</div>
				<div class="separator"></div>
		<?php
		endforeach;
		?>
		</div>
	<?php else:	?>
	<p class="ait-no-updates"><?php _e('There is no changelog available.', THEME_CODE_NAME); ?></p>
	<?php endif; ?>
			</div>
		</div>
	</div>
 <?php } ?>




 <?php
// =======================================================
// Render the page
// -------------------------------------------------------
 ?>
<div class="wrap">
	<div id="icon-ait" class="icon32"><img src="<?php echo AIT_ADMIN_URL?>/gui/img/ait-logo.png" width="32" height="32"></div>

	<h2 class="nav-tab-wrapper"><a href="http://www.ait-themes.club" target="_blank" style="text-decoration: none;">AitThemes.club</a>
		<?php echo aitDashboardTabs(); ?>
	</h2>

	<?php if(aitIsDashboardHome()): ?>

	<div id="dashboard-widgets-wrap">
		<div id="dashboard-widgets" class="metabox-holder">

			<?php aitDashboard() ; ?>

		</div> <!-- /#dashboard-widgets -->
		<div class="clear"></div>
	</div> <!-- /#dashboard-widgets-wrap -->

	<?php else: ?>

	<div id="ait-dashboard-page">
		<?php aitDashboardPages(); ?>
	</div>

	<?php endif; ?>
</div> <!-- /.wrap -->

