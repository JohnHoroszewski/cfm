jQuery( document ).ready( function( $ ){

    $winW = $( window ).width(),
    $connect = $( '.header-connect' ),
    $connectA = $( '#connect-open' );

    console.log( $connect.outerWidth() );

    if ( $winW < 768 ) {

        // Open social connect slidout on mobile
        $connect.css( 'right', -$connect.outerWidth() + 30 );
        $connectA.on( 'click', function( e ){

            if ( $connect.hasClass( 'opened' ) ) {
                $connect.css( 'right', -$connect.outerWidth() + 30 );
                $connect.removeClass( 'opened' );
            } else {
                $connect.addClass( 'opened' );
                $connect.css( 'right', 0 );
            }

        });

    }

});