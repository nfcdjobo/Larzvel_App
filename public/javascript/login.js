$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });

if(window.location.href.includes('login')){
    document.querySelector('.register-form').style.display = 'none';
    document.querySelector('.login-form').style.display = 'block';
}else{
    document.querySelector('.register-form').style.display = 'block';
    document.querySelector('.login-form').style.display = 'none';
}
