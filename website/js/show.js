(function ( $, undefined ) {
    
    log( 'Content script active!' );

    function log() {
        var args = Array.prototype.slice.call( arguments );

        if( args.length == 1 )
            console.log( args[0] );
        else
            console.log( args );
    }

    // accepted filetypes for html view directly instead of download
    var imageFiletypes = { 'jpg': true, 'jpeg': true, 'png': true, 'gif': true };

    // accepted filetypes for html view via scribd instead of download
    var scribdFiletypes = {
        xls: true, xlsx: true,
        ppt: true, pps: true, pptx: true,
        doc: true, docx: true,
        odt: true, odp: true, ods: true,
        sxw: true, sxi: true, sxc: true,
        txt: true, rtf: true,
        ps: true, pdf: true
    };
    
    // api key for scribd
    var scribdID = 'pub-45792848697030382619'; // personal [rbtying]

    log( 'test' );
    $( '.actions a' ).each( function( i ) {	
	    var $this = $( this );

        log( 'processing link: ' + $this.attr( 'href' ) );
        
        url = $this.attr( 'href' );
        ext = url.substr( url.lastIndexOf( '.' ) + 1 );
        ext.toLowerCase();

        if ( scribdFiletypes[ ext ] || imageFiletypes[ ext ] ) {
            var $actions = $this.parent();
            $actions.prepend( ' &#149; ' );
            $link = $( '<a></a>', {
                href: url,
                text: 'View'
            } ).prependTo( $actions );
        }

        // add a preview to the file if possible
        if( scribdFiletypes[ ext ] ) {
            // scribd preview
            // closure to access the correct URL
            (function( url ) {
                $link.fancybox( {
                    transitionIn: 'elastic',
                    transitionOut: 'elastic',
                    speedIn: 600,
                    speedOut: 200,
                    overlayShow: true,
                    autoDimensions: false,
                    width: 595,
                    height: 700,
                    content: '<div id="scribd">Loading...</div>',
                    onComplete: function() {
                        var scribdDoc = scribd.Document.getDocFromUrl( url, scribdID );
                        scribdDoc.addParam( 'public', true );

                        // write the scribd HTML into the fancybox
                        // content div
                        scribdDoc.write( 'scribd' );
                        setTimeout( $.fancybox.resize, 5000 );
                    }
                } );
            })( url );
        } else if( imageFiletypes[ ext ] ) {
            // fancybox preview
            $link.fancybox( {
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 600,
                speedOut: 200,
                overlayShow: true
            } );
        }
    } );
})( jQuery );
