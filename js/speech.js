
var final_transcript = '';
var ignore_onend;
var start_timestamp;
if (!('webkitSpeechRecognition' in window)) {
  upgrade();
} else {
  //start_button.style.display = 'inline-block';

  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;


  recognition.onerror = function(event) {

    if (event.error == 'no-speech') {
      ignore_onend = true;
    }
    if (event.error == 'audio-capture') {
      ignore_onend = true;
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 100) {

      } else {

      }
      ignore_onend = true;
    }
  };

  recognition.onend = function() {


    if (ignore_onend) {
      return;
    }

    if (!final_transcript) {
      return;
    }

  };

  recognition.onresult = function(event) {
    var interim_transcript = '';
    if (typeof(event.results) == 'undefined') {
      recognition.onend = null;
      recognition.stop();
      upgrade();
      return;
    }
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    //final_span.innerHTML = linebreak(final_transcript);
    //interim_span.innerHTML = linebreak(interim_transcript);
    if (final_transcript || interim_transcript) {
      //showButtons('inline-block');
    }
  };
}

function upgrade() {
  start_button.style.visibility = 'hidden';
  //showInfo('info_upgrade');
}

var two_line = /\n\n/g;
var one_line = /\n/g;

function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}

var first_char = /\S/;

function capitalize(s) {
  return s.replace(first_char, function(m) {
    return m.toUpperCase();
  });
}



function startButton(event) {
  start_button.style.display = 'none';
  div_grabando.style.display = 'block';
  final_transcript = '';
  //recognition.lang = "en-US";
  recognition.lang = "es-CO";
  recognition.start();
  ignore_onend = false;

  start_timestamp = event.timeStamp;
  setTimeout(function() {

    start_button.style.display = 'block';
    div_grabando.style.display = 'none';
    mostrarReporte();
    recognition.stop();
    return;

  }, 6000);
}

function mostrarReporte() {
  $.each(poligonosEstados, function (key, val) {
    console.log(val)
    if(final_transcript.indexOf(this.nombre)>=0){
      google.maps.event.trigger( this, 'click' );
      return;
    }  
  })
}