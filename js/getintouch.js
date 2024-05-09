function getintouchValidate(obj) {
    $("#div_message").addClass("d-none").removeClass("error_message").removeClass("success_message");
    $("#div_message").html("");
    var valid_count = 0;
    var valid_msg = 0;
    var txtstudentname = $("#txtstudentname").val().trim();
    var txtdob = $("#txtdob").val().trim();
    var ddlgender = $("#ddlgender").val().trim();
    var ddlgradeapplyingfor = $("#ddlgradeapplyingfor").val().trim();
    var txtparentname = $("#txtparentname").val().trim();
    var txtmobile = $("#txtmobile").val().trim();
    var txtwhatsapp = $("#txtwhatsapp").val().trim();
    var txtemail = $("#txtemail").val().trim();
    var ddlschooltourrequired = $("#ddlschooltourrequired").val().trim();
    var txtscheduletour = $("#txtscheduletour").val().trim();
    var txttourslot = $("#ddltimeslot").val().trim();
    var ddlsource = $("#ddlsource").val().trim();
    var txtRefName = $("#referringstudent").val().trim();

    if (txtstudentname == "") {
        valid_count = 1;
        valid_msg = "Please enter student's name.";
        $("#txtstudentname").focus();
    } else if (txtdob == "") {
        valid_count = 1;
        valid_msg = "Please enter date of birth.";
        $("#txtdob").focus();
    } else if (isValidDate(txtdob) == false) {
        valid_count = 1;
        valid_msg = "Please enter valid date of birth.";
        $("#txtdob").focus();
    } else if (ddlgender == "") {
        valid_count = 1;
        valid_msg = "Please select student genter.";
        $("#ddlgender").focus();
    } else if (ddlgradeapplyingfor == "") {
        valid_count = 1;
        valid_msg = "Please select student class applying for.";
        $("#ddlgradeapplyingfor").focus();
    } else if (txtparentname == "") {
        valid_count = 1;
        valid_msg = "Please enter parent name.";
        $("#txtparentname").focus();
    } else if (txtmobile == "") {
        valid_count = 1;
        valid_msg = "Please enter phone number.";
        $("#txt_mobile").focus();
    } else if (txtmobile.toString().length != 10) {
        valid_count = 1;
        valid_msg = "Please enter valid phone number.";
        $("#txtmobile").focus();
    } else if (txtwhatsapp == "") {
        valid_count = 1;
        valid_msg = "Please enter WhatsApp number.";
        $("#txtwhatsapp").focus();
    } else if (txtwhatsapp.toString().length != 10) {
        valid_count = 1;
        valid_msg = "Please enter valid WhatsApp number.";
        $("#txtwhatsapp").focus();
    } else if (txtemail == "") {
        valid_count = 1;
        valid_msg = "Please enter your email.";
        $("#txtemail").focus();
    } else if (txtemail != "" && !ValidateEmail(txtemail)) {
        valid_count = 1;
        valid_msg = "Please enter valid email.";
        $("#txtemail").focus();
    } else if (ddlschooltourrequired == "") {
        valid_count = 1;
        valid_msg = "Please select if you require a school tour.";
        $("#ddlschooltourrequired").focus();
    } else if (ddlschooltourrequired == "Yes" && isValidDate(txtscheduletour) == false) {
        valid_count = 1;
        valid_msg = "Please enter valid date for your school tour.";
        $("#txtscheduletour").focus();
    } else if (ddlschooltourrequired == "Yes" && txttourslot == "") {
        valid_count = 1;
        valid_msg = "Please select time slot for your school tour.";
        $("#ddltimeslot").focus();
    } else if (ddlsource == "") {
        valid_count = 1;
        valid_msg = "Please select source of information.";
        $("#ddlsource").focus();
    } else if (ddlsource == "Referral" && txtRefName == "") {
        valid_count = 1;
        valid_msg = "Please enter the referring student's name.";
        $("#referringstudent").focus();
    }

    if (valid_count > 0) {
        $("#div_message").removeClass("d-none").addClass("error_message").removeClass("success_message");
        $("#div_message").html(valid_msg);
        return false;
    } else {
        $(obj).prop("disabled", "disabled").find("span").html("Submitting...");
        try {
            var mobilenum = "+" + $("#txtmobile").intlTelInput("getSelectedCountryData").dialCode + $("#txtmobile").val().trim();
            var whatsappnum = "+" + $("#txtwhatsapp").intlTelInput("getSelectedCountryData").dialCode + $("#txtwhatsapp").val().trim();
            $.ajax({
                url: "../data/savegetintouch",
                type: "POST",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify({
                    studentname: txtstudentname,
                    dob: txtdob.toString().split('/')[2] + "-" + txtdob.toString().split('/')[1] + "-" + txtdob.toString().split('/')[0],
                    gender: ddlgender,
                    gradeapplyingfor: ddlgradeapplyingfor,
                    parentname: txtparentname,
                    mobile: mobilenum,
                    whatsapp: whatsappnum,
                    email: txtemail,
                    schooltourrequired: ddlschooltourrequired,
                    scheduletour: txtscheduletour != null && txtscheduletour != "" ? txtscheduletour.toString().split('/')[2] + "-" + txtscheduletour.toString().split('/')[1] + "-" + txtscheduletour.toString().split('/')[0] : "",
                    tourslot: txttourslot,
                    source: ddlsource,
                    refname: txtRefName
                }),
                success: function(data) {
                    if (data == "success") {
                        $(obj).removeAttr("disabled").find("span").html("Submit");

                        $("#txtstudentname").val('');
                        $("#txtdob").val('');
                        $("#ddlgender").val('');
                        $("#ddlgradeapplyingfor").val('');
                        $("#txtparentname").val('');
                        $("#txtmobile").val('');
                        $("#txtwhatsapp").val('');
                        $("#txtemail").val('');
                        $("#ddlschooltourrequired").val('No').trigger('change');
                        $("#txtscheduletour").val('');
                        $("#ddltimeslot").val('');
                        $("#ddlsource").val('');
                        $("#referringstudent").val('');

                        window.location.href = "../thankyou";
                    } else {
                        $(obj).removeAttr("disabled").find("span").html("Submit");
                        $("#div_message").removeClass("d-none").removeClass("error_message").addClass("error_message");
                        $("#div_message").html("Something went wrong while submitting your data. Please try again after some time.");
                    }
                },
                error: function(jqXHR, exception, error) {
                    //--
                }
            });
        } catch (err) {
            //--
        }
    }
}

function isValidDate(dateString) {
    // Check if the format matches DD/MM/YYYY
    var regex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
    var parts = dateString.match(regex);
    if (parts == null) {
        return false;
    }

    // Extract day, month, and year from the date string
    var day = parseInt(parts[1], 10);
    var month = parseInt(parts[2], 10);
    var year = parseInt(parts[3], 10);

    // Check for valid ranges for day and month
    if (year < 1000 || year > 3000 || month < 1 || month > 12 || day < 1 || day > 31) {
        return false;
    }

    // Handle months with less than 31 days
    var shorterMonths = [4, 6, 9, 11];
    if (shorterMonths.includes(month) && day > 30) {
        return false;
    }

    // Handle February (month = 2)
    if (month === 2) {
        // Check for a leap year
        var isLeap = (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
        if (day > 29 || (day === 29 && !isLeap)) {
            return false;
        }
    }

    return true;
}