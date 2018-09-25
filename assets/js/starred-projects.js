$(document).ready(function() {
    $('.star-project').on('click', function() {
        console.log('aa');
        var star = $(this);
        var project_id = $(this).attr('data-project-id');
        $.ajax('/starproject?project_id=' + project_id).done(function(data) {
            console.log(data);
            if (data.status) {
                star.html('★');
            } else {
                star.html('☆');
            }
        });
    });
});
