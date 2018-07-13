var is_mobile = false;

var screenSize = $(window).width();



$(document).ready(function () {

    $('#round_date').datepicker({
        format: 'dd/mm/yyyy'
    });


    // Mobile menu menu ================================

        var $wrapper = $('#page_wrapper'),
            $drawer = $('#nav-mobile'),
            $button = $('#nav-skip'),
            toggleDrawer = function () {
                $wrapper.toggleClass("active");
                $drawer.toggleClass("active");
                $button.toggleClass('toggled');    
            };

        $('#page_wrapper > .main-content').on('click', function () {
            if ($wrapper.hasClass('active')) toggleDrawer();  
        });
        $button.on('click', function (e) { 
            e.preventDefault();
            toggleDrawer();
        });

        var width = $(window).width();
        $(window).on('resize', function () {  
            if ($(window).width() !== width) {  
                if ($wrapper.hasClass('active')) toggleDrawer();
                width = $(window).width(); 
            }
        });

        $(document).on('click', function (e) {
            if ($(e.target).hasClass("page_wrapper") && $(e.target).hasClass("active")) {
                toggleDrawer();
            }
        });


    // Animate Carousel Items ==========================

        var $myCarousel = $('#tagline-carousel');

        // Initialize carousel
        $myCarousel.carousel();


        function doAnimations(elems) {
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');

                // Add animate.css classes to
                // the elements to be animated 
                // Remove animate.css classes
                // once the animation event has ended
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        // Select the elements to be animated
        // in the first slide on page load
        var $firstAnimatingElems = $myCarousel.find('.carousel-item:first')
            .find('[data-animation ^= "animated"]');

        // Apply the animation using our function
        doAnimations($firstAnimatingElems);

        // Pause the carousel 
        $myCarousel.carousel('pause');

        // Attach our doAnimations() function to the
        // carousel's slide.bs.carousel event   
        $myCarousel.on('slide.bs.carousel', function (e) {
            // Select the elements to be animated inside the active slide 
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });


// ========================================
// Shop Begins ----------------------------
// ========================================

    // product gallery ------------------------

        // handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length - 1);
            id = parseInt(id);
            $('#prodSlide').carousel(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $(this).addClass('selected');
        });

        // when the carousel slides, auto update
        $('#prodSlide').on('slide.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            id = parseInt(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-' + id + ']').addClass('selected');
        });

        // Magnific Popup
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            }
        });



});









