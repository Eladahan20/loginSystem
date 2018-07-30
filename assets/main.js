$("#form-signin").on('submit', function(e){
    e.preventDefault();
    $.post('login.php', function(data, status){
        if(status === 200) {
            window.location = 'index.php';
        }
    })
})