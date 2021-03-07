$(document).on('submit','form.js-login',(event)=>{
    event.preventDefault();
    let _form = $('form.js-login');
    console.log(_form);    

    let dataOBJ = {
        'email': $('input[type="email"]',_form).val(),
        'password': $('input[type="password"]',_form).val()
    }

    let emailError = $('.js-email-error');
    let pwError = $('.js-pw-error');

    console.log(dataOBJ);

    if(dataOBJ.email == "" || dataOBJ.email == 'null' || dataOBJ.email < 6){

        // console.log('test error');
        emailError.text("Please fill in the email input correctly.");
        emailError
        .show(500)
        .delay(4000)
        .hide(500) 
        return false;
    }
    else if(dataOBJ.password == "" || dataOBJ.password == 'null' || dataOBJ.password.length < 6){
        
        // console.log('test password');
        pwError.text("Please fill in the password field correctly.");
        pwError
        .show(500)
        .delay(4000)
        .hide(500)
        return false;
    }

    //if the user gets this far then start the ajax process
    $.ajax({
        type: "POST",
        url: "./ajax/register.php",
        data: dataOBJ,
        dateType: "json",
        async: true
    })
    .done(function ajaxDone(data) {
        //
        console.log(data);
        if(data.redirect !== undefined){
            window.location = data.redirect;
        }
        alert(data.name)
    })
    .fail(function ajaxFailed(e) {
        //
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data){
        // 
        console.log('always');
    })

    return false;
})

