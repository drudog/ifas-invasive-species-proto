$(function() {
    var trigger = $('.panel-accordion dt');

    $(trigger).on('click', function(){
        $(this).toggleClass('open').next('dd').toggleClass('open');
    });

    var slider = $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        prevText: "",
        nextText: "",
        navContainer: ".r-slides-nav-container",
        before: function () {
        }, // Function: Before callback
        after: function () {
            $('#slide_content_panel').html( $('.rslides1_on .content').html() );
        } // Function: After callback
    });

    $('#slide_content_panel').html( $('.rslides1_on .content').html() );

});