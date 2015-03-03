$(document).ready(function() {
  $('#fullpage').fullpage({
    sectionsColor: ['#23262C', '#FFFFFF', '#FFFFFF', '#23262C', 'whitesmoke', '#ccddff'],
    anchors: ['home', 'about', 'team', 'contact'],
    menu: '#mainmenu',
    scrollingSpeed: 1000
  });

});

$(document).ready(function() {
  // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() },
  $("#formID").validationEngine({
    success :  false,
    failure : function() {}
  })
  //$.validationEngine.buildPrompt("#date","This is an example","error")       // Exterior prompt build example
  //$.validationEngine.closePrompt(".date")                      // Exterior prompt close example
});

$(function () {
  var liftoffTime = new Date(2015, 6 - 1, 22, 11, 00);
  $('#counter').countdown({until: liftoffTime,
    layout: '{dn} {dl}, {hn} {hl}, {mnn} {ml}, {snn} {sl}'});

  // Activate 'next button' on about section
  $('.fp-section').on('click touchstart', '.feature img', function() {
    $.fn.fullpage.moveSlideRight();
  });

  // Send signup form asynchronously
  $('form#signup').submit(function( event ) {
    var form = $(this);
    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: form.serialize()
    }).done(function(data) {
      $(".modal .modal-body").html(data.message);
      $(".modal").modal('show');

      // If the mail has been sent, hide the form
      if (data.success) {
        $("form#signup").hide();
      }
    }).fail(function(data) {
      // Optionally alert the user of an error here...
    });
    event.preventDefault(); // Prevent the form from submitting via the browser.
  });
});

