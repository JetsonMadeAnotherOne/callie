jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
    $('.misha_loadmore').click(function(){
        console.log('test3');
        var button = $(this);

        var ppp = 3; // Post per page
        var pageNumber = 1;
        var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({ // you can also use $.post here
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : str,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Loading1...'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( 'More posts' ).prev().before(data); // insert new posts
                    misha_loadmore_params.current_page++;

                    if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page )
                        button.remove(); // if last page, remove the button

                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});