<?php //netteCache[01]000501a:2:{s:4:"time";s:21:"0.63521600 1446874729";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:111:"/var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/single-ait-dir-item.php";i:2;i:1446874727;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /var/www/vhosts/churchofchristglobal.com/httpdocs/wp-content/themes/directory/Templates/single-ait-dir-item.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'mtiyrka28h')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3c2e6f89af_content')) { function _lb3c2e6f89af_content($_l, $_args) { extract($_args)
?>

<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">

	<header class="entry-header">

		<h1 class="entry-title">
			<a href="<?php echo htmlSpecialChars($post->permalink) ?>" title="Permalink to <?php echo htmlSpecialChars($post->title) ?>
" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
<?php if ($rating): ?>
			<span class="rating">
<?php for ($i = 1; $i <= $rating['max']; $i++): ?>
					<span class="star<?php if ($i <= $rating['val']): ?> active<?php endif ?>"></span>
<?php endfor ?>
			</span>
<?php endif ?>
		</h1>

		<div class="category-breadcrumb clearfix">
			<span class="here"><?php echo NTemplateHelpers::escapeHtml(__('You are here', 'ait'), ENT_NOQUOTES) ?></span>
			<span class="home"><a href="<?php echo $homeUrl ?>"><?php echo NTemplateHelpers::escapeHtml(__('Home', 'ait'), ENT_NOQUOTES) ?></a>&nbsp;&nbsp;&gt;</span>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($ancestors) as $anc): ?>
				<?php if ($iterator->isFirst()): ?><span class="ancestors"><?php endif ?>

				<a href="<?php echo $anc->link ?>"><?php echo $anc->name ?></a>&nbsp;&nbsp;&gt;
				<?php if ($iterator->isLast()): ?></span><?php endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
			<?php if (isset($term)): ?><span class="name"><a href="<?php echo $term->link ?>
"><?php echo $term->name ?></a></span><?php endif ?>

			<span class="title"> >&nbsp;&nbsp;<?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></span>
		</div>

	</header>

	<div class="entry-content clearfix">
		<div class="item-image">

<?php 
$category_detail= get_the_category($post->id);
$term = get_the_terms ($post->id, 'ait-dir-item-category');

$schoollisting = array("colleges-universities", "accredited-colleges-universities", "other-institutions", "day-cares","elementary-schools","high-schools","middle-schools","misc-schools");
$businesseslisting = array("businesses");

 
if (in_array($term[0]->slug, $schoollisting)){
	$contact_owner  =  'Contact School'; 
}elseif(in_array($term[0]->slug, $businesseslisting)){
	$contact_owner  =  ' Contact Business'; 
}else{
	$contact_owner  =  'Contact Church'; 
}

if ($post->thumbnailSrc): ?>
			<img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 140, 'h' => 200)) ?>
" alt="<?php echo htmlSpecialChars(__('Item image', 'ait')) ?>" />
<?php endif ?>

<?php if (isset($options['emailContactOwner']) && (!empty($options['email']))): ?>
			<a id="contact-owner-button" class="contact-owner button" href="#contact-owner-form-popup"><?php echo $contact_owner ?></a>
<?php endif ?>

<?php if ((isset($themeOptions->directory->enableClaimListing)) && (!$hasAlreadyOwner)): ?>
			<a id="claim-listing-button" class="claim-listing-button" href="#claim-listing-form-popup"><?php echo NTemplateHelpers::escapeHtml(__("Claim This Listing", 'ait'), ENT_NOQUOTES) ?></a>
<?php endif ?>

<?php if (isset($options['gpsLatitude'], $options['gpsLongitude']) && !(empty($options['gpsLatitude']) && empty($options['gpsLongitude']))): ?>
			<div class="itemDirections">
			</div>
			<input type="text" style="display:none" id="address-input" />
<?php endif ?>

		</div>

