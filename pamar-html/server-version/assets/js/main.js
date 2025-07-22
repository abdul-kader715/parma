(function ($) {
    "use strict";

    $(window).on("load", function () {
        $(".preloader").fadeOut();
        isotopeintial();
    });

    if ($(".preloader").length > 0) {
        $(".preloaderCls").each(function () {
            $(this).on("click", function (e) {
                e.preventDefault();
                $(".preloader").css("display", "none");
            });
        });
    }

    function onePageNav(element) {
        if ($(element).length > 0) {
            $(element).each(function () {
                $(this)
                    .find("a")
                    .each(function () {
                        $(this).on("click", function () {
                            var target = $(this.getAttribute("href"));
                            if (target.length) {
                                event.preventDefault();
                                $("html, body")
                                    .stop()
                                    .animate(
                                        {
                                            scrollTop: target.offset().top - 10,
                                        },
                                        1000
                                    );
                            }
                        });
                    });
            });
        }
    }
    onePageNav(".onepage-nav");

    $(".mobile-menu-active").vsmobilemenu({
        menuContainer: ".th-mobile-menu",
        expandScreenWidth: 992,
        menuToggleBtn: ".th-menu-toggle",
    });

    /*---------- 04. Sticky fix ----------*/
   $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        if (topPos > 500) {
            $('.th-header').addClass('sticky');
        } else {
            $('.th-header').removeClass('sticky')
        }
    })

    /*---------- 05. Scroll To Top ----------*/
    // progressAvtivation
    if($('.scroll-top')) {
        
        var scrollTopbtn = document.querySelector('.scroll-top');
        var progressPath = document.querySelector('.scroll-top path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
        var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress);	
        var offset = 50;
        var duration = 750;
        jQuery(window).on('scroll', function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery(scrollTopbtn).addClass('show');
            } else {
                jQuery(scrollTopbtn).removeClass('show');
            }
        });				
        jQuery(scrollTopbtn).on('click', function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    }

    if ($(".background-image").length > 0) {
        $(".background-image").each(function () {
            var src = $(this).attr("data-th-img");
            $(this).css({
                "background-image": "url(" + src + ")",
            });
        });
    }

    function isotopeintial() {
        // Isotope initialization
        var $isotope = $(".filter-active").isotope({
            filter: "*",
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: false,
            },
        });

        // Isotope filter
        $(".filter-menu").on("click", "button", function () {
            var $this = $(this);
            $(".filter-menu").find("button").removeClass("active");
            $this.addClass("active");
            var selector = $this.attr("data-filter");
            $isotope.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: false,
                },
            });
            return false;
        });
    }

    /*----------- 07. Global Slider ----------*/   
    $('.th-slider').each(function () {
        var thSlider = $(this);
        var settings = $(this).data('slider-options') || {};
        
        // Store references to the navigation buttons
        var prevArrow = thSlider.find('.slider-prev');
        var nextArrow = thSlider.find('.slider-next');
        var paginationEl1 = thSlider.find('.slider-pagination').get(0);
        var paginationEl2 = thSlider.find('.slider-pagination2');
        var progressBarEl = thSlider.find('.slider-pagination-progressbar2 .slider-progressbar-fill');
    
        var sliderDefault = {
            slidesPerView: 1,
            spaceBetween: settings.spaceBetween || 24,
            loop: settings.loop !== false,
            speed: settings.speed || 1000,
            autoplay: settings.autoplay || { delay: 6000, disableOnInteraction: false },
            navigation: {
                prevEl: prevArrow.get(0),
                nextEl: nextArrow.get(0),
            },
            pagination: {
                el: paginationEl1,
                type: settings.paginationType || 'bullets',
                clickable: true,
                renderBullet: function (index, className) {
                    var number = index + 1;
                    var formattedNumber = number < 10 ? '0' + number : number;
                    return '<span class="' + className + '" aria-label="Go to Slide ' + formattedNumber + '"></span>';
                },
            },
            on: {
                init: function () {
                    updatePagination(this);
                    updateProgressBar(this);
                },
                slideChange: function () {
                    updatePagination(this);
                    updateProgressBar(this);
                },
            },
        };
    
        var options = $.extend({}, sliderDefault, settings);
        var swiperInstance = new Swiper(thSlider.get(0), options);
    
        // Update Pagination and other UI elements
        function updatePagination(swiper) {
            var activeIndex = swiper.realIndex + 1; 
            var totalSlides = swiper.slides.length;
            paginationEl2.html(
                '<span class="current-slide">' +
                (activeIndex < 10 ? '0' + activeIndex : activeIndex) +
                '</span> <span class="divider">/</span> <span class="total-slides">' +
                (totalSlides < 10 ? '0' + totalSlides : totalSlides) +
                '</span>'
            );
        }
    
        function updateProgressBar(swiper) {
            var progress = ((swiper.realIndex + 1) / swiper.slides.length) * 100;
            progressBarEl.css('height', progress + '%');
        }

        if ($('.slider-area').length > 0) {
            $('.slider-area').closest(".container").parent().addClass("arrow-wrap");
        }
    
    });
    
    // Function to add animation classes
    function animationProperties() {
        $('[data-ani]').each(function () {
            var animationName = $(this).data('ani');
            $(this).addClass(animationName);
        });
    
        $('[data-ani-delay]').each(function () {
            var delayTime = $(this).data('ani-delay');
            $(this).css('animation-delay', delayTime);
        });
    }
    animationProperties();
    
    // Add click event handlers for external slider arrows based on data attributes
    $('[data-slider-prev], [data-slider-next]').on('click', function () {
        var sliderSelector = $(this).data('slider-prev') || $(this).data('slider-next');
        var targetSlider = $(sliderSelector);
    
        if (targetSlider.length) {
            var swiper = targetSlider[0].swiper;
    
            if (swiper) {
                if ($(this).data('slider-prev')) {
                    swiper.slidePrev();
                } else {navigator, 
                    swiper.slideNext();
                }
            }
        }
    });

    /*--------------. Slider Tab -------------*/
    function activateGlobalSliderTabs(tabSelector, sliderSelector) {
        var $tabs = $(tabSelector).find('.tab-btn');
        var $line = $('<span class="indicator"></span>').appendTo(tabSelector);
        var $sliders = $(sliderSelector);

        var swipers = $sliders.map(function () {
            return this.swiper;
        }).get();

        $tabs.on('click', function (e) {
            e.preventDefault();
            var $clicked = $(this);
            var index = $clicked.index();

            // Highlight active tab
            $clicked.addClass("active").siblings().removeClass("active");
            linePos($clicked, $(tabSelector));

            // Slide all sliders to the same index
            swipers.forEach(function (swiper) {
                if (swiper) swiper.slideToLoop(index);
            });
        });

        // Sync tab state when any slider changes
        swipers.forEach(function (swiper) {
            if (swiper) {
                swiper.on("slideChange", function () {
                    var index = swiper.realIndex;
                    var $activeTab = $tabs.eq(index);
                    $activeTab.addClass("active").siblings().removeClass("active");
                    linePos($activeTab, $(tabSelector));
                });
            }
        });

        // Initial state
        var initialIndex = swipers[0]?.realIndex || 0;
        var $initial = $tabs.eq(initialIndex);
        $initial.addClass("active").siblings().removeClass("active");
        linePos($initial, $(tabSelector));

        function linePos($el, $wrap) {
            var offset = $el.position();
            var marginTop = parseInt($el.css('margin-top')) || 0;
            var marginLeft = parseInt($el.css('margin-left')) || 0;

            $line.css("--height-set", $el.outerHeight() + "px");
            $line.css("--width-set", $el.outerWidth() + "px");
            $line.css("--pos-y", offset.top + marginTop + "px");
            $line.css("--pos-x", offset.left + marginLeft + "px");
        }
    }
    $(window).on('load', function () {
        activateGlobalSliderTabs('.responsive-tab', '.responsive-slider');
    });


    /*---------- 12. Section Position ----------*/
    // Interger Converter
    function convertInteger(str) {
        return parseInt(str, 10);
    }

    $.fn.sectionPosition = function (mainAttr, posAttr) {
        $(this).each(function () {
            var section = $(this);

            function setPosition() {
                var sectionHeight = Math.floor(section.height() / 2), // Main Height of section
                    posData = section.attr(mainAttr), // where to position
                    posFor = section.attr(posAttr), // On Which section is for positioning
                    topMark = "top-half", // Pos top
                    bottomMark = "bottom-half", // Pos Bottom
                    parentPT = convertInteger($(posFor).css("padding-top")), // Default Padding of  parent
                    parentPB = convertInteger($(posFor).css("padding-bottom")); // Default Padding of  parent

                if (posData === topMark) {
                    $(posFor).css(
                        "padding-bottom",
                        parentPB + sectionHeight + "px"
                    );
                    section.css("margin-top", "-" + sectionHeight + "px");
                } else if (posData === bottomMark) {
                    $(posFor).css(
                        "padding-top",
                        parentPT + sectionHeight + "px"
                    );
                    section.css("margin-bottom", "-" + sectionHeight + "px");
                }
            }
            setPosition(); // Set Padding On Load
        });
    };

    var postionHandler = "[data-sec-pos]";
    if ($(postionHandler).length) {
        $(postionHandler).imagesLoaded(function () {
            $(postionHandler).sectionPosition("data-sec-pos", "data-pos-for");
        });
    }

    // /*----------- 00.Color Scheme ----------*/
    $('.color-switch-btns button').each(function () {
        // Get color for button
        const button = $(this);
        const color = button.data('color');
        button.css('--theme-color', color);

        // Change theme color on click
        button.on('click', function () {
            const clickedColor = $(this).data('color');
            $(':root').css('--theme-color', clickedColor);
        });
    });

    $(document).on('click','.switchIcon',function() {
        $('.color-scheme-wrap').toggleClass('active');
    });

    if ($('[data-mask-src]').length > 0) {
        $('[data-mask-src]').each(function () {
          var mask = $(this).attr('data-mask-src');
          $(this).css({
            'mask-image': 'url(' + mask + ')',
            '-webkit-mask-image': 'url(' + mask + ')'
          });
          $(this).addClass('bg-mask');
          $(this).removeAttr('data-mask-src');
        });
    };   

    
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");

    let width = canvas.width = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    window.addEventListener("resize", () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    });

    let mouse = { x: width / 2, y: height / 2 };
    let isMoving = false;
    let moveTimer;

    window.addEventListener("mousemove", (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
    isMoving = true;
    clearTimeout(moveTimer);
    moveTimer = setTimeout(() => isMoving = false, 100);
    });

    const particles = [];

    function createParticle(x, y) {
    return {
        x,
        y,
        size: Math.random() * 120 + 60, // smaller for smoothness
        alpha: 0.06 + Math.random() * 0, // lower opacity
        life: 1,
        vx: (Math.random() - 0.9) * 0.1, // gentler movement
        vy: (Math.random() - 0.9) * 0.1,
        hue: Math.random() * 360
    };
    }

    function drawParticles() {
    ctx.clearRect(0, 0, width, height);

    for (let i = particles.length - 1; i >= 0; i--) {
        const p = particles[i];
        const grad = ctx.createRadialGradient(p.x, p.y, 0, p.x, p.y, p.size);
        grad.addColorStop(0, `hsla(${p.hue}, 100%, 50%, ${p.alpha})`);
        grad.addColorStop(1, `hsla(${p.hue}, 100%, 50%, 0)`);

        ctx.fillStyle = grad;
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
        ctx.fill();

        p.x += p.vx;
        p.y += p.vy;
        p.life -= 0.04; // smoother fade

        if (p.life <= 0) particles.splice(i, 1);
    }
    }

    function animate() {
    if (isMoving) {
        particles.push(createParticle(mouse.x, mouse.y));
        particles.push(createParticle(mouse.x, mouse.y)); // slight density boost
    }

    drawParticles();
    requestAnimationFrame(animate);
    }

    animate();



    window.addEventListener('contextmenu', function (e) {
      // do something here...
      e.preventDefault();
    }, false);

    document.onkeydown = function (e) {
      if (event.keyCode == 123) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
      }
      if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
      }
    }
})(jQuery);
