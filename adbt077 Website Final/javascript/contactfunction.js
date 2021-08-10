/*When the message a (register text) in the form class is called then the animation
will change the form from login to register and it will be done slowly
taken from the example to allow toggle function to work*/

$('.message a').click(function () {
  $('form').animate({
    height: "toggle",
    opacity: "toggle"
  }, "slow");
  $('.login-page').attr('id', 'register')

});