$ = jQuery;

var banner = {

  init: function() {

    $('.image--featured').each(function(){
      var instance = $(this);

      instance.imagesLoaded( function() {
        banner.delegate(instance);
      });
    });
  },

  delegate: function(instance){
    banner.cornerAnimation(instance);

    $(window).scroll(function(){
      debounce(banner.cornerAnimation(instance), 250);
    });

    if($(window).width() >= 768){
      banner.baselineAnimation(instance);
    }
  },

  cornerAnimation: function(instance){
    var offset = $(instance).offset();
    if(!$(instance).hasClass('animated') && offset.top < banner.getTrigger()){
      console.log(offset.top);

      var corners = $(instance.find('.corner'));

      $(instance).addClass('animated');

      TweenMax.to(corners, 1, {x: 0, ease: Power4.easeInOut});
    }
  },

  baselineAnimation: function(instance){

    var baseline = $(instance.siblings('.banner__baseline'));

    TweenMax.to(baseline, 1.1 ,{x: -30, ease: Power4.easeInOut});
  },

  getTrigger: function(){
    var offset = $(window).scrollTop();
    return offset + $(window).height()/1.5;
  }
};


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};