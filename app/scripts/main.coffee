$(document).ready () ->
    $('#fullpage').fullpage {
        anchors: ['home', 'about', 'team', 'contact'],
        menu: '#nav-menu',
        controlArrows: false,
        scrollingSpeed: 1000
    }

    $('#counter').countdown "2015/04/20", (event) ->
        $(this).text event.strftime('%D Days, %H Hours, %M Minutes, %S Seconds')

    # Activate 'next button' on about section
    $('.fp-section').on 'click touchstart', '.feature img', (event) ->
        $.fn.fullpage.moveSlideRight()

    # override jquery validate plugin defaults
    $.validator.setDefaults {
        # override jquery validate plugin defaults for bootstrap 3
        submitHandler: (form) ->
            if $(form).valid()
                $.ajax
                    type: $(form).attr('method'),
                    url:  $(form).attr('action'),
                    data: $(form).serialize()
                    success: (data, textStatus, jqXHR ) ->
                        $("#message_popup .content").html(if data.message then data.message else "Unknown error")
                        $("#message_popup").modal('show')
                        $("#message_popup .modal-title").html(if data.success then "Success" else "Error");

                        # If the mail has been sent, hide the form
                        # if (data.success)
                            # $("form#signup").hide()
                        # else

                    error: (jqXHR, textStatus, errorThrown ) ->
                        try
                            data = JSON.parse(jqXHR.responseText);
                        catch e
                            data = {
                                statusText: jqXHR.statusText
                                description: jqXHR.statusText
                            }

                        $("#message_popup .content").html(data.description)
                        $("#message_popup").modal('show')
                        # Optionally alert the user of an error here...

            return false
        highlight: (element) ->
            $(element).closest('.form-group').removeClass('has-success')
            $(element).closest('.form-group').addClass('has-error')
            return
        unhighlight: (element) ->
            $(element).closest('.form-group').removeClass('has-error')
            $(element).closest('.form-group').addClass('has-success')
            return
        errorElement: 'span',
        errorClass: 'has-error',
        errorPlacement: (error, element) ->
            if element.parent('.input-group').length then error.insertAfter(element.parent()) else error.insertAfter(element)
            return

    }

    $("#contact_form").validate {
        submitHandler: (form) ->
            if $(form).valid() then $('#contact_form_popup').modal('hide')
            $.validator.defaults.submitHandler(form)
    }
    $("#signup").validate {
        errorPlacement: (error, element) -> return
    }

    return # don't return a value
