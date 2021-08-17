jQuery(function ($) {
    var ppp = 3; // Post per page
    var pageNumber = 1;


    function load_posts(){
        pageNumber++;
        var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function(data){
                var $data = $(data);
                if($data.length <= ppp){
                    $("#more_posts").remove();
                    console.log($data.length,'$data.length');
                }
                if($data.length){
                    $("#ajax-posts").append($data);
                    $("#more_posts").attr("disabled",false);
                    console.log($data.length,'$data.length');
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    $("#more_posts").on("click",function(){ // When btn is pressed.
        $("#more_posts").attr("disabled",true); // Disable the button, temp.
        load_posts();
        $(this).insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
    });
});