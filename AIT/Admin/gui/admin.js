/**
 * AIT WordPress Framework
 *
 * Copyright (c) 2011, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */

jQuery(function(){

	// Colorpickers
	jQuery.fn.cp = function(){
		return this.each(function(){
			var $input = jQuery(this),
				myColor = $input.val();

			$input.css({'border-left-width': '15px'});
			$input.css({'border-left-color': myColor});

			$input.ColorPicker({
				color: myColor,
				onSubmit: function(hsb, hex, rgb, el) {
					jQuery(el).val( '#' + hex);
					jQuery(el).ColorPickerHide();
				},
				onBeforeShow: function () {
					jQuery(this).ColorPickerSetColor(this.value);
					$input.css({'border-left-color': this.value});
				},
				onChange: function (hsb, hex, rgb){
					$input.val('#' + hex);
					$input.css({'border-left-color': '#' + hex});
				}
			}).bind('keyup', function(){
				jQuery(this).ColorPickerSetColor('#' + this.value);
			});
		});
	}

	jQuery('.ait-colorpicker').cp();



	// Help tooltip
	jQuery('.ait-form-table-help-label').hover(function(){
			jQuery(this).find('.ait-form-table-help-tooltip').stop(true).fadeIn(150);
		},
		function(){
			jQuery(this).find('.ait-form-table-help-tooltip').fadeOut(150);
	}).click(function(e){e.preventDefault();});


	// Forum iframe height
	jQuery('#ait-dashboard-page').find('#ait-support-forum').height(jQuery('body').height() - 175);

	jQuery(window).resize(function() {
		jQuery('#ait-dashboard-page').find('#ait-support-forum').height(jQuery('body').height() - 175);
	});

	// New media select button
	var $mediaSelect = jQuery('input[type="button"].media-select');
	if($mediaSelect.length){
		$mediaSelect.click(function(){
			var $row = jQuery(this).parent().parent();
			var uploader = wp.media({
				multiple: false
			})
			.on('select', function(event) {
				var selection = uploader.state().get('selection');
				var attachment = selection.first().toJSON();
				jQuery('input[type="text"]',$row).val(attachment.url);
			})
			.open();
			return false;
		});
	}

	jQuery("#ait-theme-doc-single a[href$='gif']").colorbox({maxHeight:"95%"});
	jQuery("#ait-theme-doc-single a[href$='jpg']").colorbox({maxHeight:"95%"});
	jQuery("#ait-theme-doc-single a[href$='png']").colorbox({maxHeight:"95%"});

});