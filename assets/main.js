$("#form-signin").on('submit', function(e){
    $("#form-signin").removeClass('shake');
    e.preventDefault();
    var username = $('#inputEmail').val();
    localStorage.setItem('username', username);
    var password = $('#inputPassword').val();
    $.ajax({
        url: 'login.php',
        data:  {'username': username, 'password': password},
        dataType: 'json',
        method: 'post'
    }).done(function() {
        window.location = 'index.php';
    }).fail(function(){
        $("#form-signin").addClass('shake');
    });
        
});

$("#form-forgot").on('submit', function(e){
    $("#form-forgot").removeClass('shake');
    e.preventDefault();
    var username = $('#inputEmailRetrive').val();
    $.ajax({
        url: 'forgot-password.php',
        data:  {'username': username },
        method: 'post'
    }).done(function() {
        $('#forgot-instructions').remove();
        $('#inputEmailRetrive').replaceWith('<p class="mt-2">Email was sent, Please check your mailbox.</p>');
    }).fail(function(){
        
        $("#form-forgot").addClass('shake');

    });
        
});