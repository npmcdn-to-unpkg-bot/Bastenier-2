$ = jQuery;

var banner = {

  init: function() {

    var instance = $('.banner');

    instance.imagesLoaded( function() {
      banner.delegate(instance);
    });
  },

  delegate: function(instance){
    banner.cornerAnimation(instance);

    if($(window).width() >= 768){
      banner.baselineAnimation(instance);
    }
  },

  cornerAnimation: function(instance){

    var corners = $(instance.find('.corner'));

    TweenMax.to(corners, 1, {x: 0, ease: Power4.easeInOut});
  },

  baselineAnimation: function(instance){

    var baseline = $(instance.find('.banner__baseline'));

    TweenMax.to(baseline, 1.1 ,{x: -30, ease: Power4.easeInOut});
  }
};