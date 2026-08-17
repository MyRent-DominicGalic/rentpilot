addEventListener('page:before-visit', function() {
  document.querySelector('body').classList.remove('nav-open');
});


// Nav Toggle

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.js--menu-trigger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function($el) {
        $el.addEventListener('click', function() {
          //window.scrollTo(0, 0);

            // Get the "body" element
            var $body = document.getElementsByTagName("BODY")[0];

            // Toggle the class on "body"
            $body.classList.toggle('nav-open');
            $('body').addClass('scrolled');
        });
    });
}


$(document).delegate('.js--lang-trigger', 'click', function() {
    $('body').removeClass('nav-open');
    $('body').removeClass('search-open');
    $('body').toggleClass('lang-open');
});

$(document).delegate('.js--search-trigger', 'click', function() {
    $('body').removeClass('nav-open');
    $('body').removeClass('lang-open');
    $('body').toggleClass('search-open');
});



$(window).scroll(function() {
    // add Scrolled class to body when pass element
    if ($(window).scrollTop() >= 760) {
        $('body').addClass('scrolled');
    } else {
        $('body').removeClass('scrolled');
    }
});


$('.main-nav__links a[href^="/#contact"]').on('click', function() {
  $('body').removeClass('nav-open');
});

function loadFlatpickr() {

    $('.js--apply-dates').on('click', function() {
        var dateReal = $('.js-datepicker.flatpickr-input').val();
        var dateDisplay = $('.js-datepicker.input').val();
        $("#date").val(dateReal);

        if(dateReal) {
          $("#date-display").text(dateDisplay);
        }

    });


    var flatpickrOptions = {
        minDate: "today",
        inline: true,
        altInput: true,
        altFormat: 'j F, Y',
        defaultDate: 'today',
        disableMobile: "true",
        showMonths: 1,
        enable: JSON.parse($('#disabled-dates').val()),
        dateFormat: "Y-m-d",
        closeOnSelect: true,
        locale: {
            firstDayOfWeek: 1,
            rangeSeparator: ' - '
        },
    };

    $calendar = flatpickr(".js-datepicker", flatpickrOptions);

}

function loadTelInput() {

    $.getScript("/themes/tzpodgora/assets/vendor/inputtel/intlTelInput.min.js", function() {

        $("input[type=tel]").intlTelInput({
            initialCountry: "gb",
            nationalMode: false,
            preferredCountries: ["us", "gb", "de", "fr", "ch", "no", "sw", "ca", "nz", "au"],
            autoPlaceholder: "aggressive",
            placeholderNumberType: "mobile",
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                return "e.g. " + "+44 7400 12345";
            },
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "/themes/krkatours/assets/vendor/inputtel/utils.js"
        });

        $('body').addClass('loaded-tel-input');

    });

    $('<link/>', {
        rel: 'stylesheet',
        type: 'text/css',
        href: "/themes/krkatours/assets/vendor/inputtel/intlTelInput.css"
    }).appendTo('head');

}


function controlsInit () {

  const $controls = $('.js--booking-form .controls').find('.control')
  $controls.on('click', function (e) {
    e.preventDefault()
    const $control = $(this)
    const $input = $control.closest('.form-field--quantity').find('.form-field__input')
    const v = +$input.val()
    const x = $control.hasClass('decrease') ? -1 : 1

    if (x < 0 && !v) {
      return
    }
    if($input.val() > 15) {
      return
    }
    $input.val(v + x)
    $input.trigger('change')
  })

}

function goToNextHighlightsSlideInit() {
  const $container = $('.js-slider-highlights')
  const $btnNext = $container.closest('section').find('.js-goto-next-slide')

  $btnNext.on('click', function() {
    var leftPos = $container.scrollLeft();
      $container.animate({
        scrollLeft: leftPos + ($(window).width() / 1.5)
      }, 400);
  })
}

function goToNextItenerarySlideInit() {
  const $container = $('.js-slider-itenerary')
  const $btnNext = $container.closest('section').find('.js-goto-next-slide')

  $btnNext.on('click', function() {
    var leftPos = $container.scrollLeft();
      $container.animate({
        scrollLeft: leftPos + ($(window).width()  + 14)
      }, 400);
  })
}


function highlightsInit () {
  var $sectionHighlights = $('.js-section-highlights')
  var $highlightsSlider = $('.js-slider-highlights')
  $highlightsSlider.slick({
    mobileFirst: true,
    draggable: true,
    arrows: false,
    dots: false,
  //  autoplay: true,
    loop: false,
    infinite: false,
    centerMode: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    adaptiveHeight: false,
    waitForAnimate: false,
    touchThreshold: 50,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 567,
      settings: {
        centerMode: false,
        draggable: true,
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 800,
      settings: {
        centerMode: false,
        draggable: true,
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 1099,
      settings: {
        centerMode: false,
        draggable: true,
        slidesToShow: 4,
        slidesToScroll: 4,
      },
    }],
  })

  const $btnNext = $sectionHighlights.find('.js-goto-next-slide')
  $btnNext.on('click', function () {
    const slideIndex = $highlightsSlider.slick('slickCurrentSlide')
    if (slideIndex === 9) {
      $highlightsSlider.slick('slickGoTo', 0, false)
    } else {
      $highlightsSlider.slick('slickNext')
    }
  })

}


