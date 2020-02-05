$(document).ready(function () {
    $("#prevBtn").hide();
    $(".step-2").hide();
    $("#nextBtn").on('click',function(e){
        e.preventDefault();
        if($('.step-2').is(":visible")){
            if(check_form_validity_s2()) {
                $("#regForm").submit();
            }
        }else{
            if(check_form_validity_s1()){
                $(".step-1").slideUp();
                $(".step-2").slideDown();
                $("#prevBtn").show();
            }
        }
    });
    function check_form_validity_s1(){
        const nameObj = $('input[name=name]');
        const nameFeed = $('.name-feedback');
        const emailObj = $('input[name=email]');
        const emailFeed = $('.email-feedback');
        const passwordObj = $('input[name=password]');
        const passwordFeed = $('.password-feedback');
        var feed = true;

        if (!nameObj[0].checkValidity()) {
            nameObj.addClass('invalid');
            nameFeed.text(nameObj[0].validationMessage);
            nameFeed.show();
            feed = false;
        }else{
            nameObj.removeClass('invalid');
            nameFeed.hide();
        }
        if (!emailObj[0].checkValidity()) {
            emailObj.addClass('invalid');
            emailFeed.text(emailObj[0].validationMessage);
            emailFeed.show();
            feed = false;
        }else{
            emailObj.removeClass('invalid');
            emailFeed.hide();
        }
        if (!passwordObj[0].checkValidity()) {
            passwordObj.addClass('invalid');
            passwordFeed.text(passwordObj[0].validationMessage);
            passwordFeed.show();
            feed = false;
        }else{
            passwordObj.removeClass('invalid');
            passwordFeed.hide();
        }
        return feed;
    }
    function check_form_validity_s2(){
        const planObj = $('input[name=plan]');
        const planFeed = $('.plan-feedback');
        var feed = true;

        if (!planObj[0].checkValidity()) {
            planFeed.show();
            feed = false;
        }else{
            planFeed.hide();
        }
        return feed;
    }

    $("#prevBtn").on('click',function(e){
        e.preventDefault();
        $(".step-1").slideDown();
        $(".step-2").slideUp();
        $("#prevBtn").hide();
    });
    $("#regForm").on('submit',function(e){
        e.preventDefault();
        const data = $("#regForm").serialize();
        const formfeed = $('.form-feedback');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'process/register.php',
            data: { data: data },
            beforeSend: function(){
                formfeed.hide();
                $("#prevBtn").hide();
                $("#nextBtn").prop('disabled', true);
            },
            success: function (response) {
                $("#prevBtn").show();
                $("#nextBtn").prop('disabled', false);
                if(response.code === 1){
                    $(location).attr('href', response.data.url);
                }else{
                    formfeed.show();
                    formfeed.text(response.data);
                }
            }
        });
    });
});