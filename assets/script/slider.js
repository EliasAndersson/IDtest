/* Very basic slider function that could be enhanced with animations etc */
function displaySlide() {
    var slides = jQuery('.slider-content');
    var slideLinks = jQuery('.slider-link');

    jQuery.each(slideLinks, function(i) {
        jQuery(this).on('click', function() {
            slideLinks.not(this).removeClass('active');
            jQuery(this).addClass('active');
            jQuery(slides).removeClass('active');
            jQuery(slides[i]).addClass('active');
        });
    });
}

window.onload = displaySlide;