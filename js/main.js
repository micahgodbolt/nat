$( document ).ready(function() {
  var currentSlide = 1;

  function changeSlideTo(slideNumber) {
    $('.slider-items .active').removeClass('active');
    $(".slider-items .slider-item:nth-child(" + slideNumber + ")").addClass('active');
    $('.slider-navigation .active').removeClass('active');
    $(".slider-navigation li:nth-child(" + slideNumber + ")").addClass('active');
  }

  function incrementSlide () {
    if (currentSlide == 4) {
      currentSlide = 1;
    }
    else {
      currentSlide = currentSlide + 1;
    }
    console.log(currentSlide);
    changeSlideTo(currentSlide);
  }

  $('.slider-navigation .slider-nav-link').on('click', function(e) {
    e.preventDefault();
    $this = $(this);
    navNumber = $this.data("slide-number");
    currentSlide = navNumber;
    changeSlideTo(currentSlide);
  });

  setInterval(function(){
    var isHovered = $('.hero').is(":hover"); // returns true or false
    if (!isHovered) {
        incrementSlide();
    };
  }, 6000);

});
