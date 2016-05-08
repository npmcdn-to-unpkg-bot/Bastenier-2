var filters = {

  init: function() {
    filters.setInitialVisibility();

    $(".post-categories__taxonomies").click(function(e){
      e.preventDefault();

      filters.setActiveState($(this));
      $(".post-filters").slideDown();
    });
  },

  setInitialVisibility: function() {
    if($('.post-categories__taxonomies').hasClass('active')){
      $(".post-filters").css('display', 'block');
    } else {
      $(".post-filters").css('display', 'none');
    }
  },

  setActiveState: function(activeItem) {
    $('.post-categories a').removeClass('active');
    activeItem.addClass('active');
  }

};