/**
 jS document
 */

//-------------jQuery plugin formvalitation.io on bootstrap framework---------//

jQuery.validator.setDefaults({

    highlight: function (element) {//error
        if ( $(element).attr('class') == 'form-control validate') {//show error only for input field - email

            $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
            $(element).closest('.form-group').find('span.glyphicon').remove();
            $(element).closest('.form-group').append('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
        }
    },
    unhighlight: function (element) {//success

        if ($(element).attr('class') == 'form-control validate') {

            $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
            $(element).closest('.form-group').find('span.glyphicon').remove();
            $(element).closest('.form-group').append('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');

        }
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function (error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

});



/*  ----  contact form submit ---- */

$('#contactForm').validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        name:{
            required: true,
            minlength: 3
        },
        message: "required"
    },
    messages: {
        email: {
            required: "Please, enter the email address",
            email: "Please, enter the right email address"
        },
        name: {
            required: "Please, enter the name"
        },
        message: {
            required: "Please, enter the message"
        }
    },
    submitHandler: function () {
        var form_data = {
            //hiden csrf token
            csrf_test_name:$("input[name=csrf_test_name]").val(),
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            sel: $('#sel').val(),
            message: $('#message').val()
        };

        console.log(form_data);
        console.log('--------');

        $.ajax({
            url: CI_ROOT + "contact/send",
            method: "post",
            dataType: "json",
            data: form_data, //{id: data.id}
            beforeSend: function () {

                var message = '<img src=" ' + CI_ROOT + 'public/img/ajax-loader.gif" border="0">';
                message += '<br/> <h2>Send message... </h2>';
                $('.modal-body>.messages').html(message).css({'text-align': 'center','color':'#fff'});

            },
            success: function (data) {

                if (data.result){

                    setTimeout(function () {
                        $('.modal-body').html('<h2>'+data.message+'</h2>').addClass('bg-primary');
                        $('.modal-content').css({'border-radius':'0','text-align': 'center','background':'#337AB7'});
                        $('.modal-title').empty();
                    }, 2000);
                    console.log(data);

                    setTimeout(function(){
                        $('#myModal2').modal('hide');
                        window.location.href=window.location.href;
                    },5000);

                }else{

                    $('.modal-body>.messages').html('<h3>'+data.message+'</h3>').css({'color':'red'});

                }
            },
            error: function () {

                $('.modal-body>.messages').html('<h1>The message was not sent,sorry for interference, try later</h1>');
            }
        });

        return false;
    }
});


/*  -------------------------------------------------------------------- */
/*  -------------------  submit edit user account  --------------------- */
/*  -------------------------------------------------------------------- */

/* --------   edit name  --------   */
$('.edit_name').submit(function(){

        var check=$('#check1').is(':checked')? 'on' : '';
        var form_data = {
            //hiden csrf token
            csrf_test_name:$("input[name=csrf_test_name]").val(),
            name: $('input[name=name]').val(),
            check1: check
        };
        //console.log(form_data);

        $.ajax({
            url: CI_ROOT + "user/edit_name",
            method: "post",
            dataType: "json",
            data: form_data,
            success: function (data) {

                if (data.result){
                    //location.reload();
                    $('a.nav-name').html('<b>'+ data.name+'</b>');
                    $('input[name=name]').val('');


                }else{
                    $('.error-display').html(data.message);

                }
            }
        });


        return false;
    }
);

/*   ---------- edit email ------------   */

$('.edit_email').submit(function(e){
        var check=$('#check2').is(':checked')? 'on' : '';
        var form_data = {
            //hiden csrf token
            csrf_test_name:$("input[name=csrf_test_name]").val(),
            email: $('input[name=email]').val(),
            check2: check
        };
        //console.log(form_data);

        $.ajax({
            url: CI_ROOT + "user/edit_email",
            method: "post",
            dataType: "json",
            data: form_data,
            success: function (data) {

                if (data.result){
                    $('.error-display').html('');
                    $('.message-success').html('Your email was changed to - '+data.email);

                }else{
                    $('.message-success').html('');
                    $('.error-display').html(data.message);

                }
            },
            error: function () {
                $('.message-success').html('');
                $('.error-display').html('The email was not updated. We have any technical problem, try later. Sorry for inconvenience!');
            }
        });

        e.preventDefault();

    }
);

/*   ---------- edit password ------------   */

$('.edit_password').submit(function(e){

        var check=$('#check3').is(':checked')? 'on' : '';
        var form_data = {
            //hiden csrf token
            csrf_test_name:$("input[name=csrf_test_name]").val(),
            pwd: $('input[name=pwd]').val(),
            pwd1: $('input[name=pwd1]').val(),
            pwd2: $('input[name=pwd2]').val(),
            check3: check
        };
        console.log(form_data);

        $.ajax({
            url: CI_ROOT + "user/edit_password",
            method: "post",
            dataType: "json",
            data: form_data,
            success: function (data) {

                if (data.result){
                    $('.error-display').html('');
                    $('.message-success').html(data.message);

                }else{
                    $('.message-success').html('');
                    $('.error-display').html(data.message);

                }
            },
            error: function () {
                $('.message-success').html('');
                $('.error-display').html('The password was not updated. We have any technical problem, try later. Sorry for inconvenience!');
            }
        });

        e.preventDefault();

    }
);


