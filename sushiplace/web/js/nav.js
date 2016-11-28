/*
 * This is a drop-down menu for gallery pages created by using JQuery.
 * When mouse is over the gallery button, the hide menu will slide up;
 * and when the mouse leaves the gallery or sponsor buttons or the drop-down menu,
 * the drop-down menu will slide up and hide again.
 */
$(document).ready(function() {
	$("nav>ul>li").bind('mouseover', function() {
		$(this).children('ul').slideDown('normal');
	}).bind('mouseleave', function() {
		$(this).children('ul').slideUp('normal');
	});
	$('nav>ul>li>ul li').bind('mouseover', function() {
		$(this).children('ul').slideDown('normal');
	}).bind('mouseleave', function() {
		$(this).children('ul').slideUp('normal');
	});
});
