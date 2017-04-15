// JavaScript Document

/*dropdown menu code start*/

$(document).ready(function(e) {
    $('.menu > ul > li').on("mouseover",function(){
		$(this).children('ul').stop().slideDown(800);
	});
    $('.menu > ul > li').on("mouseleave",function(){
		$(this).children('ul').stop().slideUp(800);
	});
});



/*Slider code start*/
$(document).ready(function(e) {
if (typeof console === "undefined" || typeof console.log === "undefined") {
            console = { log: function(){} };
        }
		$('.banner').fullWidth()
                        .on('fws.start', function(e, data){
                            console.log('Moving '+data.direction+' from slide '+data.status.previous+' to slide '+data.status.current);
                        })
                        .on('fws.finish', function(e, data){
                            console.log('Moved from slide '+data.status.previous+' to slide '+data.status.current);
                        });
						
});
/*Notice board code start*/
$(document).ready(function(e) {
    $('.ntab li').click(function(){
		$(this).addClass('nactive');
		$('.ntab li').not(this).removeClass('nactive');
	});
	$('.lnpOpen').click(function(){
		$('.lastweek_news_part').hide();
		$('.last2week_news_part').hide();
		$('.lats_news_part').show();
	});
	$('.lwOpen').click(function(){
		$('.lastweek_news_part').show();
		$('.last2week_news_part').hide();
		$('.lats_news_part').hide();
	});
	$('.lw2Open').click(function(){
		$('.lastweek_news_part').hide();
		$('.last2week_news_part').show();
		$('.lats_news_part').hide();
	});
	
	$(scrollMe = function(){
		$var = $('.scroller:visible').children("div").first().html();
		$('.scroller:visible').children("div").first().slideUp(function(){
			$(this).remove();
		});
		$('.scroller:visible').append('<div class="wnews_ones">'+ $var +'</div>');
		$('.scroller:visible').children("div").last().hide().slideDown();
	});
	setInterval(function(){ scrollMe() },3000);
	
});

/*Scholarship page hide show code*/
$(document).ready(function(){

        $('.scr_jnn_accordian > p').hide();

        $('.scr_jnn_accordian > h3 > a').click(function(e){

            $('a.toggle').not(this).parent('h3').next('p').slideUp();
            $('a.toggle').not(this).removeClass('fa-minus').addClass('fa-plus');
            $('a.toggle').not(this).parent('h3').removeClass('scr_act');
            $(this).parent('h3').toggleClass('scr_act');
            
            $(this).toggleClass('fa-minus');
            $(this).parent('h3').next('p').slideToggle();
            e.preventDefault();
        });
    });
	
/*lab-workshop page code start*/
 $(document).ready(function() {
 jQuery(function( $ ) {
        $('#example-1 a').tosrus({
            buttons: 'inline',
            pagination  : {
                add         : true,
                type        : 'thumbnails'
                }
            });
                
        });
});
                //** activation code for Workshop part carousel **//

    $(document).ready(function() {
    //standard carousel
        $('#carousel').responsiveCarousel();
                
        //overriding defaults
        $('#carousel_large').responsiveCarousel({
            carousel_item_width_default: .40, 
            carousel_item_padding_default: .05, 
            carousel_item_width_768: .80, 
            carousel_item_padding_768: .10
		});
    });
		
/*POpup code start*/

	$(".civil_button").click(function(){
		$(".pop_civil").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_civil").hide(700);
	});
	
	$(".com_button").click(function(){
		$(".pop_com").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_com").hide(700);
	});
	
	$(".elec_button").click(function(){
		$(".pop_elec").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_elec").hide(700);
	});
	
	$(".mach_button").click(function(){
		$(".pop_mech").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_mech").hide(700);
	});
	
	$(".power_button").click(function(){
		$(".pop_pow").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_pow").hide(700);
	});
	
	$(".rs_button").click(function(){
		$(".pop_rs").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_rs").hide(700);
	});
	
	$(".cons_button").click(function(){
		$(".pop_con").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_con").hide(700);
	});
	
	$(".env_button").click(function(){
		$(".pop_env").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_env").hide(700);
	});
	$(".ass_button").click(function(){
		$(".pop_ass").show(300);
	});
	$(".posiicon").click(function(){
		$(".pop_ass").hide(700);
	});
	


