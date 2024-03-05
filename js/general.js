
function rnd(min, max, decimals=1) { // min and max included 
  return Math.floor(decimals*(Math.random() * (max - min + 1) + min))/decimals
}

function randomString(length) {
  var result = [];
  var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123546789';
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
  }
  return result.join('');
}

function formata(number, decimals) {
  var comma = ','
  var string = Math.max(0, number).toFixed(decimals)
  var length = string.length
  var end = /^\d{4,}$/.test(string) ? length % 3 : 0;
  return '$ '+(end ? string.slice(0, end) + comma : '') + string.slice(end).replace(/(\d{3})(?=\d)/g, '$1' + comma);
}

function arraySum(element){
  var total=0
  $.each(element, function(key, value) {
    total+=value
  });
  return total
}