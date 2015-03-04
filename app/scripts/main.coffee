$(document).ready () ->
    $('#fullpage').fullpage {
        # sectionsColor: ['#23262C', '#FFFFFF', '#FFFFFF', '#23262C', 'whitesmoke', '#ccddff'],
        anchors: ['home', 'about', 'team', 'contact'],
        menu: '#nav-menu',
        controlArrows: false,
        scrollingSpeed: 1000
    }

    # SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() },
    $("#formID").validationEngine {
        success :  false,
        failure : () -> {}
    }
    #$.validationEngine.buildPrompt("#date","This is an example","error")       // Exterior prompt build example
    #$.validationEngine.closePrompt(".date")                      // Exterior prompt close example

    # liftoffTime = new Date(2015, 6 - 1, 22, 11, 0);
    # $('#counter').countdown {
    #     until: liftoffTime,
    #     layout: '{dn} {dl}, {hn} {hl}, {mnn} {ml}, {snn} {sl}'
    # }
    $('#counter').countdown "2015/06/22", (event) ->
        $(this).text(
            event.strftime('%D Days, %H Hours, %M Minutes, %S Seconds')
        )

    # Activate 'next button' on about section
    $('.fp-section').on 'click touchstart', '.feature img', () ->
        $.fn.fullpage.moveSlideRight()
        event.preventDefault(); # Prevent the form from submitting via the browser.
        return # don't return a value

    # Send signup form asynchronously
    $('form').submit (event) ->
        form = $(this)
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize()
        })
        .success (data, textStatus, jqXHR ) ->
            $("#message_popup .content").html(if data.message then data.message else "Unknown error")
            $("#message_popup").modal('show')
            $("#message_popup .modal-title").html(if data.success then "Success" else "Error");

            # If the mail has been sent, hide the form
            # if (data.success)
                # $("form#signup").hide()
            # else

        .error (jqXHR, textStatus, errorThrown ) ->
            data = JSON.parse(jqXHR.responseText);
            $("#message_popup .modal-body").html(data.statusText + "<br>" + data.description)
            $("#message_popup").modal('show')
            # Optionally alert the user of an error here...

        event.preventDefault(); # Prevent the form from submitting via the browser.
        return # don't return a value

    return # don't return a value
