(function ( $, undefined ) {
    
    log( 'Content script active!' );

    function log() {
        var args = Array.prototype.slice.call( arguments );

        if( args.length == 1 )
            console.log( args[0] );
        else
            console.log( args );
    }

    $( '#tutorial a img' ).each( function( i ) {
        $( this ).parent().fancybox( {
            transitionIn: 'elastic',
            transitionOut: 'elastic',
            speedIn: 600,
            speedOut: 200,
            overlayShow: true
        } );
    } );
})( jQuery );
