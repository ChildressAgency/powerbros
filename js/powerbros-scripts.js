/*
 Normalize Carousel Heights - pass in Bootstrap Carousel items. https://coderwall.com/p/uf2pka/normalize-twitter-bootstrap-carousel-slide-heights
*/
$.fn.carouselHeights = function () {
  var items = $(this), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  var normalizeHeights = function () {
    items.each(function () { //add heights to array
      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value
    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  };

  normalizeHeights();

  $(window).on('resize orientationchange', function () {
    //reset vars
    tallest = 0;
    heights.length = 0;

    items.each(function () {
      $(this).css('min-height', '0'); //reset min-height
    });
    normalizeHeights(); //run it again 
  });
};

jQuery(document).ready(function($){
  $('#testimonial-slider .carousel-inner .item').carouselHeights();

  if (typeof $.fn.swiperight == 'function') {
    $('.carousel.slide').swiperight(function () {
      $(this).carousel('prev');
    });
    $('.carousel.slide').swipeleft(function () {
      $(this).carousel('next');
    });
  }

  // our work page gallery
  // using isotope jquery library
  // https://isotope.metafizzy.co/
  var filters = {};
  var $container = $('.grid');
  $container.isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: '.grid-sizer'
    }
  });
  $('#filters').on('change', function(event){
    var checkbox = event.target;
    var $checkbox = $(checkbox);
    var group = $checkbox.parents('.option-set').attr('data-group');
    var filterGroup = filters[group];

    if(!filterGroup){
      filterGroup = filters[group] = [];
    }

    if(checkbox.checked){
      filterGroup.push(checkbox.value);
    }
    else{
      var index = filterGroup.indexOf(checkbox.value);
      filterGroup.splice(index, 1);
    }

    var comboFilter = getComboFilter();
    //console.log(filterGroup);
    $container.isotope({ filter: comboFilter });
  });

  $container.isotope('on', 'layoutComplete', function(a,b){
    $('.grid').css('height', '100% !important');
  });

  function getComboFilter(){
    var combo = [];
    for (var prop in filters) {
      var group = filters[prop];
      if (!group.length) {
        // no filters in group, carry on
        continue;
      }
      // add first group
      if (!combo.length) {
        combo = group.slice(0);
        continue;
      }
      // add additional groups
      var nextCombo = [];
      // split group into combo: [ A, B ] & [ 1, 2 ] => [ A1, A2, B1, B2 ]
      for (var i = 0; i < combo.length; i++) {
        for (var j = 0; j < group.length; j++) {
          var item = combo[i] + group[j];
          nextCombo.push(item);
        }
      }
      combo = nextCombo;
    }
    var comboFilter = combo.join(', ');
    return comboFilter;    
  }
});