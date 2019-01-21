$(document).foundation();

var interval=false;
var timer=15;
auto=true;
var counter = 0;
var subTimer = null;
var times = [];
var message = [];

jQuery( document ).ready(function( $ ) {
  $('#height-select').hide();

  $('#startingInfo').foundation('open');
  function message(m,o){
     $message = [counter,o];
      console.log($message);
    if ($message != null)
    {
      $('#message').html('timer:'+$message[0]+', '+m+': '+$message[1]);
    }
    else {
      $('#message').html('timer:'+counter+', '+m);
    }
    if (subTimer!=null){
      logTime(o);
    } else {
      startInterval();
      logTime(o);
    }
    console.log(times);
    $message = null;
  }
  $('g#blue-hab-1').mousedown(function(){
    message('BLUE HAB Level 1');
  });
  $('g#blue-hab-2').mousedown(function(){
    message('BLUE HAB Level 2');
  });
  $('g#blue-hab-3').mousedown(function(){
    message('BLUE HAB Level 2');
  });
  $('g#blue-hab-4').mousedown(function(){
    message('BLUE HAB Level 3');
  });
  $('g#blue-driver-penalty-1').mousedown(function(){
    message('BLUE PENALTY');
  });
  $('g#blue-driver-penalty-2').mousedown(function(){
    message('BLUE PENALTY');
  });
  $('g#red-hab-1').mousedown(function(){
    message('RED HAB Level 1');
  });
  $('g#red-hab-2').mousedown(function(){
    message('RED HAB Level 2');
  });
  $('g#red-hab-3').mousedown(function(){
    message('RED HAB Level 2');
  });
  $('g#red-hab-4').mousedown(function(){
    message('RED HAB Level 3');
  });
  $('g#red-driver-penalty-1').mousedown(function(){
    message('RED PENALTY');
  });
  $('g#red-driver-penalty-2').mousedown(function(){
    message('RED PENALTY');
  });
  $('g#radial-menu #high').mouseup(function(){
    message('HIGH');
    $('#height-select').hide();
  });
  $('g#radial-menu #medium').mouseup(function(){
    message('MEDIUM');
    $('#height-select').hide();
  });
  $('g#radial-menu #low').mouseup(function(){
    message('LOW');
    $('#height-select').hide();
  });
    $('.hatch').mousedown(function(e){
    if ($(this).parent().attr('id')!='blue-cargo'&&$(this).parent().attr('id')!='red-cargo'){
      messagePlus($(this).parent().attr('id')+'.hatch');
    $('#height-select').show().css("left", e.pageX-$('#height-select').width()/2).css("top", e.pageY-$('#height-select').height()/2);
    } else {
        message($(this).parent().attr('id')+'.hatch');
    }
      
  });
  $('.cargo').mousedown(function(e){
    if ($(this).parent().attr('id')!='blue-cargo'&&$(this).parent().attr('id')!='red-cargo'){
      messagePlus($(this).parent().attr('id')+'.cargo');
    $('#height-select').show().css("left", e.pageX-$('#height-select').width()/2).css("top", e.pageY-$('#height-select').height()/2);
} else {
        message($(this).parent().attr('id')+'.cargo');
    }
  });
    $('.hatch-miss').mousedown(function(e){
    if ($(this).parent().attr('id')!='blue-cargo'&&$(this).parent().attr('id')!='red-cargo'){
      messagePlus($(this).parent().attr('id')+'.hatch-miss');
    $('#height-select').show().css("left", e.pageX-$('#height-select').width()/2).css("top", e.pageY-$('#height-select').height()/2);
    } else {
        message($(this).parent().attr('id')+'.hatch-miss');
    }
      
  });
  $('.cargo-miss').mousedown(function(e){
    if ($(this).parent().attr('id')!='blue-cargo'&&$(this).parent().attr('id')!='red-cargo'){
      messagePlus($(this).parent().attr('id')+'.cargo-miss');
    $('#height-select').show().css("left", e.pageX-$('#height-select').width()/2).css("top", e.pageY-$('#height-select').height()/2);
} else {
        message($(this).parent().attr('id')+'.cargo-miss');
    }
  });
  
  function messagePlus(o){
    $message = [counter,o];
  }

  function logTime(o){
    times.push({"object":o,"time":counter});
  }
  function reset()
  {
    clearInterval(subTimer);
    counter=0;
  }
  function startInterval(){
    subTimer= setInterval(function(){
      counter+=0.01;
      counter = Math.round(counter*100)/100;
    }, 10);
  }
  function stopInterval(){
    clearInterval(subTimer);
  }
  $('#begin').mousedown(function() {
    startInterval();
  });

  $('input[type=number]').val('0')
  $('input[type=text]').val(' ')
  $('textarea').val('')
  $('#foul').html('0');
  $('#techFoul').html('0');
  $('input').prop( "checked",false );
  times = [];
  clearInterval(subTimer);
  subTimer = null;


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
    var $startingInfo = $('#startingInfo');
    var $form = $("#scoutingForm");
    console.log('something fired',event)


    // Let's select and cache all the fields
    var $inputs = $startingInfo.find("input, select, textarea");
    var $formInputs = $form.find("input, select, textarea");
    console.log('formInputs',$form, $formInputs)
    $inputs.push.apply($inputs,$formInputs);





    console.log('inputs',$inputs)

    // Serialize the data in the form
    // find="=&";
    // replace="=off&";
    // var serializedData = $form.serialize().replace(new RegExp(escapeRegExp(find), 'g'), replace);
    var serializedData = $inputs.serializeArray();
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

request =  $.ajax({
    // url: "http://frc.magrittescow.com/scouting/686/scoutingForm/app.php",
    url: "./app.php",
    data: serializedData,
    type: "POST",
    error: function() { console.log('Failed!');
    console.trace();
  }
});
//request = $.ajax({
//  url: "https://script.google.com/macros/s/AKfycby42O3qBY63DFNkjaNKPNtdsLG-AzXjbmmVdn_OfuKqbsgQ-34/exec",
//  type: "GET",
//  data: serializedData,
//  crossDomain: true,
//  dataType: 'json',
//  //            success: function() { alert("Success"); },
//  error: function() { alert('Failed!'); },
//});


// Callback handler that will be called on success
request.done(function (response, textStatus, jqXHR){
  // Log a message to the console
  var scoutName = $('#scoutName').val();
  var matchNumber = $('#matchNumber').val();
  console.log("Hooray, ",scoutName,"in match ",matchNumber," worked!");
  $('input[type=number]').val('')
  $('input[type=text]').val(' ')
  $('textarea').val(' ')
  $('#foul').html('0');
  $('#techFoul').html('0');
  $('#scoutName').val(scoutName);
  $('input').prop( "checked",false );
  counter = 0;
  clearInterval(subTimer);
  times = [];
  subTimer = null;
  clearInterval(interval);
  interval=false;
  timer=15;
  $('#time').html('Start');
  auto=true;
  $('#matchNumber').val(Number(matchNumber) + 1);
  $('#startingInfo').foundation('open');
  $('#message').html(' ');

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
