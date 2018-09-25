/*
 * This is custom js page
 * Description : handel all custom js activities related site
 * Authour : Maneesh Tiwari || Shiv Tiwari
 */

$("body").on("click", ".cl_cus", function () {
    $(this).parent().remove();
});

$(function () {

    $("#from_when").datepicker({
        autoclose: true,
        dateFormat: "yyyy-mm-dd",
        onSelect: function (selected) {
        }}).on('change', function (selected) {

        $("#till_when").datepicker({
            autoclose: true,
            dateFormat: "yyyy-mm-dd",
            startDate: $("#from_when").val()
        });
    });
});
$(function () {

    $("#date_from").datepicker({
        autoclose: true,
        dateFormat: "yyyy-mm-dd",
        onSelect: function (selected) {
        }}).on('change', function (selected) {

        $("#date_to").datepicker({
            autoclose: true,
            dateFormat: "yyyy-mm-dd",
            startDate: $("#date_from").val()
        });
    });
});
$(function () {
    $("#register_form").validate({
        errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
        errorElement: 'div',
        errorPlacement: function (error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function (e) {
            e.closest('.form-group').removeClass('has-success has-error');
            e.closest('.help-block').remove();
        },
        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            dob: {
                required: true
            },
            marital_status: {
                required: true
            },
            blood_group: {
                required: true
            },
            exp: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            contact: {
                required: true,
                minlength: 10
            },
            access_type: {
                required: true
            },
            address: {
                required: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            },
            education: {
                required: true
            },
            year: {
                required: true
            }
        },
        messages: {
            first_name: "Please enter the First name",
            last_name: "Please enter the Last name",
            dob: "please select your date of birth",
            marital_status: "please select your marital status",
            email: "Please enter the Email Id",
            password: "Please provide a password",
            address: "Please enter the address",
            contact: "Please provide the contact no.",
            access_type: "Please select the access_type",
            address1: "Please enter the address",
            address2: "Please enter the address",
            city: "Please enter the City",
            state: "Please select the state"
        }
    });
});
$(function () {
    $("#leave_form").validate({
        errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
        errorElement: 'div',
        errorPlacement: function (error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function (e) {
            e.closest('.form-group').removeClass('has-success has-error');
            e.closest('.help-block').remove();
        },
        rules: {
            leave_type: {
                required: true
            },
            from_when: {
                required: true
            },
            till_when: {
                required: true
            },
            reason: {
                required: true
            }
        }
    });

});
$(function () {
    $("#full_report").validate({
        errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
        errorElement: 'div',
        errorPlacement: function (error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function (e) {
            e.closest('.form-group').removeClass('has-success has-error');
            e.closest('.help-block').remove();
        },
        rules: {
            employee: {
                required: true
            },
            date_from: {
                required: true
            },
            date_to: {
                required: true
            }
        }
    });
});
$(function () {
    $("#add_notice").validate({
        errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
        errorElement: 'div',
        errorPlacement: function (error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function (e) {
            e.closest('.form-group').removeClass('has-success has-error');
            e.closest('.help-block').remove();
        },
        rules: {
            title: {
                required: true
            },
            description: {
                required: true
            }
        }
    });
});
$(function () {
    $("#exp").change(function () {
        if ($(this).val() == "Fresher") {
            $("#company1").hide();
            $("#address1").hide();
            $("#company2").hide();
            $("#address2").hide();
        } else {
            $("#company1").show();
            $("#address1").show();
            $("#company2").show();
            $("#address2").show();
        }
    });
});
        