$(document).on('pjax:send', function() {
  $('.loading').show();
})

$(document).on('pjax:complete', function(resp) {
  $('.user-form').html('<h4 style="margin: 1em;">Success! A confirmation message has been sent to your email. Please confirm to continue.</h4>');
  console.log(resp);
})
