$(document).on('change', '.select-city', function() {
    var selected = $(this).val();

    $.ajax({
        url: 'post.php',
        type: 'POST',
        datatype: 'json',
        data: { cityID: selected},
        success: function(response){
            $('#cont').html(response); 
        },
        error: function(){
            alert("Произошла ошибка");
        }
    });
});