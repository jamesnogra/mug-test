var selected_color = 'white', temp_post_variables;

$(document).ready(function() {

    $('#mug-text-container').html($('#mug-text').val());
    $('#mug-text-container').draggable({
        axis: "y",
        containment: "parent",
    });

    $('#mug-color').change(function() {
        selected_color = $(this).val();
        $('#mug-image-container').css('background-image', 'url("images/'+selected_color+'.png")');
    });

    $('#mug-text').keyup(function() {
        $('#mug-text-container').html($('#mug-text').val());
    });

    $('#submit-button').click(function() {
        temp_post_variables = {
            'color': $('#mug-color').val(),
            'text': $('#mug-text').val(),
            'y_position': $('#mug-text-container').position().top,
        };
        $.post("save-mug.php", temp_post_variables, function(result){
            console.log(result);
        });
    });


});