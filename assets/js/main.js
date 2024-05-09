(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner(0);


  // Fixed Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.fixed-top .container').addClass('shadow-sm').css('max-width', '100%');
    } else {
      $('.fixed-top .container').removeClass('shadow-sm').css('max-width', '85%');
    }
  });


  // Donation
  $('.progress').waypoint(function () {
    $('.progress-bar').each(function () {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, { offset: '80%' });


  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 5,
    time: 2000
  });


  // Event carousel
  $(".event-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: false,
    dots: false,
    loop: true,
    margin: 25,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>'
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });


  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    return false;
  });


})(jQuery);

document.getElementById('mainFab').addEventListener('click', function () {
  var options = document.querySelector('.fab-options');
  options.style.display = options.style.display === 'none' ? 'flex' : 'none';
});



document.addEventListener('DOMContentLoaded', function () {
  var navbarToggler = document.querySelector('.navbar-toggler');
  var navbarCollapse = document.getElementById('navbarCollapse');

  // Function to close navbar
  function closeNavbar() {
    if (navbarCollapse.classList.contains('show')) {
      navbarToggler.click();
    }
  }

  // Event listener for toggler to prevent event propagation
  navbarToggler.addEventListener('click', function (event) {
    event.stopPropagation();
  });

  // Event listener for navbar to prevent event propagation
  navbarCollapse.addEventListener('click', function (event) {
    event.stopPropagation();
  });

  // Event listener for document to close navbar when clicking outside
  document.addEventListener('click', function (event) {
    closeNavbar();
  });

  // Listen for Bootstrap's collapse events if you're using Bootstrap 5
  if (typeof bootstrap !== 'undefined' && bootstrap.Collapse) {
    var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'));
    var collapseList = collapseElementList.map(function (collapseEl) {
      return new bootstrap.Collapse(collapseEl);
    });

    collapseElementList.forEach(function (collapseEl) {
      collapseEl.addEventListener('show.bs.collapse', function () {
        document.addEventListener('click', closeNavbar);
      });
      collapseEl.addEventListener('hide.bs.collapse', function () {
        document.removeEventListener('click', closeNavbar);
      });
    });
  }
});


// GALLERY

// JavaScript for the carousel functionality
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.querySelectorAll(".carousel-item");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

