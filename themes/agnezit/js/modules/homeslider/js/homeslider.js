/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$(document).ready(function(){

	if (typeof(homeslider_speed) == 'undefined')
		homeslider_speed = 500;
	if (typeof(homeslider_pause) == 'undefined')
		homeslider_pause = 3000;
	if (typeof(homeslider_loop) == 'undefined')
		homeslider_loop = true;
	if (typeof(homeslider_width) == 'undefined')
		homeslider_width = 779;


	$('.homeslider-description').click(function () {
		window.location.href = $(this).prev('a').prop('href');
	});

	if ($('#htmlcontent_top').length > 0)
		$('#homepage-slider').addClass('col-xs-8');
	else
		$('#homepage-slider').addClass('col-xs-12');

	// if (!!$.prototype.bxSlider)
	// 	$('#homeslider').bxSlider({
	// 		useCSS: false,
	// 		maxSlides: 1,
	// 		slideWidth: homeslider_width,
	// 		infiniteLoop: homeslider_loop,
	// 		hideControlOnEnd: true,
	// 		pager: false,
	// 		autoHover: true,
	// 		auto: homeslider_loop,
	// 		speed: parseInt(homeslider_speed),
	// 		pause: homeslider_pause,
	// 		controls: true
	// 	});

	var description_effect = 'bounceInUp'; //https://daneden.github.io/animate.css/

	if (!!$.prototype.bxSlider)
		$('#homeslider').bxSlider({
			useCSS: false,
			maxSlides: 1,
			slideWidth: homeslider_width,
			infiniteLoop: homeslider_loop,
			hideControlOnEnd: false,
			pager: false,
			autoHover: true,
			auto: homeslider_loop,
			speed: parseInt(homeslider_speed),
			pause: homeslider_pause,
			controls: true,
			easing: 'easeInOutExpo',
			onSliderLoad: function (a, b, c) {
		        var elem = $('#homeslider > li .slid_label1').eq(a);
		        elem.addClass("wow animated "+description_effect);
			    var elem = $('#homeslider > li .slid_label2').eq(a);
		        elem.addClass("wow animated2 "+description_effect);
				var elem = $('#homeslider > li .slid_shop').eq(a);
		        elem.addClass("wow animated3 "+description_effect);
		    },
		    onSlideAfter: function (currentSlide, totalSlideQty, currentSlideHtmlObject) {
		        var elem = currentSlide.find('.slid_label1');
		        elem.show().addClass("wow animated "+description_effect);
		        var elem = currentSlide.find('.slid_label2');
		        elem.show().addClass("wow animated2 "+description_effect);
		        var elem = currentSlide.find('.slid_shop');
		        elem.show().addClass("wow animated3 "+description_effect);
		    },
		    onSlideBefore: function (a, b, c) {
		    	var elem = $('#homeslider .slid_label1');
		        elem.removeClass("wow animated "+description_effect).removeAttr('style').hide();
		    	var elem = $('#homeslider .slid_label2');
		        elem.removeClass("wow animated2 "+description_effect).removeAttr('style').hide();
				var elem = $('#homeslider .slid_shop');
		        elem.removeClass("wow animated3 "+description_effect).removeAttr('style').hide();
		    }
		});
});