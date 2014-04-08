/*
 *  Haku Framework
 *  Handcrafted by Stefano Giliberti
 */

jQuery(document).ready(function($){
	
	haku_metabox = $(".haku_metabox"),
	post_formats_select = $("#post-formats-select"),
	_retro_format_standard_metabox = $("#_retro_format_standard_metabox"),
	postdivrich_postexcerpt = $("#postdivrich, #postexcerpt");
	
	haku_metabox.parents(".postbox").addClass("haku_metabox_container");
	haku_metabox.find("[placeholder]").placeholder();
		
	if ( $("#post_type").val() == "portfolio" ) {
	
		if ( post_formats_select.find("#post-format-0").is(":checked") ) {
			_retro_format_standard_metabox.show(1);
			postdivrich_postexcerpt.hide(1);
		}
		
		if ( post_formats_select.find("#post-format-quote").is(":checked") ) {
			_retro_format_standard_metabox.hide(1);
			postdivrich_postexcerpt.show(1);
		}
		
		if ( post_formats_select.find("#post-format-audio").is(":checked") ) {
			_retro_format_standard_metabox.show(1);
			postdivrich_postexcerpt.filter("#postdivrich").show(1);
			postdivrich_postexcerpt.filter("#postexcerpt").hide(1);
		}
		
		post_formats_select.find("input").click( function() {
		
			if ( $( this ).val() == "0" ) {
				_retro_format_standard_metabox.show(1);
				postdivrich_postexcerpt.hide(1);
			}
			else if ( $( this ).val() == "audio" ) {
				_retro_format_standard_metabox.show();
				postdivrich_postexcerpt.filter("#postdivrich").show(1);
				postdivrich_postexcerpt.filter("#postexcerpt").hide(1);
			}
			else {
				_retro_format_standard_metabox.hide(1);
				postdivrich_postexcerpt.show(1);
			}
			
		} );
	
	}
	else {
		
		$("#formatdiv").hide(1);
		
	}
	
});

/*
* Placeholder plugin for jQuery
* ---
* Copyright 2010, Daniel Stocks (http://webcloud.se)
* Released under the MIT, BSD, and GPL Licenses.
*/
(function(b){function d(a){this.input=a;a.attr("type")=="password"&&this.handlePassword();b(a[0].form).submit(function(){if(a.hasClass("placeholder")&&a[0].value==a.attr("placeholder"))a[0].value=""})}d.prototype={show:function(a){if(this.input[0].value===""||a&&this.valueIsPlaceholder()){if(this.isPassword)try{this.input[0].setAttribute("type","text")}catch(b){this.input.before(this.fakePassword.show()).hide()}this.input.addClass("placeholder");this.input[0].value=this.input.attr("placeholder")}},
hide:function(){if(this.valueIsPlaceholder()&&this.input.hasClass("placeholder")&&(this.input.removeClass("placeholder"),this.input[0].value="",this.isPassword)){try{this.input[0].setAttribute("type","password")}catch(a){}this.input.show();this.input[0].focus()}},valueIsPlaceholder:function(){return this.input[0].value==this.input.attr("placeholder")},handlePassword:function(){var a=this.input;a.attr("realType","password");this.isPassword=!0;if(b.browser.msie&&a[0].outerHTML){var c=b(a[0].outerHTML.replace(/type=(['"])?password\1/gi,
"type=$1text$1"));this.fakePassword=c.val(a.attr("placeholder")).addClass("placeholder").focus(function(){a.trigger("focus");b(this).hide()});b(a[0].form).submit(function(){c.remove();a.show()})}}};var e=!!("placeholder"in document.createElement("input"));b.fn.placeholder=function(){return e?this:this.each(function(){var a=b(this),c=new d(a);c.show(!0);a.focus(function(){c.hide()});a.blur(function(){c.show(!1)});b.browser.msie&&(b(window).load(function(){a.val()&&a.removeClass("placeholder");c.show(!0)}),
a.focus(function(){if(this.value==""){var a=this.createTextRange();a.collapse(!0);a.moveStart("character",0);a.select()}}))})}})(jQuery);