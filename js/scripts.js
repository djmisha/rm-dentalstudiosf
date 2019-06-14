(function($) {
	if (
		/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
			navigator.userAgent
		)
	) {
		$("html").addClass("is--device");
		if (/iPad/i.test(navigator.userAgent)) {
			$("html").addClass("is--ipad");
		}
	} else {
		$("html").addClass("not--device");
	}

	$(function() {
		//doc.ready[shorthand] start

		var $desktop = 1080;
		var $tablet = 768;
		var theme_path = rm_data.tmplDirUri;
		var site_path = rm_data.siteUrl;



		/*================================
		=            Wow INIT            =
		================================*/

		new WOW({
			// mobile: false,
		}).init();

		/*=============================
		=            Blazy            =
		=============================*/
		
		var bLazy = new Blazy();
		


		$('.home .upper-footer').insertAfter('.home-featured-procedures');
	

		/*=============================================
		=            Gallery Nudity Pop Up            =
		=============================================*/

		if ($(".botox-fillers").length) {
			// if ($.cookie("gallerypop") == null) {
				console.log(theme_path);
				$.fancybox.open({
					src: theme_path + "/popup.php",
					type: "ajax",
					opts: {
						scrolling: "no",
						transitionEffect: "fade",
						modal: true,
						helpers: {
							overlay: {
								css: {
									background: "rgba(0, 0, 0, 0.96)"
								}
							}
						},
						live: true,
						afterClose: function() {
							$.cookie("gallerypop", "rmg", {
								expires: 1,
								path: "/"
							});
						}
					}
				});
			// } 
			//end cookies check
		}

		
		/*================================
		=            Parallax            =
		================================*/

		$(window).on("load resize", function(e) {
			if ($("html").hasClass("is--device")) {
				if ($(".is-parallaxing").length > 0) {
					$(".will-parallax")
						.removeClass("is-parallaxing")
						.removeAttr("style");
				}
			} else {
				$(".will-parallax").addClass("parallax");
				$(".will-parallax").addClass("is-parallaxing");

				
				if ($(".parallax").hasClass("parallax")) {
					$(".will-parallax").waypoint(function() {
						$(".parallax-welcome").parallax("center", -0.3, true); 
						// $(".home-doctor-parallax").parallax("center", -0.4, true);
						// $(".home-reviews-parallax").parallax("center", -0.2, true);
						// $('.parallax-home-breast').parallax('center', -0.3, true , 'is-parallaxing');
						// $(".parallax-internal-header").parallax("center", -0.1, true);
					});
				}
			}
		});


		/*============================================================
		=            Fancybox for WordPress Core Gallery             =
		============================================================*/

		// Activate Fancy Box for WP Core Gallery

		$(".gallery-icon a, .blocks-gallery-item a").attr("data-fancybox", "gallery");

		// Append the Caption

		$("dl.gallery-item").each(function(event) {
			var caption = $(this).find("dd").text();
			$(this).find("dt a").attr("data-caption", caption);
		});



		/*=========================================
		=            Footer Disclaimer            =
		=========================================*/

		
	


	}); // end of doc.ready
})(jQuery);
	




/*=============================================
=            Track Outbound Clicks            =
=============================================*/

function trackOutboundLink(event) {
	// prevent the default behavior
	event.preventDefault();

	// get necessary info
	var url = this.href;
	var label =
		this.dataset.label !== "undefined" ? this.dataset.label : url; // Fallback to URL just in case no label was set. Safety first kids
	var target =
		this.target !== "" && this.target == "_blank" ? "new" : "self";

	// Just making sure this exists
	if (typeof gtag !== "undefined") {
		gtag("event", "click", {
			event_category: "outbound",
			event_label: label,
			transport_type: "beacon",
			event_callback: function() {
				if (target == "new") {
					window.open(url);
				} else {
					document.location = url;
				}
			}
		});
	} else {
		// trigger default behavior as fallback in case the gtag was omitted
		if (target == "new") {
			window.open(url);
		} else {
			document.location = url;
		}
	}
} // end tarckOutboundLink()

// Grab all our links
var linksToTrack = document.querySelectorAll(".track-outbound");

// Add click event to all of our tracked links
for (var i = 0; i < linksToTrack.length; i++) {
	linksToTrack[i].addEventListener("click", trackOutboundLink, false);
}




