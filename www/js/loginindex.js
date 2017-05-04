$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});

function checklogin()
{
    var user = $('#LUsername').val();
    var p = new RegExp(/^[0-9]{2}[a-z]{3}[0-9]{4}$/i);
    if(!p.test(user))
    {
         alert('Registration Number Format wrong');
        return false;
    }
     var pass = $('#LPassword').val();
     if(pass.length<8){
        alert('Password length smaller than 8');
        return false;
     }

     alert('validation Sucessfull');
    return true;

}

function checkregister()
{
    var user = $('#RegistrationNumber').val();
    var name = $('#Name').val();
    var email = $('#email').val();
    var pass = $('#Password').val();
    var rpass = $('#RPassword').val();


    var p = new RegExp( /^[A-Z]{1}(([a-z])+)?(\u0020{1}[A-Z]{1}[a-z]{0,})?$/);
    if(!p.test(name))
    {
        alert('Name Format wrong');
        return false;
    }

     p = new RegExp(/^[0-9]{2}[a-z]{3}[0-9]{4}$/i);
    if(!p.test(user))
    {
        alert('Registration Number Format wrong');
        return false;
    }


    p =new RegExp(  /^([a-z]+)(\u002E{1}([a-z]+))?[0-9]{4}(\u0040vit\u002Eac\u002Ein)$/i);
   if(!p.test(email))
    {
        alert('vit email Format wrong');
        return false;
    }

    if(pass.length<8){
        alert('Password length smaller than 8');
        return false;
    }

    if(!(pass.length==rpass.length)){
        alert('Passwords do not match!')
        return false;
    }
    alert('Registration Sucessfull')
    return true;

}

