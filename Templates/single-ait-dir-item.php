{extends $layout}

{block content}

<article id="post-{$post->id}" class="{$post->htmlClasses}">

	<header class="entry-header">

		<h1 class="entry-title">
			<a href="{$post->permalink}" title="Permalink to {$post->title}" rel="bookmark">{$post->title}</a>
			{if $rating}
			<span class="rating">
				{for $i = 1; $i <= $rating['max']; $i++}
					<span class="star{if $i <= $rating['val']} active{/if}"></span>
				{/for}
			</span>
			{/if}
		</h1>

		<div class="category-breadcrumb clearfix">
			<span class="here">{__ 'You are here'}</span>
			<span class="home"><a href="{!$homeUrl}">{__ 'Home'}</a>&nbsp;&nbsp;&gt;</span>
			{foreach $ancestors as $anc}
				{first}<span class="ancestors">{/first}
				<a href="{!$anc->link}">{!$anc->name}</a>&nbsp;&nbsp;&gt;
				{last}</span>{/last}
			{/foreach}
			{ifset $term}<span class="name"><a href="{!$term->link}">{!$term->name}</a></span>{/ifset}
			<span class="title"> >&nbsp;&nbsp;{$post->title}</span>
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

?>
			{if $post->thumbnailSrc}
			<img src="{thumbnailResize $post->thumbnailSrc, w => 140, h => 200}" alt="{__ 'Item image'}">
			{/if}

			{if isset($options['emailContactOwner']) && (!empty($options['email']))}
			<a id="contact-owner-button" class="contact-owner button" href="#contact-owner-form-popup"><?php echo $contact_owner; ?></a>
			{/if}

			{if (isset($themeOptions->directory->enableClaimListing)) && (!$hasAlreadyOwner)}
			<a id="claim-listing-button" class="claim-listing-button" href="#claim-listing-form-popup">{_ "Claim This Listing"}</a>
			{/if}

			{if isset($options['gpsLatitude'], $options['gpsLongitude']) && !(empty($options['gpsLatitude']) && empty($options['gpsLongitude']))}
			<div class="itemDirections">
			</div>
			<input type="text" style="display:none" id="address-input"/>
			{/if}

		</div>

		{if isset($options['emailContactOwner']) && (!empty($options['email']))}
		<!-- contact owner form -->
		<div id="contact-owner-form-popup" style="display:none;">
			<div id="contact-owner-form" data-email="{$options['email']}">

				<h3><?php echo $contact_owner; ?></h3>

				<div class="input name">
					<input type="text" class="cowner-name" name="cowner-name" value="" placeholder="{_ 'Your name'}">
				</div>
				<div class="input email">
					<input type="text" class="cowner-email" name="cowner-email" value="" placeholder="{_ 'Your email'}">
				</div>
				<div class="input subject">
					<input type="text" class="cowner-subject" name="cowner-subject" value="" placeholder="{_ 'Subject'}">
				</div>
				<div class="input message">
					<textarea class="cowner-message" name="cowner-message" cols="30" rows="4" placeholder="{_ 'Your message'}"></textarea>
				</div>
				<button class="contact-owner-send">{_ "Send message"}</button>

				<div class="messages">
					<div class="success" style="display: none;">{_ "Your message has been successfully sent"}</div>
					<div class="error validator" style="display: none;">{_ "Please fill out email, subject and message"}</div>
					<div class="error server" style="display: none;"></div>
				</div>

			</div>
		</div>
		{/if}

		{if (isset($themeOptions->directory->enableClaimListing)) && (!$hasAlreadyOwner)}
		<!-- claim listing form -->
		<div id="claim-listing-form-popup" style="display:none;">
			<div id="claim-listing-form" data-item-id="{$post->id}">

				<h3>{_ "Enter your claim"}</h3>

				<div class="input name">
					<input type="text" class="claim-name" name="claim-name" value="" placeholder="{_ 'Your name'}">
				</div>
				<div class="input email">
					<input type="text" class="claim-email" name="claim-email" value="" placeholder="{_ 'Your email'}">
				</div>
				<div class="input number">
					<input type="text" class="claim-number" name="claim-number" value="" placeholder="{_ 'Your phone number'}">
				</div>
				<div class="input username">
					<input type="text" class="claim-username" name="claim-username" value="" placeholder="{_ 'Username'}">
				</div>
				<div class="input message">
					<textarea class="claim-message" name="claim-message" cols="30" rows="4" placeholder="{_ 'Your claim message'}"></textarea>
				</div>
				<button class="claim-listing-send">{_ "Submit"}</button>

				<div class="messages">
					<div class="success" style="display: none;">{_ "Your claim has been successfully sent"}</div>
					<div class="error validator" style="display: none;">{_ "Please fill out inputs!"}</div>
					<div class="error server" style="display: none;"></div>
				</div>

			</div>
		</div>
		{/if}

		{!$post->content}

	</div>

	{ifset $themeOptions->directory->showShareButtons}
	<div class="item-share">
		<!-- facebook -->
		<div class="social-item fb">
			<iframe src="//www.facebook.com/plugins/like.php?href={$post->permalink}&amp;send=false&amp;layout=button_count&amp;width=113&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:113px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<!-- twitter -->
		<div class="social-item">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="{$post->permalink}" data-text="{$themeOptions->directory->shareText}" data-lang="en">Tweet</a>
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
	{/ifset}

	<hr>
	<div class="item-info">

		{if (!empty($options['address'])) || (!empty($options['gpsLatitude'])) || (!empty($options['telephone'])) || (!empty($options['email'])) || (!empty($options['web']))}
		<ul class="item-address">

			<li><h4>{__ 'Our address'}</h4></li>

			{if (!empty($options['address']))}
			<li><strong class="lablel">{__ 'Address:'}</strong>{!$options['address']}</li>
			{/if}

			{if (!empty($options['gpsLatitude']))}
			<li><strong class="lablel">{__ 'GPS:'}</strong>{$options['gpsLatitude']}, {$options['gpsLongitude']}</li>
			{/if}

			{if (!empty($options['telephone']))}
			<li><strong class="lablel">{__ 'Telephone:'}</strong><a href="tel:{!$options['telephone']}">{$options['telephone']}</a></li>
			{/if}

			{if (!empty($options['email']))}
			<li><strong class="lablel">{__ 'Email:'} </strong><a href="mailto:{!$options['email']}">{!$options['email']}</a></li>
			{/if}

			{if (!empty($options['web']))}
			<li><strong class="lablel">{__ 'Web:'} </strong><a href="{!$options['web']}">{!$options['web']}</a></li>
			{/if}
	
			<?php //echo '<pre>'; print_r($options);die; ?>
			<?php if(!empty($options['preacher'])){ ?>
			<li><strong class="lablel">Preacher:</strong> <?php echo $options['preacher']; ?></li>		
			<?php } ?>
			<?php if(!empty($options['womens_ministry'])){ ?>
			<li><strong class="lablel">Women's Ministry:</strong> <?php if($options['womens_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?>
			</li>		
			<?php } ?>	
			<?php if(!empty($options['teen_ministry'])){ ?>
			<li><strong class="lablel">Teen <br> Ministry:</strong> <?php if($options['teen_ministry']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
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
			<li><strong class="lablel">Location <br> Type:</strong> <?php if($options['location_type']=='Other'){ 
						if(!empty($options['location_type_other'])){ echo $options['location_type_other']; }
					      }else{ 
						echo $options['location_type'];
						}  ?></li>		
			<?php } ?>
			<?php if(!empty($options['elders'])){ ?>
			<li><strong class="lablel"> Elders:</strong> <?php if($options['elders']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>
			<?php if(!empty($options['deacons'])){ ?>
			<li><strong class="lablel">Deacons:</strong> <?php if($options['deacons']==1){ echo 'Yes'; }else{ echo 'No'; }?></li>		
			<?php } ?>				

		</ul>

		 
		
			
		 

		{/if}

		{if (!empty($options['hoursMonday'])) || (!empty($options['hoursTuesday'])) || (!empty($options['hoursWednesday'])) || (!empty($options['hoursThursday'])) || (!empty($options['hoursFriday'])) || (!empty($options['hoursSaturday'])) || (!empty($options['hoursSunday']))}
		<dl class="item-hours">

			<dt class="title"><h4>{__ 'Opening Hours'}</h4></dt>

		    {if (!empty($options['hoursMonday']))}
		    <dt class="day">{__ 'Monday:'}</dt>
		    <dd class="data">{!$options['hoursMonday']}</dd>
		    {/if}

		    {if (!empty($options['hoursTuesday']))}
		    <dt class="day">{__ 'Tuesday:'}</dt>
		    <dd class="data">{!$options['hoursTuesday']}</dd>
		    {/if}

		    {if (!empty($options['hoursWednesday']))}
		    <dt class="day">{__ 'Wednesday:'}</dt>
		    <dd class="data">{!$options['hoursWednesday']}</dd>
		    {/if}

		    {if (!empty($options['hoursThursday']))}
		    <dt class="day">{__ 'Thursday:'}</dt>
		    <dd class="data">{!$options['hoursThursday']}</dd>
		    {/if}

		    {if (!empty($options['hoursFriday']))}
		    <dt class="day">{__ 'Friday:'}</dt>
		    <dd class="data">{!$options['hoursFriday']}</dd>
		    {/if}

		    {if (!empty($options['hoursSaturday']))}
		    <dt class="day">{__ 'Saturday:'}</dt>
		    <dd class="data">{!$options['hoursSaturday']}</dd>
		    {/if}

		    {if (!empty($options['hoursSunday']))}
		    <dt class="day">{__ 'Sunday:'}</dt>
		    <dd class="data">{!$options['hoursSunday']}</dd>
		    {/if}

		</dl>
		{/if}

	</div>
	


	{if isset($options['gpsLatitude'], $options['gpsLongitude']) && !(empty($options['gpsLatitude']) && empty($options['gpsLongitude']))}
	<div class="item-map clearfix">
	</div>
	{/if}

	<hr>

	<div class="itemGallery">
	</div>

	{if isset($options['gpsLatitude'], $options['gpsLongitude']) && !(empty($options['gpsLatitude']) && empty($options['gpsLongitude']))}
	<input type="hidden" name="directionsLat"  id="directionsLat" value="{$options['gpsLatitude']}"/>
	<input type="hidden" name="directionsLong" id="directionsLong" value="{$options['gpsLongitude']}"/>

	<div id="dir-directions">
		<div id="mapcontainer" class="clearfix"></div>
		<div id="map-directions" class="clearfix" style="display:none"></div>
	</div>
	{/if}

	{if (!empty($options['alternativeContent']))}
	<div class="item-alternative-content">
		{!do_shortcode($options['alternativeContent'])}
	</div>
	{/if}

</article><!-- /#post-{$post->id} -->

{ifset $themeOptions->rating->enableRating}
	{!getAitRatingElement($post->id)}
{/ifset}

{include comments-dir.php, closeable => (isset($themeOptions->general->closeComments)) ? true : false, defaultState => $themeOptions->general->defaultPosition}

{ifset $themeOptions->advertising->showBox4}
<div id="advertising-box-4" class="advertising-box">
    {!$themeOptions->advertising->box4Content}
</div>
{/ifset}

{/block}
