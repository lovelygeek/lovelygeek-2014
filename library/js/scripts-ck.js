/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*//*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/function updateViewportDimensions(){var e=window,t=document,n=t.documentElement,r=t.getElementsByTagName("body")[0],i=e.innerWidth||n.clientWidth||r.clientWidth,s=e.innerHeight||n.clientHeight||r.clientHeight;return{width:i,height:s}}function loadGravatars(){viewport=updateViewportDimensions();viewport.width>=768&&jQuery(".comment img[data-gravatar]").each(function(){jQuery(this).attr("src",jQuery(this).attr("data-gravatar"))})}var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var e={};return function(t,n,r){r||(r="Don't call this twice without a uniqueId");e[r]&&clearTimeout(e[r]);e[r]=setTimeout(t,n)}}(),timeToWaitForLast=100;jQuery(document).ready(function(e){e(document).ready(function(){e("img").svgmagic()});e(window).load(function(){e(".flexslider").flexslider({animation:"fade",slideshowSpeed:"10000"})});e(document).ready(function(){if(Modernizr.touch){e(".close-overlay").removeClass("hidden");e(".img").click(function(t){e(this).hasClass("hover")||e(this).addClass("hover")});e(".close-overlay").click(function(t){t.preventDefault();t.stopPropagation();e(this).closest(".img").hasClass("hover")&&e(this).closest(".img").removeClass("hover")})}else e(".img").mouseenter(function(){e(this).addClass("hover")}).mouseleave(function(){e(this).removeClass("hover")})});loadGravatars()});