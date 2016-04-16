$ = jQuery;

var carousel = {

  init: function() {

    if($(window).width() >= 768){
      carousel.create();
      carousel.createNav();
    }
  },

  create: function() {
    $(".taxonomy-overview__content").slick({
      slidesToShow: 1,
      lazyLoad: "progressive",
      arrows: false
    });
  },

  createNav: function() {
    $(carousel.setActiveState($('.taxonomy-overview__navigation li').first()));

    $('.taxonomy-overview__navigation li').click(function(){
      var index = $(this).index();
      carousel.setActiveState($(this));

      $('.taxonomy-overview__content').slick('slickGoTo', index);
    });
  },

  setActiveState: function(activeItem) {
    $('.taxonomy-overview__navigation li').removeClass('active');
    activeItem.addClass('active');
  }

};