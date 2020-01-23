(function($) {
    $( '.search-button' ).click(function() {
        console.log( 'this thing has be enqued properlly my dude. hells ye' );
        if ($( '.nav-link-container' ).hasClass( 'search-bar-after' )) {
            $( '.nav-link-container' ).removeClass( 'search-bar-after' )
        }
        else {
            $( '.nav-link-container' ).addClass( 'search-bar-after' )
        }
    });
})(jQuery);