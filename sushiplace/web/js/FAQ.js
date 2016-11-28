/*
 * Let clicking on the title in the list be equal to clicking on the heading of
 * the FAQ section.
 */
window.onload = function() {
	// A new array containing IDs of titles in the title list
	var faqArray = new Array("faq1", "faq2", "faq3", "faq4");
	// A new array containing IDs of headings of the FAQ content
	// sections
	var FAQArray = new Array("FAQ1", "FAQ2", "FAQ3", "FAQ4");
	var i = 0;
	while (i < 6) {
		eval("var faq" + i + "=document.getElementById(faqArray[" + i + "])");
		eval("var FAQ" + i + "=document.getElementById(FAQArray[" + i + "])");
		eval("faq" + i + ".onclick = function() {FAQ" + i + ".click();}");
		i++;
	}
}

/*
 * An simple accordion for displaying sections of FAQ content in #FAQ by using
 * JQuery show() and hide() method.
 */
$(document).ready(function() {
	var FAQArray = [ "#FAQ1", "#FAQ2", "#FAQ3" , "#FAQ4" ];
	var pArray = [ "#p1", "#p2", "#p3", "#p4"];
	$.each(FAQArray, function(i) {
		$(FAQArray[i]).click(function() {
			if ($(pArray[i]).css("display") != "none") {
				$(pArray[i]).hide(400);
			} else {
				$(pArray[i]).show(400);
			}
		});
	});
});