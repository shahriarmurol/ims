(function($){
    //js marquee
    $('.marquee').marquee({
        //speed in milliseconds of the marquee
        duration: 5000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true
    });
    //news tickers 
    $('.ui-newsticker').newsticker();
    // owl carasul
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        autoplayHoverPause:true,
        margin:10,
        loop:true,
        items:1,
        mouseDrag:true,
        touchDrag:true,
        pullDrag:true,
        freeDrag:true,
        smartSpeed:true,
    });

})(jQuery);