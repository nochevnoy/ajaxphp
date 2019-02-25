$(document).on('change', '.select-city', function() {
    var selected = $(this).val();

    $.ajax({
        url: 'post.php',
        type: 'POST',
        datatype: 'json',
        data: { cityID: selected},
        success: function(data){
            data = JSON.parse(data);
            $('#cont').val(data['city']); 
        },
        error: function(){
            alert("Произошла ошибка");
        }
    });
});

$(document).on('change', '.select-provider', function() {
    var sel = $(this).val();

    $.ajax({
        url: 'post.php',
        type: 'POST',
        datatype: 'json',
        data: { providerID: sel},
        success: function(data){
            data = JSON.parse(data);
            $('#cont2').val(data['provider']);
        },
        error: function(){
            alert("Произошла ошибка");
        }
    });
});