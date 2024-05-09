//function progressBarScroll() {
//  let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
//      height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
//      scrolled = (winScroll / height) * 100;
//  document.getElementById("progressBar").style.height = scrolled + "%";
//}

//window.onscroll = function () {
//  progressBarScroll();
//};

$(".nav-link").click(function() {
    $(".nav-link").removeClass("active");
    $(this).addClass("active");
});



$(window).scroll(function() {
    var sc = $(window).scrollTop()
    if (sc > 0) {
        $("header").addClass("headerfix")
    } else {
        $("header").removeClass("headerfix")
    }
});

$(window).scroll(function() {
    var sc = $(window).scrollTop()
    if (sc > 0) {
        $(".arrowtoptobottom").addClass("bottomarrow")
    } else {
        $(".arrowtoptobottom").removeClass("bottomarrow")
    }
});

//$(window).scroll(function () {
//	if ($(window).scrollTop() >= 509) {
//		$('.lefttopfixed').addClass('fixed-sidebar');
//	}
//	else {
//		$('.lefttopfixed').removeClass('fixed-sidebar');
//	}
//});

// Prepend back button to sub menu(s)
$('.nav__sub').prepend('<li class="nav__item"><a class="nav__link sub__close" href="#"><i class="fas fa-chevron-left"></i> Back</a></li>');

// Close out sub menu
$('.sub__close').click(function(e) {
    $(this).parent().parent().removeClass('is-active');
});

// Trigger sub menu
$('.nav__link').click(function(e) {
    $(this).siblings().addClass('is-active');
});






$(document).ready(function() {
    if ($(window).width() < 575) {
        $(".quicklinkview").click(function() {
            $(".quicklinks ul").slideToggle();
            $(".quicklinks").toggleClass("arrowrotate")
        });
    }

    if ($(window).width() < 992) {
        $(".left_subheading").click(function() {
            $(".leftmenupartbox").slideToggle();
            $(".left_subheading").toggleClass("arrowrotate")
        });
    }

    $(".set > a").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this)
                .siblings(".content")
                .slideUp(200);
            $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
        } else {
            $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
            $(".set > a").removeClass("active");
            $(this).addClass("active");
            $(".content").slideUp(200);
            $(this)
                .siblings(".content")
                .slideDown(200);
        }
    });

    $('.first-level-navigation ul li').click(function() {
        var tab_id = $(this).attr('data-tab');

        $('.first-level-navigation ul li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })

    $('.second-level-navigation ul li').click(function() {
        var tab_id = $(this).attr('data-tab');

        $('.second-level-navigation ul li').removeClass('current');
        $('.third-level-navigation .tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })


})

const burger = document.querySelector('.headertop_left');
burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    $(".headertop_right").addClass('fullmenuopengetintouch');
    $(".fullmenuopengetintouch").click(function() {
        $(".intSchMenu").removeClass("isOpened")
        $(".headertop_left").removeClass("active")
    });
});

function menuopneview() {
    $('.intSchMenu').toggleClass('isOpened')
}




$(function() {
    var $ul = $('.leftmenupartbox > ul');

    $ul.find('li a').click(function(e) {
        var $li = $(this).parent();

        if ($li.find('ul').length > 0) {
            e.preventDefault();

            if ($li.hasClass('selected')) {
                $li.removeClass('selected').find('li').removeClass('selected');
                $li.find('ul').slideUp(400);
                $li.find('a em').removeClass('mdi-flip-v');
            } else {

                if ($li.parents('li.selected').length == 0) {
                    $ul.find('li').removeClass('selected');
                    $ul.find('ul').slideUp(400);
                    $ul.find('li a em').removeClass('mdi-flip-v');
                } else {
                    $li.parent().find('li').removeClass('selected');
                    $li.parent().find('> li ul').slideUp(400);
                    $li.parent().find('> li a em').removeClass('mdi-flip-v');
                }

                $li.addClass('selected');
                $li.find('>ul').slideDown(400);
                $li.find('>a>em').addClass('mdi-flip-v');
            }
        }
    });


    $('.leftmenupartbox > ul ul').each(function(i) {
        if ($(this).find('>li>ul').length > 0) {
            var paddingLeft = $(this).parent().parent().find('>li>a').css('padding-left');
            var pIntPLeft = parseInt(paddingLeft);
            var result = pIntPLeft + 20;

            $(this).find('>li>a').css('padding-left', result);
        } else {
            var paddingLeft = $(this).parent().parent().find('>li>a').css('padding-left');
            var pIntPLeft = parseInt(paddingLeft);
            var result = pIntPLeft + 0;

            $(this).find('>li>a').css('padding-left', result).parent().addClass('selected--last');
        }
    });

    //var t = ' li > ul ';
    //for (var i = 1; i <= 10; i++) {
    //	$('.allpagesview-left > ul > ' + t.repeat(i)).addClass('subMenuColor' + i);
    //}

    //var activeLi = $('li.selected');
    //if (activeLi.length) {
    //	opener(activeLi);
    //}

    //function opener(li) {
    //	var ul = li.closest('ul');
    //	if (ul.length) {

    //		li.addClass('selected');
    //		ul.addClass('open');
    //		li.find('>a>em').addClass('mdi-flip-v');

    //		if (ul.closest('li').length) {
    //			opener(ul.closest('li'));
    //		} else {
    //			return false;
    //		}

    //	}
    //}

});



$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 300; // How many characters are shown by default
    var ellipsestext = "";
    var moretext = "Read More";
    var lesstext = "Read Less";

    $('.moreq').each(function() {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '...</span><span class="morecontent"><span>' + h + '</span><a href="javascript:;" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

});




$(document).ready(function() {
    /* Check width on page load*/
    if ($(window).width() < 767) {
        $('.toppers').addClass('owl-carousel').addClass('owl-theme');
        $('.toppers').owlCarousel({
            navigation: true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            //loop: true,
            //autoplay: true,
            //animateOut: 'fadeOut',
            //animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 2
                },
                460: {
                    items: 2
                }
            }
        });
    } else {

    }



});



$(document).ready(function() {
    $('.bannerslider').owlCarousel({
        items: 1,
        navigation: true,
        nav: true,
        loop: true,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
    })

    $('.appreciation').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    $('.supportersslider').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('.schooleventsslider').owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        //autoplay: true,
        //animateOut: 'fadeOut',
        //animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('.tabingslider').owlCarousel({
        margin: 15,
        loop: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoWidth: true
    })

    $('.announcement-right').owlCarousel({
        items: 1,
        loop: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],

    });

    $('.singleviewslider').owlCarousel({
        items: 1,
        navigation: true,
        nav: true,
        loop: true,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
    });

    $('.imgdowntextslider').owlCarousel({
        items: 1,
        navigation: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        loop: true,
        autoplay: true
    });

    AOS.init({});
});
$(document).ready(function() {
    $('.aurcampusslider').owlCarousel({
        loop: true,
        center: true,
        items: 2,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplayTimeout: 5000,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            }
        }
    });
});