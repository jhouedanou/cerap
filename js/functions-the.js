// jQuery for Drupal 7 [BEGIN]
(function ($) {
// [jQuery BEGIN] début des fonctions
$(document).ready(function() {
        $('.caption').jcaption();

$("div#articleclass.content table tbody tr:odd").addClass("oddb");
var $container = $('div#block-views-News-block_1.block div.content div.view div.view-content div.item-list ul');
      $container.masonry({
          itemSelector: 'li.views-row',
          layoutMode: 'masonry'
      });
var $container2 = $('.unct-team div.view div.view-content div.item-list ul');
      $container2.masonry({
          itemSelector: 'li.views-row',
          layoutMode: 'masonry'
      });
  var $container3 = $('.goals div.view div.view-content div.item-list ul');
      $container3.masonry({
          itemSelector: 'li.views-row',
          layoutMode: 'masonry'
      });

$('div#block-menu-menu-socialnetworks.block div.content ul.menu li.leaf a.socialicon').html('');
$('div#searchsocia.ym-g33 div#search div.block div.content form#search-block-form div div.container-inline input.form-submit').attr('value','');
$('.imagefield').addClass('flexible');
$('.unct-team  div.view div.view-content div.item-list ul li.views-row div.views-field-field-photo-team-fid span.field-content a.imagefield img').addClass('flexible');
$('div#articleclass.content div.field div.field-items div.field-item img.imagefield').addClass('flexible');
$('div#block-views-banner-slideshow-block.block div.content div.view div.view-content div.slideshow ul.cycle-slideshow li img').addClass('flexible');
$('.goals div.view div.view-content div.item-list ul li.views-row div.views-field-field-img-commitment-fid div.field-content a.imagefield img.imagefield').addClass('flexible');
ww = document.body.clientWidth;
$('.sitename').fitText(1,{ minFontSize: '20px', maxFontSize: '54px' });
jQuery(document).ready(function() {
  jQuery(".nav li a").each(function() {
    if (jQuery(this).next().length > 0) {
      jQuery(this).addClass("parent");
    };
  })
  jQuery(".toggleMenu").click(function(e) {
    e.preventDefault();
    jQuery(this).toggleClass("active");
    jQuery(".nav").toggle();
  });
  adjustMenu();
})
jQuery(window).bind('resize orientationchange', function() {
  ww = document.body.clientWidth;
  adjustMenu();
});

var adjustMenu = function() {
  if (ww < 768) {
    jQuery(".toggleMenu").css("display", "inline-block");
    if (!jQuery(".toggleMenu").hasClass("active")) {
      jQuery(".nav").hide();
    } else {
      jQuery(".nav").show();
    }
    jQuery(".nav li").unbind('mouseenter mouseleave');
    jQuery(".nav li a.parent").unbind('click').bind('click', function(e) {
      // must be attached to anchor element to prevent bubbling
      e.preventDefault();
      jQuery(this).parent("li").toggleClass("hover");
    });
  }
  else if (ww >= 768) {
    jQuery(".toggleMenu").css("display", "none");
    jQuery(".nav").show();
    jQuery(".nav li").removeClass("hover");
    jQuery(".nav li a").unbind('click');
    jQuery(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
      // must be attached to li so that mouseleave is not triggered when hover over submenu
      jQuery(this).toggleClass('hover');
    });
  }
}
  });
// jQuery for Drupal 7 [END]
}(jQuery));

