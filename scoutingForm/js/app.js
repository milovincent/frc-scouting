$(document).foundation();

var interval=false;
var timer=15;
auto=true;
  var counter = 0;
var timer = null;
  var times = [];

jQuery( document ).ready(function( $ ) {
$('.hatch').mousedown(function(){
  message('HATCH',$(this).parent().attr('id')+'.hatch');
});
$('.cargo').mousedown(function(){
  message('CARGO',$(this).parent().attr('id')+'.cargo');
});
$('g#blue-hab-1').mousedown(function(){
    message('BLUE LANDING lowest level');
  });
  $('g#blue-hab-2').mousedown(function(){
    message('BLUE LANDING 3 inch level');
  });
    $('g#blue-hab-3').mousedown(function(){
    message('BLUE LANDING 3 inch level');
  });
    $('g#blue-hab-4').mousedown(function(){
    message('BLUE LANDING 3 HIGH level');
  });
    $('g#blue-driver-penalty-1').mousedown(function(){
    message('BLUE penalty');
  });
      $('g#blue-driver-penalty-2').mousedown(function(){
    message('BLUE penalty');
  });
  function message(m,o){
  	$('#message').html('timer:'+counter+', '+m+': '+o);
    if (timer!=null){
      logTime(o);
    } else {
      startInterval();
      logTime(o);
    }
console.log(times);
  }


function logTime(o){
  times.push({"object":o,"time":counter});
}
function reset()
{
	clearInterval(timer);
    counter=0;
}
function startInterval(){
	timer= setInterval(function(){
        counter+=0.01;
      	counter = Math.round(counter*100)/100;
	}, 10);
}
function stopInterval(){
    clearInterval(timer);
}

  $('input[type=number]').val('0')
  $('input[type=text]').val(' ')
  $('textarea').val('')
  $('#foul').html('0');
  $('#techFoul').html('0');
  $('input').prop( "checked",false );


  $('#foul').mousedown(function(){
  	var foulVal = Number($('#foulVal').val())+1;
  	$('#foulVal').val(foulVal);
  	$('#foul').html(foulVal);
  });
  $('#techFoul').mousedown(function(){
  	var techFoulVal = Number($('#techFoulVal').val())+1;
  	$('#techFoulVal').val(techFoulVal);
  	$('#techFoul').html(techFoulVal) ;
  });

(function ($) {
    var _base_serializeArray = $.fn.serializeArray;
    $.fn.serializeArray = function () {
        var a = _base_serializeArray.apply(this);
        $.each(this.find("input"), function (i, e) {
            if (e.type == "checkbox") {
                e.checked
                ? a[i].value = "true"
                : a.splice(i, 0, { name: e.name, value: "false" })
            }
        });
        return a;
    };
})(jQuery);
  $('#time').mousedown(function() {
		if (interval == false || (timer == 0 && auto == false)) {
			timer = 14;
			let auto = true;
			clearInterval(interval);
			interval = setInterval(function(){
				$('#time').html(timer)
				if (timer>0) {
					timer=timer-1;
				} else {
					if (auto) {
						auto = false;
						timer = 130;
					} else {
						clearInterval(interval);
						interval = false;
						$('#time').html('Start')
					}
				}
			},1000);
		}
  });
  // variable to hold request
  var request;

  // Bind to the submit event of our form
  $("#scoutingForm").submit(function(event){
    console.log('something happened',event)

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }

    // setup some local variables
    var $form = $(this);
    console.log('something fired',event)


    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, textarea");



    console.log('inputs',$inputs)

    // Serialize the data in the form
    // find="=&";
    // replace="=off&";
    // var serializedData = $form.serialize().replace(new RegExp(escapeRegExp(find), 'g'), replace);
    var serializedData = $form.serializeArray();
    console.log('serializedData',serializedData)


    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);
// fire off the request to /form.php

		/*$.ajax({
      	 url: 'http://frc.magrittescow.com/scouting/686/scoutingForm/app.php',
         data: serializedData,
         type: 'POST',
          dataType: 'csv',
         success: function() { console.log("Success"); },
         error: function() { console.log('Failed!'); }

});
    */

    $.ajax({
      // url: "http://frc.magrittescow.com/scouting/686/scoutingForm/app.php",
      url: "./app.php",
    data: serializedData,
      type: "POST",
      error: function() { console.log('Failed!');
                        console.trace();
                        }
    });
request = $.ajax({
            url: "https://script.google.com/macros/s/AKfycby42O3qBY63DFNkjaNKPNtdsLG-AzXjbmmVdn_OfuKqbsgQ-34/exec",
            type: "GET",
            data: serializedData,
            crossDomain: true,
            dataType: 'json',
//            success: function() { alert("Success"); },
            error: function() { alert('Failed!'); },
        });


    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Hooray, it worked!");
		    var scoutName = $('#scoutName').val();
            var matchNumber = $('#matchNumber').val();
		    $('input[type=number]').val('')
		    $('input[type=text]').val(' ')
		    $('textarea').val(' ')
		    $('#foul').html(0);
		    $('#techFoul').html(0);
			  $('#scoutName').val(scoutName);
			  $('input').prop( "checked",false );
	 			clearInterval(interval);
	 			interval=false;
	 			timer=15;
	 			$('#time').html('Start');
				auto=true;
                $('#matchNumber').val(matchNumber + 1);

    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

  });
});
function setTime(val){
	$('#'+val).val(timer);
}
function countUp(id){
	var Val = Number($('#'+id+'Val').val())+1;
	$('#'+id+'Val').val(Number(Val));
}
function countDown(id){
	var currentVal = Number($('#'+id+'Val').val());
	var Val;
	if (currentVal > 0) {
  	Val = currentVal-1;
  } else {
  	Val = currentVal;
  }
	console.log('countUp',id,Val)
	$('#'+id+'Val').val(Number(Val));
}
function escapeRegExp(str) {
  return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

function check() {
  $("form :input").each(function() {
  	if ($(this).val == null) {
  		console.log('this',$(this))
			$(this).val('empty');
  	}
  });
}