<?php if (isset($options['emailContactOwner']) && (!empty($options['email']))): ?>
		<!-- contact owner form -->
		<div id="contact-owner-form-popup" style="display:none;">
			<div id="contact-owner-form" data-email="<?php echo htmlSpecialChars($options['email']) ?>">

				<h3><?php echo $contact_owner ?></h3>

				<div class="input name">
					<input type="text" class="cowner-name" name="cowner-name" value="" placeholder="<?php echo htmlSpecialChars(__('Your name', 'ait')) ?>" />
				</div>
				<div class="input email">
					<input type="text" class="cowner-email" name="cowner-email" value="" placeholder="<?php echo htmlSpecialChars(__('Your email', 'ait')) ?>" />
				</div>
				<div class="input subject">
					<input type="text" class="cowner-subject" name="cowner-subject" value="" placeholder="<?php echo htmlSpecialChars(__('Subject', 'ait')) ?>" />
				</div>
				<div class="input message">
					<textarea class="cowner-message" name="cowner-message" cols="30" rows="4" placeholder="<?php echo htmlSpecialChars(__('Your message', 'ait')) ?>"></textarea>
				</div>
				<button class="contact-owner-send"><?php echo NTemplateHelpers::escapeHtml(__("Send message", 'ait'), ENT_NOQUOTES) ?></button>

				<div class="messages">
					<div class="success" style="display: none;"><?php echo NTemplateHelpers::escapeHtml(__("Your message has been successfully sent", 'ait'), ENT_NOQUOTES) ?></div>
					<div class="error validator" style="display: none;"><?php echo NTemplateHelpers::escapeHtml(__("Please fill out email, subject and message", 'ait'), ENT_NOQUOTES) ?></div>
					<div class="error server" style="display: none;"></div>
				</div>

			</div>
		</div>
<?php endif ?>

<?php if ((isset($themeOptions->directory->enableClaimListing)) && (!$hasAlreadyOwner)): ?>
		<!-- claim listing form -->
		<div id="claim-listing-form-popup" style="display:none;">
			<div id="claim-listing-form" data-item-id="<?php echo htmlSpecialChars($post->id) ?>">

				<h3><?php echo NTemplateHelpers::escapeHtml(__("Enter your claim", 'ait'), ENT_NOQUOTES) ?></h3>

				<div class="input name">
					<input type="text" class="claim-name" name="claim-name" value="" placeholder="<?php echo htmlSpecialChars(__('Your name', 'ait')) ?>" />
				</div>
				<div class="input email">
					<input type="text" class="claim-email" name="claim-email" value="" placeholder="<?php echo htmlSpecialChars(__('Your email', 'ait')) ?>" />
				</div>
				<div class="input number">
					<input type="text" class="claim-number" name="claim-number" value="" placeholder="<?php echo htmlSpecialChars(__('Your phone number', 'ait')) ?>" />
				</div>
				<div class="input username">
					<input type="text" class="claim-username" name="claim-username" value="" placeholder="<?php echo htmlSpecialChars(__('Username', 'ait')) ?>" />
				</div>
				<div class="input message">
					<textarea class="claim-message" name="claim-message" cols="30" rows="4" placeholder="<?php echo htmlSpecialChars(__('Your claim message', 'ait')) ?>"></textarea>
				</div>
				<button class="claim-listing-send"><?php echo NTemplateHelpers::escapeHtml(__("Submit", 'ait'), ENT_NOQUOTES) ?></button>

				<div class="messages">
					<div class="success" style="display: none;"><?php echo NTemplateHelpers::escapeHtml(__("Your claim has been successfully sent", 'ait'), ENT_NOQUOTES) ?></div>
					<div class="error validator" style="display: none;"><?php echo NTemplateHelpers::escapeHtml(__("Please fill out inputs!", 'ait'), ENT_NOQUOTES) ?></div>
					<div class="error server" style="display: none;"></div>
				</div>

			</div>
		</div>
<?php endif ?>

		<?php echo $post->content ?>


	</div>

