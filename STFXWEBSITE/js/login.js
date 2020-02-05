$(document).ready(function () {
    $(".sign-in-form").on('submit',function(e){
        e.preventDefault();
        const data = $(".sign-in-form").serialize();
        const formfeed = $('.form-feedback');
        $.ajax({
            type: 'POST',
            url: 'process/login.php',
            dataType: 'json',
            data: { data: data },
            beforeSend: function(){
                formfeed.hide();
                $(".sign-in-btn").prop('disabled', true);
            },
            success: function (response) {
                $(".sign-in-btn").prop('disabled', false);
                if(response.code === 1){
                    $(location).attr('href', 'dashboard');
                }else{
                    formfeed.show();
                    formfeed.text(response.data);
                }
            }
        });
    });
});
