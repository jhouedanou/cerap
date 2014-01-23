(function ($) {
$(document).ready(function() {
	$('div#mid.ym-wbox div#boxing.ym-grid div#motdudirecteur.ym-g25 div.ym-gbox div.region div#block-views-le-mot-du-directeur-block.block div.content div.view div.view-content').before('<div id="nav"></div>').cycle({
		speed: 1000,
        timeout: 3000,
        fx: 'fade',
		timeout: 0, 
		next:'a#nexta.jermaine', 
		prev: 'a#preva.jermaine',
		pager:'#nav'  	
		});
	$('div#block-views-teaser-actualit-s-block.block div.content div.view div.view-content div.item-list ul').cycle({
		speed: 1000,
        timeout: 3000,
        fx: 'fade',
		timeout: 0, 
		next:'a#next.jermaine', 
		prev: 'a#prev.jermaine'
		});
  });
  
}(jQuery));

