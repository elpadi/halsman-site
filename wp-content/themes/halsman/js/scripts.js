/* JS Document
 * Site: Halsman
 * Author: Jackson Solutions Group
 * Website: http://go-jsg.com
 */
 
$(document).ready(function() {

	if($('body').hasClass('single-image') || $('body').hasClass('single-publication') || $('body').hasClass('page-id-155')){
		gallery();
	}
	if($('body').hasClass('page-id-9')){
		home();
	}
	if($("body").hasClass('page-id-169') || $("body").hasClass('page-id-167') || $("body").hasClass('page-id-163') || $("body").hasClass('page-id-155')){
		exhibition();	
	}
});

$(window).load(function(){
	
});


$.fn.replaceAttr = function(aName, rxString, repString) {
	return this.attr(
		aName,
		function() {
			return $(this).attr(aName).replace(rxString, repString);
		}
	);
};

function gallery(){

	$(".content .gallery a").attr('rel','gallery');
	
	$("a[rel=gallery]").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'titleShow'         : false,
		'padding'           : 0
	});
	
	$(".content .gallery a").each(function(){
		$(this).replaceAttr('href', 'th_', '');
	});
	
}

function home(){
	if ($(window).width() >= 768) {
		$('#gallery-1').cycle('fade');
		$('#gallery-1').css('width','100%');
	}
	$(".content .gallery .gallery-item .gallery-icon a").each(function(){
		$(this).attr('href','#');
	});
	$(".content .gallery a").click(function(event){
		event.preventDefault();
	});
}

function exhibition(){
	if($("body").hasClass('page-id-169')){
		$("li.page-item-169 a").attr('href','#solo');
		$("li.page-item-171 a").attr('href','#group');
		$("li.page-item-173 a").attr('href','#awards');
		$("li.page-item-179 a").attr('href','#positions');
		$("li.page-item-181 a").attr('href','#permanent');
		$("li.page-item-183 a").attr('href','#stamps');
	}
	if($("body").hasClass('page-id-167') || $("body").hasClass('page-id-163') || $("body").hasClass('page-id-155')){
		$("li.page-item-171 a").attr('href','/career/solo-exhibitions/#group');
		$("li.page-item-173 a").attr('href','/career/solo-exhibitions/#awards');
		$("li.page-item-179 a").attr('href','/career/solo-exhibitions/#positions');
		$("li.page-item-181 a").attr('href','/career/solo-exhibitions/#permanent');
		$("li.page-item-183 a").attr('href','/career/solo-exhibitions/#stamps');
	}
}