function iteneraryInit () {

  var $sectionItenerary = $('.js-section-itenerary')
  var $itenerarySlider = $('.js-slider-itenerary')
  $itenerarySlider.slick({
    mobileFirst: true,
    draggable: true,
    arrows: false,
    dots: false,
  //  autoplay: true,
    loop: false,
    infinite: false,
    centerMode: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    adaptiveHeight: false,
    waitForAnimate: false,
    touchThreshold: 50,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        centerMode: false,
        draggable: true,
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 1099,
      settings: {
        centerMode: false,
        draggable: true,
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    }],
  })


  const $btnNext = $sectionItenerary.find('.js-goto-next-slide')
  $btnNext.on('click', function () {
    const slideIndex = $itenerarySlider.slick('slickCurrentSlide')
    if (slideIndex === 7) {
      $itenerarySlider.slick('slickGoTo', 0, false)
    } else {
      $itenerarySlider.slick('slickNext')
    }
  })

}



function policyInit () {
  var $sectionPolicy = $('.js-section-policy')
  var $policySlider = $('.js-slider-policy')
  $policySlider.slick({
    mobileFirst: true,
    draggable: true,
    arrows: false,
    dots: false,
    loop: false,
    infinite: false,
    centerMode: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    adaptiveHeight: false,
    waitForAnimate: false,
    touchThreshold: 50,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        centerMode: false,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }],
  })

  const $btnNext = $sectionPolicy.find('.js-goto-next-slide')
  $btnNext.on('click', function () {
    const slideIndex = $policySlider.slick('slickCurrentSlide')
    $policySlider.slick('slickNext')
  })

}

function tipsInit () {
  const $tipsSlider = document.getElementById('js-tips-nav')
  const sliderLength = $('.tips__slider-images').find('.tips-image')
  const sLength = sliderLength.length
  let max
  if (sLength) {
    noUiSlider.create($tipsSlider, {
      start: 0,
      connect: [true, false],
      step: 1,
      range: {
        min: 0,
        max: sLength - 1,
      },
    })

    const $container = $('.js-section-tips')
    const $tipsImage = $container.find('.tips-image')
    const $tipsNavItem = $('.tips__slider-items li')

    $tipsSlider.noUiSlider.on('update', function () {
      max = $tipsSlider.noUiSlider.get()
      const items = []
      $tipsNavItem.removeClass('active')
      $tipsImage.removeClass('active')
      for (var i = 0; i <= max; i++) {
        items.push(i)
        if ($tipsNavItem.eq(i) !== 0) {
          $tipsNavItem.eq(i).addClass('active')
        }
        $tipsImage.eq(i).addClass('active')
      }
    })

    let isLeaving = false
    const tipsSection = document.getElementById('tips')
    const config = {
      rootMargin: '-50px 0px -55% 0px',
      threshold: 0.1,
    }
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          isLeaving = true
          autoPlayTips($tipsSlider)
        } else if (isLeaving) {
          isLeaving = false
        }
      })
    }, config)
    if (document.getElementById('tips')) {
      observer.observe(tipsSection)
    }

    function autoPlayTips (el) {
      el.noUiSlider.set(0)
      setTimeout(function () {
        el.noUiSlider.set(1)
        setTimeout(function () {
          el.noUiSlider.set(2)
          setTimeout(function () {
            el.noUiSlider.set(3)
            setTimeout(function () {
              el.noUiSlider.set(4)
              setTimeout(function () {
                el.noUiSlider.set(5)
                setTimeout(function () {
                  el.noUiSlider.set(6)
                  setTimeout(function () {
                    el.noUiSlider.set(7)
                    setTimeout(function () {
                      el.noUiSlider.set(8)
                    }, 250)
                  }, 250)
                }, 250)
              }, 200)
            }, 200)
          }, 200)
        }, 150)
      }, 100)
    }
  }
}

if($(window).width() > 800) {
  iteneraryInit()
  highlightsInit()
} else {
  goToNextHighlightsSlideInit()
  goToNextItenerarySlideInit()
}

if($(window).width() > 567) {
  policyInit()
}

var headroom  = new Headroom(document.querySelector("body"), {
  tolerance : {
        up : 30,
        down : 10
    },
});
headroom.init();


if ($('body').hasClass('page-booking')) {
    loadTelInput()
    loadFlatpickr()
}

$(document).ready(function() {
  tipsInit()
  controlsInit()

  if($(window).width() > 567) {
    $("[data-paroller-factor]").paroller();
  }

  $('.js-paroller-background').paroller({
    factor: 0.15,
    type: 'background'
  });

  $('.js-paroller-foreground').paroller({
    factor: 0.1,
    type: 'foreground'
  });

});
