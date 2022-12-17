// Example starter JavaScript for disabling form submissions if there are invalid fields
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });

    $('.bannerCarousel').owlCarousel({
      loop: true,
      items: 7,
      margin: 0,
      nav: true,
      dots: true,
      autoplay: false,
      center: true,
      freeDrag: false,
      lazyLoad: true,
      autoplayTimeout: 3500,
      autoplayHoverPause: true,
      smartSpeed: 1200,
      responsiveClass: true,
      responsive: {
          0: {
              items: 1,
              nav: false,
              dots: false,
          },
          768: {
              items: 1,
              nav: true,
              dots: true,
          },
      },
      navText: ["PREV", "NEXT"]
  });

  

  $(document).ready(function () {
    if ($(window).width() > 767) {
      $('.newAddedCarousel').owlCarousel({
        loop: true,
        items: 7,
        margin: 20,
        nav: true,
        dots: false,
        autoplay: false,
        center: false,
        freeDrag: false,
        lazyLoad: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 2.5,
            },
            768: {
              items: 3,
            },
            992: {
              items: 4,
            },
            1200: {
              items: 5,
              nav: true,
          },
        },
        navText: ["", ""]
    });
    } else {
      var owl = $('.newAddedCarousel');
      owl.trigger('destroy.owl.carousel');
      owl.addClass('off');
    }
});


$(document).ready(function () {
  if ($(window).width() > 767) {
    $('.newAddedCarousel2').owlCarousel({
      loop: true,
      items: 7,
      margin: 20,
      nav: true,
      dots: false,
      autoplay: false,
      center: false,
      freeDrag: false,
      lazyLoad: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      smartSpeed: 1200,
      responsiveClass: true,
      responsive: {
          0: {
              items: 2,
          },
          576: {
              items: 2.5,
          },
          768: {
            items: 3,
          },
          992: {
            items: 3,
          },
          1200: {
            items: 4,
            nav: true,
        },
      },
      navText: ["", ""]
  });
  } else {
    var owl = $('.newAddedCarousel2');
    owl.trigger('destroy.owl.carousel');
    owl.addClass('off');
  }
});

  $('.brandCarousel').owlCarousel({
    loop: true,
    items: 7,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: false,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 3.2,
        },
        576: {
            items: 4,
        },
        768: {
          items: 4.5,
        },
        992: {
          items: 5.5,
        },
        1200: {
          items: 7,
          nav: true,
      },
    },
    navText: ["", ""]
});

$('.brandCarousel2').owlCarousel({
  loop: true,
  items: 6,
  margin: 20,
  nav: true,
  dots: false,
  autoplay: false,
  center: false,
  freeDrag: false,
  lazyLoad: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 1200,
  responsiveClass: true,
  responsive: {
      0: {
          items: 3.5,
      },
      576: {
          items: 4,
      },
      768: {
        items: 4,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 5,
        nav: true,
    },
  },
  navText: ["", ""]
});

});

$(document).ready(function() {
  
  // variables 
  var toTop = $('.goToTop');
  // logic
  toTop.on('click', function() {
    $('.scrollPart').animate({
      scrollTop: $('.scrollPart').offset().top - 100,
    });
  });

});

$("#FilterShow").click(function(){
  $("#filterBar").toggleClass("show");
  $(".scrollPart").toggleClass("overflow-hidden");
});



$('.plcImageSlider').owlCarousel({
  loop: true,
  items: 6,
  margin: 0,
  nav: false,
  dots: true,
  autoplay: false,
  center: true,
  freeDrag: false,
  lazyLoad: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 1200,
  responsiveClass: true,
  responsive: {
      0: {
          items: 1,
      },
      576: {
          items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },
      1200: {
        items: 1,
    },
  },
});


    $(document).ready(function(){
        $("#gridView").click(function(){
            $(".plcViewBox").removeClass("plcListView");
            $(".listView").removeClass("active");
            $(".gridView").addClass("active");
            $('.plcImageSlider').trigger('refresh.owl.carousel');
        });
    });
    $(document).ready(function(){
        $("#listView").click(function(){
            $(".plcViewBox").addClass("plcListView");
            $(".gridView").removeClass("active");
            $(".listView").addClass("active");
            $('.plcImageSlider').trigger('refresh.owl.carousel');
        });
    });

    $('.productShowCarousel').owlCarousel({
      loop: true,
      items: 6,
      margin: 5,
      nav: true,
      dots: false,
      autoplay: false,
      center: true,
      freeDrag: false,
      lazyLoad: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      smartSpeed: 1200,
      responsiveClass: true,
      responsive: {
          0: {
              items: 5,
              nav: true,
              dots: false,
          },
          400: {
            items: 5.5,
            nav: true,
            dots: false,
        },
          768: {
              items: 3.8,
              nav: true,
              dots: false,
          },
          992: {
              items: 3.6,
              nav: true,
              dots: false,
          },
          1200: {
              items: 4.8,
              nav: true,
              dots: false,
          },
          1400: {
            items: 5.8,
            nav: true,
            dots: false,
        },
      },
      // navText: ["PREV", "NEXT"]
  });


$(document).ready(function () {
  $('.preloader').remove();
});
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


// Fetch all the forms we want to apply custom Bootstrap validation styles to
const forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.from(forms).forEach(form => {
  form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }

    form.classList.add('was-validated')
  }, false)
})
$(document).ready(function () {
  $('.dropifyImage').dropify({
    messages: {
      default: 'Add Image',
    }

  });
})