function login_page(){
    $("form[name=login]").submit((e) => {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "authuser/login",
            data: $("form[name=login]").serialize(),
            success: function (response) {
                const res = JSON.parse(response);

                console.log(res);

                if(res.email == true){
                    if(res.password == true){
                        location.href = 'home';
                    }else{
                        $('input[name=email]').removeClass('is-danger');
                        $('input[name=password]').addClass('is-danger');
                    }
                }else{
                    $('input[name=email]').addClass('is-danger');
                    $('input[name=password]').removeClass('is-danger');
                    $('input[name=password]').val('');
                }
            }
        });
    });
}