<?php if (isset($themeOptions->directory->showShareButtons)): ?>
	<div class="item-share">
		<!-- facebook -->
		<div class="social-item fb">
			<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo htmlSpecialChars($post->permalink) ?>&amp;send=false&amp;layout=button_count&amp;width=113&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:113px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<!-- twitter -->
		<div class="social-item">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo htmlSpecialChars($post->permalink) ?>
" data-text="<?php echo htmlSpecialChars($themeOptions->directory->shareText) ?>" data-lang="en">Tweet</a>
			<script>!function(d,s,id){ var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){ js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<!-- google plus -->
		<!-- Place this tag where you want the +1 button to render. -->
		<div class="social-item">
			<div class="g-plusone"></div>
			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</div>

	</div>
<?php endif ?>

	<hr />
	<div class="item-info">

<?php if ((!empty($options['address'])) || (!empty($options['gpsLatitude'])) || (!empty($options['telephone'])) || (!empty($options['email'])) || (!empty($options['web']))): ?>
		<ul class="item-address">

			<li><h4><?php echo NTemplateHelpers::escapeHtml(__('Our address', 'ait'), ENT_NOQUOTES) ?></h4></li>

<?php if ((!empty($options['address']))): ?>
			<li><strong class="lablel"><?php echo NTemplateHelpers::escapeHtml(__('Address:', 'ait'), ENT_NOQUOTES) ?>
</strong><?php echo $options['address'] ?></li>
<?php endif ?>

<?php if ((!empty($options['gpsLatitude']))): ?>
			<li><strong class="lablel"><?php echo NTemplateHelpers::escapeHtml(__('GPS:', 'ait'), ENT_NOQUOTES) ?>
</strong><?php echo NTemplateHelpers::escapeHtml($options['gpsLatitude'], ENT_NOQUOTES) ?>
, <?php echo NTemplateHelpers::escapeHtml($options['gpsLongitude'], ENT_NOQUOTES) ?></li>
<?php endif ?>

<?php if ((!empty($options['telephone']))): ?>
			<li><strong class="lablel"><?php echo NTemplateHelpers::escapeHtml(__('Telephone:', 'ait'), ENT_NOQUOTES) ?>
</strong><a href="tel:<?php echo $options['telephone'] ?>"><?php echo NTemplateHelpers::escapeHtml($options['telephone'], ENT_NOQUOTES) ?></a></li>
<?php endif ?>

<?php if ((!empty($options['email']))): ?>
			<li><strong class="lablel"><?php echo NTemplateHelpers::escapeHtml(__('Email:', 'ait'), ENT_NOQUOTES) ?>
 </strong><a href="mailto:<?php echo $options['email'] ?>"><?php echo $options['email'] ?></a></li>
<?php endif ?>

<?php if ((!empty($options['web']))): ?>
			<li><strong class="lablel"><?php echo NTemplateHelpers::escapeHtml(__('Web:', 'ait'), ENT_NOQUOTES) ?>
 </strong><a href="<?php echo $options['web'] ?>"><?php echo $options['web'] ?></a></li>
<?php endif ?>
	
			<?php //echo '<pre>'; print_r($options);die ?>
			<?php if(!empty($options['preacher'])){ ?>
			<li><strong class="lablel">Preacher:</strong> <?php echo $options['preacher'] ?></li>		
			<?php } ?>
			<?php if(!empty($options['womens_ministry'])){ ?>
			<li><strong class="lablel">Women's Ministry:</strong> <?php if($options['womens_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?>
			</li>		
			<?php } ?>	
			<?php if(!empty($options['teen_ministry'])){ ?>
			<li><strong class="lablel">Teen <br /> Ministry:</strong> <?php if($options['teen_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>
			<?php if(!empty($options['campus_ministry'])){ ?>
		 		<li><strong class="lablel">Campus Ministry:</strong> <?php if($options['campus_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>
			<?php if(!empty($options['prison_ministry'])){ ?>
			<li><strong class="lablel">Pissionary Ministry:</strong> <?php if($options['prison_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>
			<?php if(!empty($options['missionary_ministry'])){ ?>
			<li><strong class="lablel">Missionary Ministry:</strong> <?php if($options['missionary_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>
			<?php if(!empty($options['location_type'])){ ?>
			<li><strong class="lablel">Location <br /> Type:</strong> <?php if($options['location_type']=='Other'){ 
						if(!empty($options['location_type_other'])){ echo $options['location_type_other']; }
					      }else{ 
						echo $options['location_type'];
						} ?></li>		
			<?php } ?>
			<?php if(!empty($options['elders'])){ ?>
			<li><strong class="lablel"> Elders:</strong> <?php if($options['elders']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>
			<?php if(!empty($options['deacons'])){ ?>
			<li><strong class="lablel">Deacons:</strong> <?php if($options['deacons']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>				

		</ul>

		 
		
			
		 

<?php endif ?>

<?php if ((!empty($options['hoursMonday'])) || (!empty($options['hoursTuesday'])) || (!empty($options['hoursWednesday'])) || (!empty($options['hoursThursday'])) || (!empty($options['hoursFriday'])) || (!empty($options['hoursSaturday'])) || (!empty($options['hoursSunday']))): ?>
		<dl class="item-hours">

			<dt class="title"><h4><?php echo NTemplateHelpers::escapeHtml(__('Opening Hours', 'ait'), ENT_NOQUOTES) ?></h4></dt>

<?php if ((!empty($options['hoursMonday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Monday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursMonday'] ?></dd>
<?php endif ?>

<?php if ((!empty($options['hoursTuesday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Tuesday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursTuesday'] ?></dd>
<?php endif ?>

<?php if ((!empty($options['hoursWednesday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Wednesday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursWednesday'] ?></dd>
<?php endif ?>

<?php if ((!empty($options['hoursThursday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Thursday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursThursday'] ?></dd>
<?php endif ?>

<?php if ((!empty($options['hoursFriday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Friday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursFriday'] ?></dd>
<?php endif ?>

<?php if ((!empty($options['hoursSaturday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Saturday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursSaturday'] ?></dd>
<?php endif ?>

<?php if ((!empty($options['hoursSunday']))): ?>
		    <dt class="day"><?php echo NTemplateHelpers::escapeHtml(__('Sunday:', 'ait'), ENT_NOQUOTES) ?></dt>
		    <dd class="data"><?php echo $options['hoursSunday'] ?></dd>
<?php endif ?>

		</dl>
<?php endif ?>

	</div>
	


<?php if (isset($options['gpsLatitude'], $options['gpsLongitude']) && !(empty($options['gpsLatitude']) && empty($options['gpsLongitude']))): ?>
	<div class="item-map clearfix">
	</div>
<?php endif ?>

	<hr />

	<div class="itemGallery">
	</div>

<?php if (isset($options['gpsLatitude'], $options['gpsLongitude']) && !(empty($options['gpsLatitude']) && empty($options['gpsLongitude']))): ?>
	<input type="hidden" name="directionsLat"  id="directionsLat" value="<?php echo htmlSpecialChars($options['gpsLatitude']) ?>" />
	<input type="hidden" name="directionsLong" id="directionsLong" value="<?php echo htmlSpecialChars($options['gpsLongitude']) ?>" />

	<div id="dir-directions">
		<div id="mapcontainer" class="clearfix"></div>
		<div id="map-directions" class="clearfix" style="display:none"></div>
	</div>
<?php endif ?>

<?php if ((!empty($options['alternativeContent']))): ?>
	<div class="item-alternative-content">
		<?php echo do_shortcode($options['alternativeContent']) ?>

	</div>
<?php endif ?>

</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->

<?php if (isset($themeOptions->rating->enableRating)): ?>
	<?php echo getAitRatingElement($post->id) ?>

<?php endif ?>

<?php NCoreMacros::includeTemplate("comments-dir.php", array('closeable' => (isset($themeOptions->general->closeComments)) ? true : false, 'defaultState' => $themeOptions->general->defaultPosition) + $template->getParams(), $_l->templates['mtiyrka28h'])->render() ?>

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
