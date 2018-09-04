var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;

//Wat er gebeurd als er op volgende wordt geklikt.
$(".next").click(function() {

    var valid = true;

    //Het valideren van de ingevulde gegevens in het formulier.
    $('#msform').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true
            }
        },
        messages: {
            amount: "Kies een geldig aantal.",
            typedevice: "Maak een keuze uit de opties.",
            typecasting: "Maak een keuze uit de opties.",
            firstname: "Vul uw voornaam in.",
            lastname: "Vul uw achternaam in",
            email:{
                required: "Vul een email adres in.",
                email: "Vul een geldig e-mail adres in."
            },
            phone:{
                required: "Vul een telefoonnummer in.",
                digits:"Het telefoonnummer kan alleen uit cijfers bestaan."
            },
            adress: "Vul een geldig adres in.",
            postalcode: "Vul een geldige postcode in.",
            hidedate: "Kies de gewenste datum voor de demo."
        }
    });
    if (!$('#msform').valid()) {
        return false;
    }

    jQuery.validator.addMethod("postalcode", function(value, element) {
        return this.optional(element) || /^([0-9]{4}[ ]+[a-zA-Z]{2})$/;
    })

    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //De vooruitgang op
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    next_fs.show();



    current_fs.animate({opacity: 0}, {
        step: function (now, mx) {
            scale = 1 - (1 - now) * 0.2;

            left = (now * 50)+"%";

            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale('+scale+')',
                'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
    });
});

$(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    previous_fs.show();

    current_fs.animate({opacity: 0},{
        step: function(now, mx) {
            scale = 0.8 + (1 - now) *0.2;
            left = ((1-now) * 50)+"%";
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity':opacity, 'position':''});
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
    });
});

$(".submit").click(function() {
    $.ajax({
        type: "POST",
        url: "../demo_submit.php",
        data: { h: "test"},
        succes : function() {
            document.getElementById("hidedate").value;
        }
    })
});

var date = new Date();
date.setDate(date.getDate()+1)

$(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    $('#calendar').datepicker({
        format: 'mm/dd/yyyy hh:ii',
        container: container,
        startDate: date,
        todayHighlight: true,
        autoclose: true,
        language: "nl",
        daysOfWeekDisabled: "0,6"
    });
});

$('#calendar').datepicker().on('changeDate', function() {
    var temp = $(this).datepicker('getDate');
    var d = new Date(temp);
    document.getElementById("hidedate").value = d;
    localStorage.setItem("date", d)
});