(function($){var BrowserClass={init:function(){this.classes=[];this.agent=navigator.userAgent.toLowerCase();this.checkBrowser();this.checkPlatform();if(this.isMobile(this.classes))this.classes.push("mobile");else this.classes.push("desktop")},checkBrowser:function(){var matches=Array();var aresult="";var aversion="";var resultant="";var iePattern=/(?:\b(ms)?ie\s+|\btrident\/7\.0;.*\s+rv:)(\d+)/;var ieMatch=this.agent.match(iePattern);if(ieMatch){this.classes.push("ie");if(typeof ieMatch[2]!=="undefined")this.classes.push("ie"+
ieMatch[2])}if(this.agent.match(/opera/)){this.classes.push("opera");aresult=this.stristr(this.agent,"version").split("/");if(aresult[1]){aversion=aresult[1].split(" ");this.classes.push("opera"+this.clearVersion(aversion[0]))}}if(this.agent.match(/chrome/)){this.classes.push("chrome");aresult=this.stristr(this.agent,"chrome").split("/");aversion=aresult[1].split(" ");this.classes.push("chrome"+this.clearVersion(aversion[0]))}else if(this.agent.match(/crios/)){this.classes.push("chrome");aresult=
this.stristr(this.agent,"crios").split("/");if(aresult[1]){aversion=aresult[1].split(" ");this.classes.push("chrome"+this.clearVersion(aversion[0]))}}else if(this.agent.match(/safari/)){this.classes.push("safari");aresult=this.stristr(this.agent,"version").split("/");if(aresult[1]){aversion=aresult[1].split(" ");this.classes.push("safari"+this.clearVersion(aversion[0]))}}if(this.agent.match(/netscape/)){this.classes.push("netscape");matches=this.agent.match(/navigator\/([^ ]*)/);if(matches)this.classes.push("netscape"+
this.clearVersion(matches[1]));else{matches=this.agent.match(/netscape6?\/([^ ]*)/);if(matches)this.classes.push("netscape"+this.clearVersion(matches[1]))}}if(this.agent.match(/firefox/)){this.classes.push("ff");matches=this.agent.match(/firefox[\/ \(]([^ ;\)]+)/);if(matches)this.classes.push("ff"+this.clearVersion(matches[1]))}if(this.agent.match(/konqueror/)){this.classes.push("konqueror");aresult=this.stristr(this.agent,"konqueror").split(" ");aversion=aresult[0].split("/");this.classes.push("konqueror"+
this.clearVersion(aversion[1]))}if(this.agent.match(/dillo/))this.classes.push("dillo");if(this.agent.match(/chimera/))this.classes.push("chimera");if(this.agent.match(/beonex/))this.classes.push("beonex");if(this.agent.match(/aweb/))this.classes.push("aweb");if(this.agent.match(/amaya/))this.classes.push("amaya");if(this.agent.match(/icab/))this.classes.push("icab");if(this.agent.match(/lynx/))this.classes.push("lynx");if(this.agent.match(/galeon/))this.classes.push("galeon");if(this.agent.match(/opera mini/)){this.classes.push("operamini");
resultant=this.stristr(this.agent,"opera mini");if(resultant.match("///")){aresult=resultant.split("/");aversion=aresult[1].split(" ");this.classes.push("operamini"+this.clearVersion(aversion[0]))}else{aversion=this.stristr(resultant,"opera mini").split(" ");this.classes.push("operamini"+this.clearVersion(aversion[1]))}}},checkPlatform:function(){if(this.agent.match(/windows/))this.classes.push("win");if(this.agent.match(/ipad/))this.classes.push("ipad");if(this.agent.match(/ipod/))this.classes.push("ipod");
if(this.agent.match(/iphone/))this.classes.push("iphone");if(this.agent.match(/mac/))this.classes.push("mac");if(this.agent.match(/android/))this.classes.push("android");if(this.agent.match(/linux/))this.classes.push("linux");if(this.agent.match(/nokia/))this.classes.push("nokia");if(this.agent.match(/blackberry/))this.classes.push("blackberry");if(this.agent.match(/freebsd/))this.classes.push("freebsd");if(this.agent.match(/openbsd/))this.classes.push("openbsd");if(this.agent.match(/netbsd/))this.classes.push("netbsd")},
isMobile:function(classes){var mobile_devices=["ipad","ipod","iphone","android","blackberry","operamini"];var mobile_devices_test=false;$.each(mobile_devices,function(index,value){if($.inArray(value,classes)!=-1){mobile_devices_test=true;return false}});if(mobile_devices_test||this.agent.match(/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|pda|psp|treo)/))return true},clearVersion:function(version){version=version.replace("/[^0-9,.,a-z,A-Z-]/","");var find=(version+
"").indexOf(".");return version.substr(0,find)},stristr:function(haystack,needle,bool){var pos=0;haystack+="";pos=haystack.toLowerCase().indexOf((needle+"").toLowerCase());if(pos==-1)return false;else if(bool)return haystack.substr(0,pos);else return haystack.slice(pos)}};BrowserClass.init();$("body").addClass(BrowserClass.classes.join(" "))})(jQuery);;
