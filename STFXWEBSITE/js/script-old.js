(function ($) {
    "use strict";

    var fn = {
        // Launch Functions
        Launch: function () {
            fn.Header();
            fn.AOS();
        },

        Header: function () {
            $("header").headroom({
                tolerance: 0
            });
        },

        AOS: function () {

        },
    };

    $(document).ready(function () {

        fn.Launch();

        AOS.init({
            duration: 800,
            anchorPlacement: 'center-bottom'
        });

        $('ul.navbar-nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });


        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 700,
            easing:"easeInOutQuad"
        });

        $('#fab-nav-icon').click(function () {
            $(this).toggleClass('open');
        });

        $('.device-name').each(function(){
            $(this).attr('data-search-term', $(this).text().toLowerCase());
        });

        $('.device-search').on('keyup', function(){
            var searchTerm = $(this).val().toLowerCase();
            $('.device-name').each(function(){
                if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                    $(this).parents(".tab-pane").show();
                } else {
                    $(this).parents(".tab-pane").hide();
                }

            });

        });

        $(".tab-opener").click(function(){
            $(this).parent().children(".sub-devices-wrapper").fadeToggle();
            $(this).parent().find(".device-accordian-btn > .svg-inline--fa").toggleClass('fa-minus');
            $(this).parent().find(".device-accordian-btn > .svg-inline--fa").toggleClass('fa-plus');
        });

        $(".download-link").on('click',function (e) {
            e.preventDefault();
            var path =  $(this).data('path');
            $.ajax({
                type: 'POST',
                url: '../api/download.php',
                dataType: "json",
                data: {
                    'path': path
                },
                beforeSend: function () {
                },
                success: function (data) {
                    console.log(data.download);
                    window.location=data.download;
                }
            });
        });

    });

    $(window).on('load',function(){
        $('#loading').fadeOut(1200);
    });

})(jQuery);
