jQuery( document ).ready( function() {
    jQuery( '.rpm_title' ).click( function() {
        if (jQuery('.rpm_body').is(':visible')) {
            console.log('RPM: visible ');
            jQuery( '.rpm_title' ).html('&plus;');
        } else {
            console.log('RPM: hidden');
            jQuery('.rpm_title').html('&minus;');
        }
        jQuery( this ).
        parent(). 
            children('.rpm_body').slideToggle(200, "linear");
    });
});
