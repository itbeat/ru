jQuery.noConflict();
jQuery( document ).ready( function( $ ) {
	
	/*
		Selectors caching
	*/
	var win = $( window ),
		slider = $("#slider"),
		header = $("#header"),
		portfolio_listing = $("#portfolio_listing"),
		portfolio_listing_items = portfolio_listing.find(".item_li"),
		span_hovers = $("a:has(.icon_camera, .icon_video, .icon_text, .icon_audio, .icon_link)"),
		image_links = $("a[href$='.gif'], a[href$='.jpg'], a[href$='.jpeg'], a[href$='.png']"),
		youtube_links = $("a[href*='youtube.com/watch']"),
		vimeo_links = $("a[href*='vimeo.com/']"),
		content_links = $("a[href^='#']:not(a[href='#home_section'], a[href='#'])"),
		header_height = header.outerHeight() - 2,
		scrollpals = $("html, body"),
		wpadminbar = $("#wpadminbar"),
		hash = window.location.hash,
		is_ios = ( navigator.userAgent.match(/iPad/i) != null || navigator.userAgent.match(/iPhone/i) != null ),
		scroll,
		scrollto;
	
	/*
		Adjustments
	*/
	if ( retro.sticky_menu && wpadminbar.length ) {
		header.css( "top", wpadminbar.outerHeight() );
	}
	
	/*
		Bug fixes and adjustments for iOS devices
	*/
	if ( retro.sticky_menu && is_ios ) {
	    header.css("position", "absolute");
	    window.onscroll = function() {
	    	header.css( "top", ( document.documentElement.clientWidth / window.innerWidth > 1 ? 0 : window.pageYOffset ) );
	    }
	}
	
	/*
		Scrolling function
	*/
	$(".home").find("#header #menu a, #top_logo a, a[href='#home_section']").click( function( e ) {
		scroll = $( this ).attr("href");
		scroll = scroll.substring( scroll.indexOf("#"), scroll.length );
		scroll_to( scroll );
		e.preventDefault();
	} );

	if ( hash && $("[data-section=" + hash.substring( 1 ) + "]").length ) {
		scroll_to("[data-section=" + hash.substring( 1 ) + "]");
	}
	else if ( hash && $( hash ).length && $( hash ).hasClass("section") ) {
		scroll_to( hash );
	}
	
	function scroll_to( location ) {
		scrollto = ( ! retro.sticky_menu && location == "#home_section" ? 0 : $( location ).offset().top );
		scrollto = scrollto - ( retro.sticky_menu ? header_height : 0 );
		scrollto = scrollto - ( wpadminbar.length ? wpadminbar.outerHeight() : 0 );
		if ( $( location ).attr("data-section") && retro.scrolling_hash ) {
			window.location.hash = "#" + $( location ).attr("data-section");
		}
		scrollpals.animate(
			{
				scrollTop: scrollto
			}, {
				duration: parseInt( retro.scrolling_speed ),
				easing: retro.scrolling_easing,
				queue: false
			}
		);
	}
	
	/*
		Portfolio
	*/
	if ( $("#filter_menu").length ) {
		portfolio_listing.children("ul").fGallery("#filter_menu ul");
	}
	
	/*
		Blog pagination
	*/
	$("#blog_section .pager a").live( "click", function( e ) {
		$("#blog_section_listing")
		.css( "opacity", .5 )
		.parent( "#blog_section_content_left" )
		.load( this.href + " #blog_section_content_left", function() { scroll_to("#blog_section"); } );
		e.preventDefault();
	} );
	
	/*
		Fancybox
	*/
	image_links.fancybox({
		openEffect: "elastic",
		padding: 10,
		helpers: { overlay: { css: { "background-color": "transparent" } } }
	});
	
	/*
		Youtube Fancyboxes
	*/
	youtube_links.live( "click", function( e ) {
		
		if ( ! this.href.match(/youtube\.com\/watch\?v=[^&]+/) ) return;
		
		$.fancybox({
			autoSize: false,
			padding: 10,
			width: 700,
			height: 423,
			title: this.title,
			type: "iframe",
			iframe: { preload: false },
			href: this.href.replace( "watch?v=", "embed/" ),
			helpers: { overlay: { css: { "background-color": "transparent" } } }
		});
		
		e.preventDefault();
		
	} );
	
	/*
		Vimeo Fancyboxes
	*/
	vimeo_links.live( "click", function( e ) {
		
		if ( ! this.href.match(/vimeo\.com\/[0-9]+/i) ) return;
		
		$.fancybox({
			autoSize: false,
			padding: 10,
			width: 700,
			height: 394,
			title: this.title,
			type: "iframe",
			iframe: { preload: false },
			href: this.href.replace( "vimeo.com/", "player.vimeo.com/video/" ),
			helpers: { overlay: { css: { "background-color": "transparent" } } }
		});
		
		e.preventDefault();
		
	} );
	
	/*
		Quote Fancyboxes
	*/
	content_links.live( "click", function( e ) {
				
		$.fancybox({
			autoSize: false,
			fitToView: false,
			width: 700,
			height: "auto",
			padding: 10,
			titleShow: false,
			content: $( $( this ).attr("href") ).html(),
			helpers: { overlay: { css: { "background-color": "transparent" } } },
			afterShow: function() {
				if ( $(".fancybox-inner audio").length ) {
					audiojs.events.ready( function() {
						var audio = audiojs.create( $(".fancybox-inner audio"), { css: '' } );
					} );
				}
			}
		});
				
		e.preventDefault();
		
	} );
	
	/*
		Animations
	*/
	span_hovers.live({
		mouseenter: function(){
			$( this ).find("span").animate( { bottom: 45 }, { duration: 500, easing: "easeOutBack", queue: false } );
		},
		mouseleave: function(){
			$( this ).find("span").animate( { bottom: 35 }, { duration: 500, easing: "easeOutBack", queue: false } );
		}
	});
	
	$("#social_links li").hover( function() {
		$( this ).animate( { top: -17 }, { duration: 500, easing: "easeOutBack", queue: false } );
	},
	function() {
		$( this ).animate( { top: 0 }, { duration: 500, easing: "easeOutBack", queue: false } );
	} );
	
	/*
		Placeholders
	*/
	$("[placeholder]").placeholder();
	
	/*
		Contact form
	*/
	$("#contact_form").submit( function( e ) {
		
		var form = $( this ),
			action = form.attr("action"),
			contents = form.serialize(),
			submit = form.find(":submit"),
			fields = form.find("input[type='text'], textarea"),
			name_error = form.find("#contact_form_name_error"),
			email_error = form.find("#contact_form_email_error"),
			message_error = form.find("#contact_form_message_error"),
			success_message = form.find("#contact_form_success").html(),
			error = form.find("span"),
			val;
		
		error.hide();
		
		error = false;
			
		fields.each( function() {
			
			val = $.trim( this.value );
						
			if ( this.name == "name" && val.length < 1 ) {
				this.focus();
				error = name_error;
			}
			else if ( this.name == "email" && ! is_email( val ) ) {
				this.focus();
				error = email_error;
			}
			else if ( this.name == "message" && val.length < 1 ) {
				this.focus();
				error = message_error;
			}
									
		} );
		
		if ( ! error ) {
		
			form.fadeTo( 250, .6 );
			
			submit.attr("disabled", "disabled").val( submit.attr("data-str-load") );
			
			$.post( action, contents, function( response ) {
					
					if ( response ) {
						
						submit.val( submit.attr("data-str-done") );
						
						$.fancybox({
							openEffect: "elastic",
							width: 500,
							height: "auto",
							autoSize: false,
							titleShow: false,
							content: success_message,
							helpers: { overlay: { css: { "background-color": "transparent" } } }
						});
						
						form.fadeTo( 250, 1 );
											
					}
					
				}
			);
		
		}
		else {
			
			error.show();
			
		}
		
		e.preventDefault();
		
	} );
	
	/*
		When the page is completely loaded..
	*/
	win.load( function() {
		
		/*
			Loading gif
		*/
		$(".loading").removeClass("loading");
		
		/*
			Nivo Slider
		*/
		if ( slider.length ) {
			
		    slider.nivoSlider({
		    	effect: retro_slider.fx,
		    	slices: retro_slider.slices,
		    	boxCols: retro_slider.boxcols,
		    	boxRows: retro_slider.boxrows,
		    	animSpeed: parseInt( retro_slider.speed ),
		    	pauseTime: parseInt( retro_slider.pausetime ),
		    	pauseOnHover: retro_slider.pause,
		    	randomStart: retro_slider.random,
		    	directionNav: retro_slider.nav
		    });
		    
	    }
	    
	    /*
	    	HTML5 Audio
	    */
	    if ( $(".ajs-retro").length ) {
	    					    	
	    	audiojs.events.ready( function() {
	    		audiojs.create( $("audio"), { css: '' } );
	    	} );
	    	
	    }
	    
	} );
	
	/*
		Fine functions
	*/
	function is_email( address ) {
		return address.match( /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	}
	
} );