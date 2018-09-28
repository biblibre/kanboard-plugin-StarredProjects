$(document).ready(function() {
    $('.star-project').on('click', function() {
        var star = $(this);
        var project_id = $(this).attr('data-project-id');
        $.ajax('/starproject?project_id=' + project_id).done(function(data) {
            if (data.status) {
                star.html('★');
            } else {
                star.html('☆');
            }
        });
    });
});
