$(document).ready(function() {
    $('.star-project').on('click', function() {
        var star = $(this);
        var url = $(this).attr('data-url');
        $.ajax(url).done(function(data) {
            if (data.status) {
                star.html('★');
            } else {
                star.html('☆');
            }
        });
    });
});
