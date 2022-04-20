(function ($) {
    $(document).ready(function () {
        /*==Left Navigation Accordion ==*/
        if ($.fn.dcAccordion) {
            $('#nav-accordion').dcAccordion({
                eventType: 'click',
                autoClose: false,
                saveState: true,
                disableLink: true,
                speed: 'fast'
            });
        }

    
    });


})(jQuery);