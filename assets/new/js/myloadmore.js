jQuery(function ($) {
    const ppp = 4;
    let pageNumber = 1;

    function load_posts() {
        pageNumber++;
        const str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function (data) {
                var $data = $(data);
                if ($data.length) {
                    $("#ajax-posts").append($data);
                    $("#more_posts").attr("disabled", true);
                } else {
                    $("#more_posts").remove();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    $("#more_posts").on("click", function () {
        $("#more_posts").attr("disabled", true);
        load_posts();
        $(this).insertAfter('#ajax-posts');
    });
});